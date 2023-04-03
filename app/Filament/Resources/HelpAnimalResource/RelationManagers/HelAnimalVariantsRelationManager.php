<?php

namespace App\Filament\Resources\HelpAnimalResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HelAnimalVariantsRelationManager extends RelationManager
{
    protected static string $relationship = 'hel_animal_variants';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $label = '';
    protected static ?string $title = 'Каким животным помогаем';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Название')
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label('Изображение')
                            ->image()
                            ->required()
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->square()
                    ->label('Изображение'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Животное'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
