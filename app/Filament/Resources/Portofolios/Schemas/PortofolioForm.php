<?php

namespace App\Filament\Resources\Portofolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PortofolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),

                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('gambar')
                    ->image()
                    ->directory('portofolio')
                    ->nullable(),

                TextInput::make('link_demo')
                    ->url()
                    ->nullable(),

                TextInput::make('link_github')
                    ->url()
                    ->nullable(),

                TextInput::make('teknologi')
                    ->nullable(),
            ]);
    }
}