<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $user = auth()->user(); 
        $userHasCard = $user ? $user->cards()->exists() : false;
        return view('admin.cards.index', ['userHasCard' => $userHasCard]);
    }
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->back()->withErrors(['auth' => 'Vous devez être connecté pour ajouter une carte.']);
        }
        // Ensure 'save_card' is cast to a boolean value
        $validated = $request->validate([
            'card_number' => 'required|digits_between:13,19',
            'card_name' => 'required|string|max:255',
            'expiry_date' => 'required|date_format:m/y',
            'cvv' => 'required|digits_between:3,4',
            'card_type' => 'required|string|in:Visa,MasterCard,Amex',
            'billing_address' => 'required|string|max:255',
            'billing_city' => 'required|string|max:100',
            'billing_zip' => 'required|string|max:20',
            'save_card' => 'nullable|boolean',
        ]);
    
        // Convert 'save_card' to a boolean value
        $validated['save_card'] = $request->has('save_card') ? true : false;
        $validated['user_id'] = auth()->user()->id;
    
        Card::create($validated);
        return redirect()->route('tickets.flights')
        ->with('success', 'Carte bancaire ajoutée avec succès.');
}
    
}
