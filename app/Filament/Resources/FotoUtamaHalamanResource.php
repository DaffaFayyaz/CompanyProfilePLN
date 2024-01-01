<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoUtamaHalamanResource\Pages;
use App\Filament\Resources\FotoUtamaHalamanResource\RelationManagers;
use App\Models\FotoUtamaHalaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use stdClass;

class FotoUtamaHalamanResource extends Resource
{
    protected static ?string $model = FotoUtamaHalaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto_trafo'),
                FileUpload::make('foto_alatuji'),
                FileUpload::make('foto_tower'),
                FileUpload::make('foto_bayline'),
                FileUpload::make('foto_kegiatan'),
                FileUpload::make('foto_manajemen'),
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
                ImageColumn::make('foto_trafo')->sortable()->searchable(),
                ImageColumn::make('foto_alatuji')->sortable()->searchable(),
                ImageColumn::make('foto_tower')->sortable()->searchable(),
                ImageColumn::make('foto_bayline')->sortable()->searchable(),
                ImageColumn::make('foto_kegiatan')->sortable()->searchable(),
                ImageColumn::make('foto_manajemen')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFotoUtamaHalamen::route('/'),
            'create' => Pages\CreateFotoUtamaHalaman::route('/create'),
            'edit' => Pages\EditFotoUtamaHalaman::route('/{record}/edit'),
        ];
    }    
}
