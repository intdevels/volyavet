<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Filament\Resources\ServiceResource\Widgets\ServiceOverview;
use App\Models\Service;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
protected static ?string $model = Service::class;

protected static ?string $navigationIcon = 'heroicon-o-collection';
protected static ?string $recordTitleAttribute = 'title';
protected static ?string $navigationGroup = 'Главная';
protected static ?string $pluralLabel = 'Услуги';
protected static ?string $label = '';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Название')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (\Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label('Урл')
                            ->disabled()
                            ->required()
                            ->unique(Service::class, 'slug', ignoreRecord: true),


                  Forms\Components\Textarea::make('description')
                      ->label('Описане'),
                  Forms\Components\FileUpload::make('image')
                      ->label('Изображение')
                      ->image()
                      ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()
                    ->label('Название'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Изображение'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Описане'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id');
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ServiceChildrenRelationManager::class
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ServiceOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
