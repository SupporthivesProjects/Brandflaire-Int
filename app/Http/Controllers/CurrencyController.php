<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Log;

class CurrencyController extends Controller
{
    public function changeCurrency(Request $request)
    {
        try {
            Log::info('Currency change attempt', [
                'user_id' => auth()->id() ?? 'guest',
                'requested_currency' => $request->currency_code,
                'ip' => $request->ip()
            ]);
            
            $currency = Currency::where('code', $request->currency_code)->firstOrFail();
            $request->session()->put('currency_code', $request->currency_code);
            
            Log::info('Currency changed successfully', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_code' => $currency->code,
                'currency_name' => $currency->name
            ]);
            
            Flash::success('Currency changed to ' . $currency->name);
            return response()->json([
                'status' => true,
                'message' => 'Currency changed to ' . $currency->name
            ]);
        } catch (\Exception $e) {
            Log::error('Currency change failed', [
                'user_id' => auth()->id() ?? 'guest',
                'requested_currency' => $request->currency_code,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Unable to change currency');
            return response()->json([
                'status' => false,
                'message' => 'Unable to change currency'
            ], 422);
        }
    }

    public function index()
    {
        try {
            Log::info('Currency index page accessed', [
                'user_id' => auth()->id() ?? 'guest'
            ]);
            
            $currencies = Currency::latest()->paginate(10);
            $active_currencies = Currency::getActiveCurrencies();
            
            Log::info('Currencies loaded successfully', [
                'total_currencies' => $currencies->total(),
                'active_currencies_count' => count($active_currencies)
            ]);
            
            Flash::success('Currencies loaded successfully');
            return view('admin.business_settings.currency', compact('currencies', 'active_currencies'));
        } catch (\Exception $e) {
            Log::error('Failed to load currencies', [
                'user_id' => auth()->id() ?? 'guest',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Unable to load currencies');
            return back();
        }
    }

    public function edit(Request $request)
    {
        try {
            Log::info('Currency edit requested', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $request->id
            ]);
            
            $currency = Currency::findOrFail($request->id);
            
            Log::info('Currency edit form loaded', [
                'currency_id' => $currency->id,
                'currency_code' => $currency->code
            ]);
            
            return view('partials.currency_edit', compact('currency'));
        } catch (\Exception $e) {
            Log::error('Currency edit error', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $request->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Currency edit error' . $e->getMessage());
            return response()->json(['error' => 'Currency not found'], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            Log::info('Currency creation attempt', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_data' => $request->only(['name', 'symbol', 'code', 'exchange_rate'])
            ]);
            
            $currency = Currency::create([
                'name' => $request->name,
                'symbol' => $request->symbol,
                'code' => $request->code,
                'exchange_rate' => $request->exchange_rate,
                'status' => 0
            ]);
            
            Log::info('Currency created successfully', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $currency->id,
                'currency_code' => $currency->code
            ]);
            
            Flash::success('Currency created successfully');
            return redirect()->route('currency.index');
        } catch (\Exception $e) {
            Log::error('Failed to create currency', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_data' => $request->only(['name', 'symbol', 'code', 'exchange_rate']),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Failed to create currency');
            return redirect()->route('currency.index');
        }
    }

    public function update(Request $request)
    {
        try {
            Log::info('Currency update attempt', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $request->id,
                'currency_data' => $request->only(['name', 'symbol', 'code', 'exchange_rate'])
            ]);
            
            $currency = Currency::findOrFail($request->id);
            $oldData = $currency->toArray();
            
            $currency->update([
                'name' => $request->name,
                'symbol' => $request->symbol,
                'code' => $request->code,
                'exchange_rate' => $request->exchange_rate
            ]);
            
            Log::info('Currency updated successfully', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $currency->id,
                'old_data' => $oldData,
                'new_data' => $currency->toArray()
            ]);
            
            Flash::success('Currency updated successfully');
            return redirect()->route('currency.index');
        } catch (\Exception $e) {
            Log::error('Failed to update currency', [
                'user_id' => auth()->id() ?? 'guest',
                                'currency_id' => $request->id,
                'currency_data' => $request->only(['name', 'symbol', 'code', 'exchange_rate']),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Failed to update currency');
            return redirect()->route('currency.index');
        }
    }

    public function updateStatus(Request $request)
    {
        try {
            Log::info('Currency status update attempt', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $request->id,
                'new_status' => $request->status
            ]);
            
            $currency = Currency::findOrFail($request->id);
            $oldStatus = $currency->status;
            
            $currency->status = $request->status;
            $currency->save();
            
            Log::info('Currency status updated successfully', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $currency->id,
                'currency_code' => $currency->code,
                'old_status' => $oldStatus,
                'new_status' => $currency->status
            ]);
            
            Flash::success('Currency status updated');
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Failed to update currency status', [
                'user_id' => auth()->id() ?? 'guest',
                'currency_id' => $request->id,
                'requested_status' => $request->status,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            Flash::error('Failed to update status');
            return response()->json(['success' => false], 422);
        }
    }

    public function create()
    {
        Log::info('Currency create form accessed', [
            'user_id' => auth()->id() ?? 'guest'
        ]);
        
        return view('partials.currency_create');
    }
}

