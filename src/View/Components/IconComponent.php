<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\View\Components;

use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\View\Components\IconComponent as BaseIconComponent;

/**
 * Blade component for the Material Symbols set. See README for usage examples
 * and accepted name formats.
 */
class IconComponent extends BaseIconComponent
{
    protected function getIconSet(): string
    {
        return IconsConstants::getPackageName();
    }

    protected function getVendorPackage(): string
    {
        return IconsConstants::getVendorPackage();
    }
}
