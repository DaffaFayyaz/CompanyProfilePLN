<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use App\Models\Trafo;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\NumberColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TrafoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TrafoResource\RelationManagers;

class TrafoResource extends Resource
{
    protected static ?string $model = Trafo::class;

    protected static ?string $navigationGroup = 'Alat';

    public static function form(Form $form): Form
    {
        $years = range(date('Y'), 1990);

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('lokasi_gi')->required(),
                        TextInput::make('nama_bay')->required(),
                        TextInput::make('merk_trafo')->required(),
                        Select::make('tahun_operasi')->required()
                        ->options(array_combine($years, $years))
                        ->required(),
                        TextInput::make('ratio_trafo')->required(), 
                        TextInput::make('rata_rata_pembebanan')->required(),
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
                TextColumn::make('lokasi_gi')->sortable()->searchable(), // Change to 'lokasi_gi'
                TextColumn::make('nama_bay')->sortable()->searchable(), // Change to 'nama_bay'
                TextColumn::make('merk_trafo')->sortable()->searchable(), // Change to 'merk_trafo'
                TextColumn::make('tahun_operasi')->sortable()->searchable(), // Change to TextColumn
                TextColumn::make('ratio_trafo')->sortable()->searchable(), // Add new field 'ratio_trafo'
                TextColumn::make('rata_rata_pembebanan')->sortable()->searchable(), // Add new field 'rata_rata_pembebanan'
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
            'index' => Pages\ListTrafos::route('/'),
            'create' => Pages\CreateTrafo::route('/create'),
            'edit' => Pages\EditTrafo::route('/{record}/edit'),
        ];
    }
}
