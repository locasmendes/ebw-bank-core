<?php

namespace App\Listeners;

use App\Events\PartnerInvestorReceived;
use App\Models\PartnerInvestor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotifyCRMPartnerInvestorReceived
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
     * @param  \App\Events\PartnerInvestorReceived  $event
     * @return void
     */
    public function handle(PartnerInvestorReceived $event)
    {
        $partnerInvestor = $event->partnerInvestor;

        $response = Http::ebw_crm()->post('/ebw/target/register', [
            'name' => $partnerInvestor->name,
            'email' => $partnerInvestor->email,
            'mobile' => $partnerInvestor->phone,
            'documentNumber' => $partnerInvestor->cpf_cnpj,
            'whatsappOptIn' => $partnerInvestor->allow_infomation_whatsapp_sms ? 'yes' : 'no',
            'emailOptIn' => $partnerInvestor->allow_infomation_email ? 'yes' : 'no',
            'value' => PartnerInvestor::INVESTMENTS[$partnerInvestor->investment] * 1000
        ]);

        if ($response->successful()) {
            return;
        }

        if ($response->failed()) {
            Log::channel('ebw-crm')->warning($response->body(), ['status' => $response->status(), 'form' => 'partner-investor', 'id' => $partnerInvestor->id]);
            return;
        }
    }
}
