<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementCategoryResource\Pages;
use App\Filament\Resources\AdvertisementCategoryResource\RelationManagers;
use App\Models\AdvertisementCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvertisementCategoryResource extends Resource
{
    protected static ?string $model = AdvertisementCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //set form
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->label('Slug'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
                // status boolean
                Forms\Components\Toggle::make('status')
                    ->label('Status')
                    ->default(1)
                    ->inline()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //set all fileds
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->label('ID'),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Name'),
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable()
                    ->label('Slug'),
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->searchable()
                    ->label('Description'),
                Tables\Columns\BooleanColumn::make('status')
                    ->sortable()
                    ->label('Status')
                    ->trueIcon('heroicon-o-check')
                    ->falseIcon('heroicon-o-x-mark'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAdvertisementCategories::route('/'),
            'create' => Pages\CreateAdvertisementCategory::route('/create'),
            'edit' => Pages\EditAdvertisementCategory::route('/{record}/edit'),
        ];
    }
}
