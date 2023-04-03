<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
protected static ?string $model = News::class;

protected static ?string $navigationIcon = 'heroicon-o-collection';
protected static ?string $recordTitleAttribute = 'title';
//    protected static ?string $navigationGroup = 'Главная';

protected static ?string $pluralLabel = 'Новости';
protected static ?string $label = '';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('title_library')
                            ->label('Заголовок библиотеки')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('title_article_interesting')
                            ->label('Заголовок статьи (секция интересует)')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок'),
                Tables\Columns\TextColumn::make('title_library')
                    ->label('Заголовок библиотеки'),
                Tables\Columns\TextColumn::make('title_article_interesting')
                    ->label('Заголовок статьи (секция интересует)'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\NewsVideosRelationManager::class,
            RelationManagers\NewsArticlesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
