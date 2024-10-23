<?php


namespace App\Filament\Resources;

use App\Models\Galeri;
use Filament\Resources\Resource;

use Filament\Forms\Form;



use App\Filament\Resources\GalleryResource\Pages;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction; // Gunakan namespace yang benar untuk EditAction


class GalleryResource extends Resource
{
    protected static ?string $model = Galeri::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),

                FileUpload::make('image')
                    ->label('Upload Gambar')
                    ->directory('images/galeri')
                    ->disk('public_html')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->size(100),

                TextColumn::make('title')
                    ->label('Judul'),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->actions([
                EditAction::make(),   // Aksi Edit yang benar
            ]);
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Konten'; // Grup di sidebar dashboard
    }
  

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

}
