<?php

namespace App\Filament\Resources\TestimonialResouceResource\Pages;

use App\Filament\Resources\TestimonialResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialResouce extends EditRecord
{
    protected static string $resource = TestimonialResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
