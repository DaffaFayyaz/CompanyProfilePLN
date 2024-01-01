<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\DatePicker;
use stdClass;
use Filament\Forms;
use Filament\Tables;
use App\Models\Kegiatan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\KegiatanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KegiatanResource\RelationManagers;
use App\Filament\Resources\KegiatanResource\Pages\EditKegiatan;
use App\Filament\Resources\KegiatanResource\Pages\ListKegiatans;
use App\Filament\Resources\KegiatanResource\Pages\CreateKegiatan;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('judul'),
                    DatePicker::make('tanggal')->required(),
                    TextInput::make('text'),
                    FileUpload::make('foto')->required(),
                    FileUpload::make('foto2'),
                    FileUpload::make('foto3'),
                    FileUpload::make('foto4'),
                    FileUpload::make('foto5'),
                    FileUpload::make('foto6'),
                    FileUpload::make('foto7'),
                    FileUpload::make('foto8'),
                    FileUpload::make('foto9'),
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
                TextColumn::make('judul')->sortable()->searchable(),
                TextColumn::make('text')->sortable()->searchable(),
                TextColumn::make('tanggal')->sortable()->searchable(),
                ImageColumn::make('foto')->sortable()->searchable(),
                ImageColumn::make('foto2')->sortable()->searchable(),
                ImageColumn::make('foto3')->sortable()->searchable(),
                ImageColumn::make('foto4')->sortable()->searchable(),
                ImageColumn::make('foto5')->sortable()->searchable(),
                ImageColumn::make('foto6')->sortable()->searchable(),
                ImageColumn::make('foto7')->sortable()->searchable(),
                ImageColumn::make('foto8')->sortable()->searchable(),
                ImageColumn::make('foto9')->sortable()->searchable(),
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
            'index' => Pages\ListKegiatans::route('/'),
            'create' => Pages\CreateKegiatan::route('/create'),
            'edit' => Pages\EditKegiatan::route('/{record}/edit'),
        ];
    }    
}