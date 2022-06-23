<?php

namespace App\Filament\Resources\TalentResource\Pages;

use App\Filament\Resources\TalentResource;
use Filament\Resources\Pages\ListRecords;

class ListTalent extends ListRecords
{
    protected static string $view = 'vendor.filament.resources.pages.talents.list-records';

    protected static string $resource = TalentResource::class;
}
