<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppealResource\Pages;
use App\Filament\Resources\AppealResource\RelationManagers;
use App\Models\Appeal;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppealResource extends Resource
{
    protected static ?string $model = Appeal::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationGroup = 'Главная';

    protected static ?string $pluralLabel = 'Обращение';
    protected static ?string $label = '';

    public static function form(Form $form): Form
    {
        return $form

          ->schema([
            Forms\Components\Card::make()
              ->schema([
                Forms\Components\TextInput::make('title')
                  ->label('Загаловок')
                  ->required(),
                Forms\Components\Textarea::make('description')
                  ->label('Описание')
                  ->required(),
                Forms\Components\FileUpload::make('image')
                  ->label('Изображение')
                  ->image()
                  ->required()
              ]),
          ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                  ->label('Загаловок'),
                Tables\Columns\TextColumn::make('description')
                  ->limit(50)
                  ->label('Описание'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Изображение'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            RelationManagers\AppealVariantsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppeals::route('/'),
            'create' => Pages\CreateAppeal::route('/create'),
            'edit' => Pages\EditAppeal::route('/{record}/edit'),
        ];
    }    
}
