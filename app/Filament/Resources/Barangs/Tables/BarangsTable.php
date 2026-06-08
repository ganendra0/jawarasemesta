<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),

                TextColumn::make('nama_barang')
                    ->searchable(),

                TextColumn::make('stok'),

                TextColumn::make('harga')
                    ->money('IDR'),

                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}