<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClient extends CreateRecord
{
    protected static string $resource = ClientResource::class;

    protected function afterCreate(): void
    {
        if($this->form->getState()['send_link']) {
            Notification::make('send link' . $this->record->id)
                ->body('A new Client Account Agreement Link was sent to ' . $this->record->name . '.')
                ->send();
        }
    }
}
