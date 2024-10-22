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
            // Tambahkan dropdown untuk kategori
            Select::make('category')
                ->label('Kategori')
                ->options([
                    'Buku Bacaan' => 'Buku Bacaan',
                    'Materi Pelajaran' => 'Materi Pelajaran',
                ])
                ->required(),
            FileUpload::make('pdf_file')->required(),
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
                TextColumn::make('category')->label('Kategori'),  // Tambahkan kolom kategori
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
