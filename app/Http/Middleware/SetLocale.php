<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get('locale', config('app.locale'));

        // Verifique se o idioma é suportado
        $supportedLocales = Config::get('app.supported_locales', []);

        if (!in_array($locale, $supportedLocales)) {
            // Se não for suportado, use o idioma padrão
            $language_atual = User::where("id" , Auth::user()->id)->first();
            
            if($language_atual->language != "") {
                $locale = $language_atual->language;
            } else {
                $locale = config('app.locale');
            }
            
        }

        App::setLocale($locale);

        return $next($request);
    }
}
