<?php


namespace App\Filament\Resources;

use App\Models\Berita;
use Filament\Resources\Resource;

use Filament\Forms\Form;



use App\Filament\Resources\BeritaResource\Pages;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction; // Gunakan namespace yang benar untuk EditAction


class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required(),

                Textarea::make('isi')
                    ->label('Deskripsi')
                    ->required(),

                FileUpload::make('gambar')
                    ->label('Upload Gambar')
                    ->directory('images/berita')
                    ->disk('public')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->size(100),

                TextColumn::make('judul')
                    ->label('Judul'),

                TextColumn::make('isi')
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }

}
