<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        // Verifique se o idioma é suportado
        info("Método changeLanguage chamado com idioma: $locale");
        $supportedLocales = Config::get('app.supported_locales', []);

        if (in_array($locale, $supportedLocales)) {
            // Defina o idioma na sessão
            Session::put('locale', $locale);
        }
        User::where("id" , Auth::user()->id)->update(["language"=> $locale]);

        // Redirecione de volta à página anterior
        return redirect()->back();
    }
}
