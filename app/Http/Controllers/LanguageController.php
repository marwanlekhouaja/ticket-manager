<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $request->validate([
            'language' => 'required|string|in:fr,en,ar',
        ]);

        session()->put('locale', $request->language);

        return back();
    }
}
