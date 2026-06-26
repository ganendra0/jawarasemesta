<?php

namespace App\Filament\Resources\Portofolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\Client;

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
                    ->disk('public')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/webp'])
                    ->directory('portofolio')
                    ->imagePreviewHeight('250')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->nullable(),

                Select::make('clients')
                    ->label('Clients')
                    ->multiple()
                    ->relationship('clients', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable()
                    ->placeholder('Select clients'),

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