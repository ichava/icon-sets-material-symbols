<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\View\Components\IconComponent;

/**
 * Registers the Material Symbols set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
