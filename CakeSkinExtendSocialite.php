<!-- Change from LittleSkin -->
<?php

namespace CakeSkin\BsSocialiteProviderCakeSkin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CakeSkinExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('cakeskin', __NAMESPACE__.'\Provider');
    }
}