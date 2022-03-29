<?php

namespace App\Filament\Resources\PartnerInvestorResource\Pages;

use App\Filament\Resources\PartnerInvestorResource;
use Filament\Resources\Pages\ListRecords;

class ListPartnerInvestors extends ListRecords
{
    protected static string $view = 'vendor.filament.resources.pages.partner-investors.list-records';

    protected static string $resource = PartnerInvestorResource::class;
}
