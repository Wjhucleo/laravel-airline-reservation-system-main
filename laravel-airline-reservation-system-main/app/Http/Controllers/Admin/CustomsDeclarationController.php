<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomsDeclaration;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class CustomsDeclarationController extends Controller
{
    public function customsDeclaration()
    {
        $user = Auth::user();
        $userHasCard = auth()->user()->cards()->exists(); // Example logic to determine if user has a card
        return view('admin.customsDeclaration.index', ['user' => $user , 'userHasCard'=>$userHasCard]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'declaration_details' => 'required|string',
        ]);

        CustomsDeclaration::create([
            'full_name' => $request->input('full_name'),
            'passport_number' => $request->input('passport_number'),
            'declaration_details' => $request->input('declaration_details'),
        ]);

        return redirect()->route('customsDeclaration.index')->with('success', 'Déclaration soumise avec succès !');
    }

    public function showCustomsDeclaration()
    {
        $customsDeclarations = CustomsDeclaration::all();
        $user = auth()->user();
        $userHasCard = $user->cards()->where('user_id', $user->id)->exists();

        
        return view('admin.customsDeclaration.show', [
            'customsDeclarations' => $customsDeclarations ,
            'userHasCard'=>$userHasCard
        ]);
    }

    public function destroy($id)
    {
        $declaration = CustomsDeclaration::findOrFail($id);
        $declaration->delete();
        return redirect()->route('CustomsDeclaration.show')->with('success', 'Declaration deleted successfully.');
    }
}
