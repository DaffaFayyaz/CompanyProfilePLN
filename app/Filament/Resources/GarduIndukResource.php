<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\GarduInduk;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GarduIndukResource\Pages;
use App\Filament\Resources\GarduIndukResource\RelationManagers;

class GarduIndukResource extends Resource
{
    protected static ?string $model = GarduInduk::class;

    public static ?string $navigationLabel = 'Gardu Induk';

    public static ?string $navigationGroup = 'Page Gardu Induk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('isi_text_paragraf')->required(),
                        TextInput::make('nama_pimpinan')->required(),
                        TextInput::make('nama_gardu_induk')->required(),
                        TextInput::make('nama_jabatan')->required(),
                        TextInput::make('alamat')->required(),
                        TextInput::make('link_map')->required(),
                        FileUpload::make('foto_gardu_induk')->required(),
                        FileUpload::make('foto_pimpinan')->required(),
                        FileUpload::make('foto_diagram_line')->required()
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
                TextColumn::make('isi_text_paragraf')->sortable()->searchable(),
                TextColumn::make('nama_pimpinan')->sortable()->searchable(),
                TextColumn::make('nama_gardu_induk')->sortable()->searchable(),
                TextColumn::make('nama_jabatan')->sortable()->searchable(),
                TextColumn::make('alamat')->sortable()->searchable(),
                TextColumn::make('link_map')->sortable()->searchable(),
                ImageColumn::make('foto_gardu_induk')->sortable()->searchable(),
                ImageColumn::make('foto_pimpinan')->sortable()->searchable(),
                ImageColumn::make('foto_diagram_line')->sortable()->searchable(),
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
            'index' => Pages\ListGarduInduks::route('/'),
            'create' => Pages\CreateGarduInduk::route('/create'),
            'edit' => Pages\EditGarduInduk::route('/{record}/edit'),
        ];
    }
}