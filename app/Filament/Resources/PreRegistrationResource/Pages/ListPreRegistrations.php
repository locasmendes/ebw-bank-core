<?php

namespace App\Filament\Resources\PreRegistrationResource\Pages;

use App\Filament\Resources\PreRegistrationResource;
use Filament\Resources\Pages\ListRecords;

class ListPreRegistrations extends ListRecords
{
    protected static string $view = 'vendor.filament.resources.pages.pre-registrations.list-records';

    protected static string $resource = PreRegistrationResource::class;
}
