<?php

namespace App\Filament\Resources\AdvertisementCategoryResource\Pages;

use App\Filament\Resources\AdvertisementCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvertisementCategories extends ListRecords
{
    protected static string $resource = AdvertisementCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
