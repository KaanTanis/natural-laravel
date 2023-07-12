<?php

namespace App\Filament\Resources\OtherPageResource\Pages;

use App\Filament\Resources\OtherPageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherPage extends EditRecord
{
    protected static string $resource = OtherPageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
