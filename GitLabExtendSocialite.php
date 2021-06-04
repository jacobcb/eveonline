<?php

namespace SocialiteProviders\EveOnline;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EveOnlineExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('eveonline', Provider::class);
    }
}
