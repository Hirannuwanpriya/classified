<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementResource\Pages;
use App\Filament\Resources\AdvertisementResource\RelationManagers;
use App\Models\Advertisement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //set all fields
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
//                    ->searchable()
                    ->label('Category'),

                Forms\Components\Textarea::make('content')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('opening_hours')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website_url')
                    ->url()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->label('Status')
                    ->default(1)
                    ->inline()
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->required()
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            //set all fileds
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->label('ID'),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable()
                    ->label('Category'),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
//                Tables\Columns\TextColumn::make('slug')
//                    ->sortable()
//                    ->searchable()
//                    ->label('Slug'),
                Tables\Columns\TextColumn::make('opening_hours')
                    ->sortable()
                    ->searchable()
                    ->label('Opening Hours'),
//                Tables\Columns\TextColumn::make('location')
//                    ->sortable()
//                    ->searchable()
//                    ->label('Location'),
                Tables\Columns\TextColumn::make('website_url')
                    ->label('Website URL')
                    ->url(
                        fn ($record) => $record->website_url,
                        shouldOpenInNewTab: true
                    )
                    ->formatStateUsing(fn () => 'Visit Website')
                    ->extraAttributes(['class' => 'fi-btn grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action']),
                Tables\Columns\BooleanColumn::make('status')
                    ->sortable()
                    ->label('Publish'),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
                    ->dateTime()
                    ->label('Published At'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->sortable()
                    ->dateTime()
                    ->label('Updated At'),
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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisement::route('/create'),
            'edit' => Pages\EditAdvertisement::route('/{record}/edit'),
        ];
    }
}
