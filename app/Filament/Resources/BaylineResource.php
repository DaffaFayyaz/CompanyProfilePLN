<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use App\Models\Bayline;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BaylineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BaylineResource\RelationManagers;

class BaylineResource extends Resource
{
    protected static ?string $model = Bayline::class;


    protected static ?string $navigationGroup = 'Alat';

    public static function form(Form $form): Form
    {
        $years = range(date('Y'), 1990);
        
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('gardu_induk')->required(),
                        TextInput::make('nama_bay')->required(),
                        Select::make('tahun_operasi')->options(array_combine($years, $years)),
                        TextInput::make('kapasitas'),
                        TextInput::make('KV')->required(),
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
                TextColumn::make('gardu_induk')->sortable()->searchable(),
                TextColumn::make('nama_bay')->sortable()->searchable(),
                TextColumn::make('tahun_operasi')->sortable()->searchable(),
                TextColumn::make('kapasitas')->sortable()->searchable(),
                TextColumn::make('KV')->sortable()->searchable(),
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
            'index' => Pages\ListBaylines::route('/'),
            'create' => Pages\CreateBayline::route('/create'),
            'edit' => Pages\EditBayline::route('/{record}/edit'),
        ];
    }
}