<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PimpinanManager;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PimpinanManagerResource\Pages;
use App\Filament\Resources\PimpinanManagerResource\RelationManagers;

class PimpinanManagerResource extends Resource
{
    protected static ?string $model = PimpinanManager::class;

    protected static ?string $navigationGroup = 'Beranda';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('nama_manager')->required(),
                    TextInput::make('tahun_pimpinan')->required(),
                    FileUpload::make('image')->required(),
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
                TextColumn::make('nama_manager')->sortable()->searchable(),
                TextColumn::make('tahun_pimpinan')->sortable()->searchable(),
                ImageColumn::make('image')->sortable()->searchable(),
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
            'index' => Pages\ListPimpinanManagers::route('/'),
            'create' => Pages\CreatePimpinanManager::route('/create'),
            'edit' => Pages\EditPimpinanManager::route('/{record}/edit'),
        ];
    }    
}
