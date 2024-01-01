<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManajemenResource\Pages;
use App\Filament\Resources\ManajemenResource\RelationManagers;
use App\Models\Manajemen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use stdClass;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManajemenResource extends Resource
{
    protected static ?string $model = Manajemen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('nama')->required(),
                    TextInput::make('nama_jabatan')->required(),
                    FileUpload::make('foto')->required()->directory('foto-manager'),
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
            TextColumn::make('nama')->sortable()->searchable(),
            TextColumn::make('nama_jabatan')->sortable()->searchable(),
            ImageColumn::make('foto')->sortable()->searchable(),
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
            'index' => Pages\ListManajemens::route('/'),
            'create' => Pages\CreateManajemen::route('/create'),
            'edit' => Pages\EditManajemen::route('/{record}/edit'),
        ];
    }    
}
