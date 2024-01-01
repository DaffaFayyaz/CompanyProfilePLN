<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AlatUji;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AlatUjiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlatUjiResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

use stdClass;

class AlatUjiResource extends Resource
{
    protected static ?string $model = AlatUji::class;

    public static ?string $navigationLabel = 'Alat Uji';

    protected static ?string $navigationGroup = 'Alat';

    public static function form(Form $form): Form
    {
        $years = range(date('Y'), 1990);

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('lokasi_alat_uji'), 
                        TextInput::make('nama_alat_uji'), 
                        TextInput::make('serial_id'), 
                        Select::make('tahun_buat')
                            ->options(array_combine($years, $years)),
                        TextInput::make('merk'),
                        TextInput::make('tipe'),
                        TextInput::make('kondisi'), 
                        TextInput::make('keterangan'), 
                        TextInput::make('jumlah_pemakaian_tw_1')->numeric(), 
                        DatePicker::make('tanggal_kalibrasi_akhir'), 
                        TextInput::make('sertifikat_kalibrasi'), 
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
                TextColumn::make('lokasi_alat_uji')->sortable()->searchable(),    
                TextColumn::make('nama_alat_uji')->sortable()->searchable(),    
                TextColumn::make('serial_id')->sortable()->searchable(),  
                TextColumn::make('tahun_buat')->sortable()->searchable(),
                TextColumn::make('merk')->sortable()->searchable(),
                TextColumn::make('tipe')->sortable()->searchable(),    
                TextColumn::make('kondisi')->sortable()->searchable(),    
                TextColumn::make('keterangan')->sortable()->searchable(),  
                TextColumn::make('jumlah_pemakaian_tw_1')->sortable()->searchable(),  
                TextColumn::make('tanggal_kalibrasi_akhir')->sortable()->searchable()->dateTime(),   
                TextColumn::make('sertifikat_kalibrasi')->sortable()->searchable(),    
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
            'index' => Pages\ListAlatUjis::route('/'),
            'create' => Pages\CreateAlatUji::route('/create'),
            'edit' => Pages\EditAlatUji::route('/{record}/edit'),
        ];
    }
}
