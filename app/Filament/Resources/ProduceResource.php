<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduceResource\Pages;
use App\Filament\Resources\ProduceResource\RelationManagers;
use App\Models\Produce;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProduceResource extends Resource
{
    protected static ?string $model = Produce::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required(),

                Forms\Components\TextInput::make('stock')
                    ->required(),

                Forms\Components\TextInput::make('calories')
                    ->required(),

                Forms\Components\TextInput::make('protein')
                    ->required(),

                Forms\Components\TextInput::make('sugar')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('stock'),
                Tables\Columns\TextColumn::make('calories'),
                Tables\Columns\TextColumn::make('protein'),
                Tables\Columns\TextColumn::make('sugar')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduces::route('/'),
            'create' => Pages\CreateProduce::route('/create'),
            'edit' => Pages\EditProduce::route('/{record}/edit'),
        ];
    }
}
