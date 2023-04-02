<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurTeamResource\Pages;
use App\Filament\Resources\OurTeamResource\RelationManagers;
use App\Filament\Resources\OurTeamResource\Widgets\OurTeamOverview;
use App\Models\OurTeam;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurTeamResource extends Resource
{
    protected static ?string $model = OurTeam::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Главная';

    protected static ?string $pluralLabel = 'Наша команда';
    protected static ?string $label = '';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\Card::make()
                ->schema([
                  Forms\Components\TextInput::make('name')
                    ->label('Имя')
                    ->required()
                    ->maxLength(255),
                  Forms\Components\TextInput::make('experience')
                    ->label('Стаж')
                    ->required()
                    ->maxLength(255),
                  Forms\Components\RichEditor::make('description')
                    ->label('Описание')
                    ->required(),
                  Forms\Components\FileUpload::make('image')
                    ->label('Изображение')
                    ->image()
                    ->required(),
                ]),

                Forms\Components\Section::make('Специальности')
                  ->schema([
                    Forms\Components\Repeater::make('speciality')
                      ->schema([
                        Forms\Components\TextInput::make('speciality')
                          ->label('Специальность')
                          ->required(),
                ])
                  ->createItemButtonLabel('Добавить специальность')
                  ->orderable()
                  ->defaultItems(1)
                  ->disableLabel()
                  ->required(),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                  ->label('Имя'),
                Tables\Columns\ImageColumn::make('image')
                  ->label('Изображение')
                  ->circular(),
                Tables\Columns\TextColumn::make('experience')
                  ->label('Стаж'),
//                Tables\Columns\TextColumn::make('speciality'),
                Tables\Columns\TextColumn::make('description')
                  ->label('Описание')
                  ->html()
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
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
          OurTeamOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOurTeams::route('/'),
            'create' => Pages\CreateOurTeam::route('/create'),
            'edit' => Pages\EditOurTeam::route('/{record}/edit'),
        ];
    }
}
