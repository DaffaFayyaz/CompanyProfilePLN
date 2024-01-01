<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\JumlahAlat;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JumlahAlatResource\Pages;
use App\Filament\Resources\JumlahAlatResource\RelationManagers;
use App\Filament\Resources\JumlahAlatResource\Pages\EditJumlahAlat;
use App\Filament\Resources\JumlahAlatResource\Pages\ListJumlahAlats;
use App\Filament\Resources\JumlahAlatResource\Pages\CreateJumlahAlat;

class JumlahAlatResource extends Resource
{
    protected static ?string $model = JumlahAlat::class;

    protected static ?string $navigationGroup = 'Alat';
    protected static ?string $navigationLabel = 'Jumlah Alat';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('jumlah_trafo')->required(),
                    TextInput::make('jumlah_bayline')->required(),
                    TextInput::make('jumlah_cubicle')->required(),
                    TextInput::make('jumlah_tower')->required(),
                    TextInput::make('jumlah_alat_uji')->required(),
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
                TextColumn::make('jumlah_trafo')->sortable()->searchable(),
                TextColumn::make('jumlah_bayline')->sortable()->searchable(),
                TextColumn::make('jumlah_cubicle')->sortable()->searchable(),
                TextColumn::make('jumlah_tower')->sortable()->searchable(),
                TextColumn::make('jumlah_alat-uji')->sortable()->searchable(),
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
            'index' => Pages\ListJumlahAlats::route('/'),
            'create' => Pages\CreateJumlahAlat::route('/create'),
            'edit' => Pages\EditJumlahAlat::route('/{record}/edit'),
        ];
    }    
}
