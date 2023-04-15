<?php

namespace RuangDeveloper\LaravelAdminTemplate\Middlewares;

use Closure;
use Illuminate\Http\Request;
use RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplate;
use Symfony\Component\HttpFoundation\Response;

class Callback
{
    public function handle(Request $request, Closure $next): Response
    {
        $inMiddlewareFunction = LaravelAdminTemplate::getInMiddlewareFunction();

        if ($inMiddlewareFunction) {
            $inMiddlewareFunction($request);
        }

        return $next($request);
    }
}
