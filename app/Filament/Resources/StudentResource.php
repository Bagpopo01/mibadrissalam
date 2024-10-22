<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                Forms\Components\Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Male' => 'Laki-laki',
                        'Female' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TextInput::make('place_of_birth')
                    ->label('Tempat Lahir')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->label('Alamat')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('No Telepon')
                    ->nullable(),
                Forms\Components\TextInput::make('religion')
                    ->label('Agama')
                    ->required(),
                Forms\Components\TextInput::make('siblings_count')
                    ->label('Jumlah Saudara')
                    ->nullable(),
                Forms\Components\TextInput::make('status')
                    ->label('Status (Yatim/Piatu)')
                    ->nullable(),
                Forms\Components\TextInput::make('language_at_home')
                    ->label('Bahasa Sehari-hari di Rumah')
                    ->nullable(),
                Forms\Components\TextInput::make('blood_type')
                    ->label('Golongan Darah')
                    ->nullable(),
                Forms\Components\TextInput::make('physical_condition')
                    ->label('Kondisi Jasmani')
                    ->nullable(),
                
                // Data Orang Tua/Wali
                Forms\Components\TextInput::make('father_name')
                    ->label('Nama Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_birth_place')
                    ->label('Tempat Lahir Ayah')
                    ->nullable(),
                Forms\Components\DatePicker::make('father_birth_date')
                    ->label('Tanggal Lahir Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_religion')
                    ->label('Agama Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_education')
                    ->label('Pendidikan Tertinggi Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_job')
                    ->label('Pekerjaan Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_nationality')
                    ->label('Kewarganegaraan Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_address')
                    ->label('Alamat Ayah')
                    ->nullable(),
                Forms\Components\TextInput::make('father_phone')
                    ->label('No Telepon Ayah')
                    ->nullable(),
                
                Forms\Components\TextInput::make('mother_name')
                    ->label('Nama Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_birth_place')
                    ->label('Tempat Lahir Ibu')
                    ->nullable(),
                Forms\Components\DatePicker::make('mother_birth_date')
                    ->label('Tanggal Lahir Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_religion')
                    ->label('Agama Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_education')
                    ->label('Pendidikan Tertinggi Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_job')
                    ->label('Pekerjaan Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_nationality')
                    ->label('Kewarganegaraan Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_address')
                    ->label('Alamat Ibu')
                    ->nullable(),
                Forms\Components\TextInput::make('mother_phone')
                    ->label('No Telepon Ibu')
                    ->nullable(),
            ]);
    }
    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Nama'),
            Tables\Columns\TextColumn::make('gender')
                ->label('Jenis Kelamin'),
            Tables\Columns\TextColumn::make('date_of_birth')
                ->label('Tanggal Lahir'),
            Tables\Columns\TextColumn::make('place_of_birth')
                ->label('Tempat Lahir'),
            Tables\Columns\TextColumn::make('address')
                ->label('Alamat'),
            Tables\Columns\TextColumn::make('phone')
                ->label('No Telepon'),
        ])
        ->actions([
            Tables\Actions\EditAction::make()
                ->label('Edit'),
            Tables\Actions\DeleteAction::make()
                ->label('Hapus'),
        ]);
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
