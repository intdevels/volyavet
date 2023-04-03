<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HelpAnimalResource\Pages;
use App\Filament\Resources\HelpAnimalResource\RelationManagers;
use App\Models\HelpAnimal;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HelpAnimalResource extends Resource
{
    protected static ?string $model = HelpAnimal::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationGroup = 'О нас';

    protected static ?string $pluralLabel = 'Помошь животным';
    protected static ?string $label = '';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Описане')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50)
                    ->label('Описание'),
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
            RelationManagers\HelAnimalVariantsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHelpAnimals::route('/'),
            'create' => Pages\CreateHelpAnimal::route('/create'),
            'edit' => Pages\EditHelpAnimal::route('/{record}/edit'),
        ];
    }    
}
