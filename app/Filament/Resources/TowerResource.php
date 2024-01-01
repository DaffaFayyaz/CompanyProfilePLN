<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use App\Models\Tower;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\NumberColumn; // Add NumberColumn
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TowerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TowerResource\RelationManagers;

class TowerResource extends Resource
{
    protected static ?string $model = Tower::class;

    protected static ?string $navigationGroup = 'Alat';

    public static function form(Form $form): Form
    {
        $years = range(date('Y'), 1990);

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('wilayah_kerja')->required(), 
                        TextInput::make('upt')->required(), 
                        TextInput::make('ultg')->required(), 
                        TextInput::make('route')->required(), 
                        TextInput::make('route2')->required(), 
                        TextInput::make('tegangan_kv')->required(), 
                        TextInput::make('panjang_su_kms')->required(), 
                        TextInput::make('saluran_sk_kms')->required(),
                        TextInput::make('jenis')->required(), 
                        TextInput::make('luas_penampang')->required(), 
                        TextInput::make('kapasitas_a')->required()->numeric(), 
                        Select::make('tahun_operasi')->required()
                        ->options(array_combine($years, $years))
                        ->required(),
                        DatePicker::make('tanggal_operasi')->required(), 
                        TextInput::make('sirkit')->required(), 
                        TextInput::make('tower')->required(), 
                        TextInput::make('joint')->required(), 
                        TextInput::make('status_operasi')->required(), 
                        TextInput::make('keterangan')->required(), 
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No.')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                )->sortable(),
                TextColumn::make('wilayah_kerja')->sortable()->searchable(), 
                TextColumn::make('upt')->sortable()->searchable(), 
                TextColumn::make('ultg')->sortable()->searchable(), 
                TextColumn::make('route')->sortable()->searchable(), 
                TextColumn::make('route2')->sortable()->searchable(), 
                TextColumn::make('tegangan_kv')->sortable()->searchable(), 
                TextColumn::make('panjang_su_kms')->sortable()->searchable(), 
                TextColumn::make('saluran_sk_kms')->sortable()->searchable(), 
                TextColumn::make('jenis')->sortable()->searchable(), 
                TextColumn::make('luas_penampang')->sortable()->searchable(), 
                TextColumn::make('kapasitas_a')->sortable()->searchable(), 
                TextColumn::make('tahun_operasi')->sortable()->searchable(), 
                TextColumn::make('tanggal_operasi')->sortable()->searchable(), 
                TextColumn::make('sirkit')->sortable()->searchable(), 
                TextColumn::make('tower')->sortable()->searchable(), 
                TextColumn::make('joint')->sortable()->searchable(), 
                TextColumn::make('status_operasi')->sortable()->searchable(), 
                TextColumn::make('keterangan')->sortable()->searchable(), 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTowers::route('/'),
            'create' => Pages\CreateTower::route('/create'),
            'edit' => Pages\EditTower::route('/{record}/edit'),
        ];
    }
}
