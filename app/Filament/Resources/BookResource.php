<?php

namespace App\Filament\Resources;

use Filament\Forms\Form; // Filament\Forms\Form digunakan untuk Form
use Filament\Tables\Table; // Filament\Tables\Table digunakan untuk Table
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Pages\Actions;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;
    // Tidak menetapkan grup atau menetapkan grup yang sama dengan Galleries dan News
   

    protected static ?string $navigationLabel = 'Books'; // Label untuk menu Books

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')->required(),
            TextInput::make('author')->required(),
            
                FileUpload::make('gambar')
                    ->label('Upload Gambar')
                    ->directory('images/buku')
                    ->disk('public')
                    ->image()
                    ->required(),
            // Tambahkan dropdown untuk kategori
            Select::make('category')
                ->label('Kategori')
                ->options([
                    'Buku Bacaan' => 'Buku Bacaan',
                    'Materi Pelajaran' => 'Materi Pelajaran',
                ])
                 
                ->required(),
            FileUpload::make('pdf_file')->required(),
            Select::make('kelas')
                ->label('Kelas')
                ->options([
                    'Kelas 1' => 'Kelas 1',
                    'Kelas 2' => 'Kelas 2',
                     'Kelas 3' => 'Kelas 3',
                      'Kelas 4' => 'Kelas 4',
                       'Kelas 5' => 'Kelas 5',
                        'Kelas 6' => 'Kelas 6',
                ])
        ]);
    }
    public static function getNavigationGroup(): ?string
    {
        return 'Konten'; // Grup di sidebar dashboard
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul Buku'),
                  ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->size(100),
                TextColumn::make('category')->label('Kategori'),
                 TextColumn::make('kelas')->label('Untuk Kelas'),// Tambahkan kolom kategori
                TextColumn::make('author')->label('Penulis'),
            ])
            ->actions([
                EditAction::make(),  // Tambahkan aksi edit
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
  
}
