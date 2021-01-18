<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class EnsureBrowserIsValid
{

    protected $agent;

    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $browser = $this->agent->browser();
        if ($browser == 'IE'){
            return redirect('https://browsehappy.com/');
        }
    }
}
