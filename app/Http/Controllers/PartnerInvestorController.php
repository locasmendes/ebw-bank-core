<?php

namespace App\Http\Controllers;

use App\Events\PartnerInvestorReceived;
use App\Exports\PartnerInvestorsExport;
use App\Models\PartnerInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class PartnerInvestorController extends Controller
{
    public function index()
    {
        return view('site.partner-investor');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'cpf-cnpj' => 'required|string',
            'investment' => 'required|string'
        ]);

        $data = collect($validate)->mapWithKeys(function ($item, $key) {
            return [Str::replace('-', '_', $key) => $item];
        })->toArray();

        $partnerInvestor = PartnerInvestor::create($data);

        PartnerInvestorReceived::dispatch($partnerInvestor);

        return \redirect()->back()->with('success', true);
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'date|nullable',
            'final_date' => 'date|nullable',
        ]);

        $partnerInvestor = PartnerInvestor::query()
            ->tap(function ($query) use ($request) {
                if (!is_null($request->input('start_date'))) {
                    $query->whereDate('created_at', '>=', Carbon::createFromDate($request->input('start_date')));
                }
                if (!is_null($request->input('final_date'))) {
                    $query->whereDate('created_at', '<=', Carbon::createFromDate($request->input('final_date')));
                }
            })
            ->limit(1)
            ->exists();

        if (!$partnerInvestor) {
            return redirect()->back()->with('invalid-date', true);
        }

        $filaname = function () use ($request) {
            $filename = 'socio-investidores-ebw';

            if (!is_null($request->input('start_date'))) {
                $filename .= '-de-' . Carbon::createFromDate($request->input('start_date'))->format('d_m_Y');
            }
            if (!is_null($request->input('final_date'))) {
                $filename .= '-ate-' . Carbon::createFromDate($request->input('final_date'))->format('d_m_Y');
            }
            return $filename . '.xlsx';
        };

        return Excel::download(new PartnerInvestorsExport($request->input('start_date'), $request->input('final_date')), $filaname());

        return redirect()->back();
    }
}
