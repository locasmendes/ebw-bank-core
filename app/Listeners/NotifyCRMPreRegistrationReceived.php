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
            'value' => 0,
            'serviceId' => '41d26f1a-b263-44ca-bc71-20f4c58f320b',
            'landingPageId' => 'e999f6cc-3ffe-4d70-8e39-aba44ff89e5f'
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
