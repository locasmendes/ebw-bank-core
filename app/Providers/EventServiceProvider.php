<?php

namespace App\Providers;

use App\Events\PartnerInvestorReceived;
use App\Events\PreRegistrationReceived;
use App\Events\SubmissionReceived;
use App\Listeners\NotifyCRMPartnerInvestorReceived;
use App\Listeners\NotifyCRMPreRegistrationReceived;
use App\Listeners\NotifyCRMSubmissionReceived;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PreRegistrationReceived::class => [
            NotifyCRMPreRegistrationReceived::class
        ],
        PartnerInvestorReceived::class => [
            NotifyCRMPartnerInvestorReceived::class
        ],
        SubmissionReceived::class => [
            NotifyCRMSubmissionReceived::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
