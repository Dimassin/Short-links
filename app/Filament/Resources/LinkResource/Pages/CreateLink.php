<?php

namespace App\Filament\Resources\LinkResource\Pages;

use App\Filament\Resources\LinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreateLink extends CreateRecord
{
    protected static string $resource = LinkResource::class;

//    protected function getFormActions(): array
//    {
//        return [
//            CreateAction::make()
//                ->label('Create'),
//        ];
//    }
}
