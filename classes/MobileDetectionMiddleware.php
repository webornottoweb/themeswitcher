<?php

namespace Wontw\ThemeSwitcher\Classes;

use Closure;
use Cms\Classes\Theme;
use Illuminate\Support\Facades\Event;
use Jenssegers\Agent\Agent;

class MobileDetectionMiddleware
{
    /**
     * Create a new middleware instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        /** @var Agent $agent */
        $agent = resolve(Agent::class);

        if ($agent->isMobile()) {
            $theme = Theme::getActiveThemeCode();
            Event::listen('cms.theme.getActiveTheme', function() use ($theme) {
                return 'mobile_' . $theme;
            });
        }

        return $next($request);
    }
}
