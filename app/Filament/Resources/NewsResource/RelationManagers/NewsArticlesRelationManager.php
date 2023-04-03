<?php

namespace App\Filament\Resources\NewsResource\RelationManagers;

use App\Models\NewsArticle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class NewsArticlesRelationManager extends RelationManager
{
    protected static string $relationship = 'news_articles';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $label = '';
    protected static ?string $title = 'Статьи';
    protected ?bool $isLoadingDeferred = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('Урл')
                            ->disabled()
                            ->required()
                            ->unique(NewsArticle::class, 'slug', ignoreRecord: true),

                        Forms\Components\FileUpload::make('image')
                            ->label('Изображение')
                            ->image()
                            ->required(),

                        Forms\Components\DatePicker::make('date_of_publication')
                            ->label('Дата публикации')
                            ->format('Y-m-d')
                            ->displayFormat('d.m.Y')
                            ->required(),

                        Forms\Components\TextInput::make('title_single')
                            ->label('Заголовок страницы')
                            ->required(),

                        Forms\Components\FileUpload::make('image_single')
                            ->label('Изображение страницы')
                            ->image()
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->label('Описание'),
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
                Tables\Columns\ImageColumn::make('image_single')
                    ->square()
                    ->label('Изображение страницы'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок'),
                Tables\Columns\TextColumn::make('title_single')
                    ->label('Заголовок страницы'),
                Tables\Columns\TextColumn::make('date_of_publication')
                    ->label('Дата публикации')
                    ->date('d.m.Y'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Описание')
                    ->html(),
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
            ])
            ->reorderable('sort')
            ->defaultSort('sort');
    }    
}
