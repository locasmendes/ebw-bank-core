<?php

namespace App\Listeners;

use App\Events\SubmissionReceived;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotifyCRMSubmissionReceived
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
     * @param  \App\Events\SubmissionReceived  $event
     * @return void
     */
    public function handle(SubmissionReceived $event)
    {
        $submission = $event->submission;

        $response = Http::ebw_crm()->post('/target/register', [
            'name' => $submission->name,
            'email' => $submission->email,
            'mobile' => $submission->phone,
            'documentNumber' => $submission->cpf_cnpj,
            'whatsappOptIn' => $submission->allow_infomation_whatsapp_sms ? 'yes' : 'no',
            'emailOptIn' => $submission->allow_infomation_email ? 'yes' : 'no',
            'value' => 0,
            'serviceId' => '6b606634-b049-4aad-9e7e-d5e5198d9d72',
            'landingPageId' => '42da989c-82f6-46cc-a10f-12265ec3c435'
        ]);

        if ($response->successful()) {
            return;
        }

        if ($response->failed()) {
            Log::channel('ebw-crm')->warning($response->body(), ['status' => $response->status(), 'form' => 'submission', 'id' => $submission->id]);
            return;
        }
    }
}
