<?php

namespace App\Listeners;

use App\Events\PreRegistrationReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotifyCRMPreRegistrationReceived
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PreRegistrationReceived  $event
     * @return void
     */
    public function handle(PreRegistrationReceived $event)
    {
        $preRegistration = $event->preRegistration;

        $response = Http::ebw_crm()->post('/ebw/target/register', [
            'name' => $preRegistration->name,
            'email' => $preRegistration->email,
            'mobile' => $preRegistration->phone,
            'documentNumber' => $preRegistration->cpf_cnpj,
            'whatsappOptIn' => $preRegistration->allow_infomation_whatsapp_sms ? 'yes' : 'no',
            'emailOptIn' => $preRegistration->allow_infomation_email ? 'yes' : 'no',
            'value' => 0
        ]);

        if ($response->successful()) {
            return;
        }

        if ($response->failed()) {
            Log::channel('ebw-crm')->warning($response->body(), ['status' => $response->status(), 'form' => 'pre-registration', 'id' => $preRegistration->id]);
            return;
        }
    }
}
