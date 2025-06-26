<?php

namespace App\Filament\Resources\TestimonialResouceResource\Pages;

use App\Filament\Resources\TestimonialResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialResouces extends ListRecords
{
    protected static string $resource = TestimonialResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
