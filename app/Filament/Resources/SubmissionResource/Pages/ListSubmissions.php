<?php

namespace App\Filament\Resources\SubmissionResource\Pages;

use App\Filament\Resources\SubmissionResource;
use Filament\Resources\Pages\ListRecords;

class ListSubmissions extends ListRecords
{
    protected static string $view = 'vendor.filament.resources.pages.submissions.list-records';

    protected static string $resource = SubmissionResource::class;
}
