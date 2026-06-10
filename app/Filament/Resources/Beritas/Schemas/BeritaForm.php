<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('isi')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->directory('berita')
                    ->nullable(),
                TextInput::make('penulis')
                    ->required(),
                DatePicker::make('tanggal_publikasi')
                    ->required(),
            ]);
    }
}
