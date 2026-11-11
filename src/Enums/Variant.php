<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Constants\IconsConstants;

/**
 * Type-safe variant selection for Material Symbols (outlined / outlined-fill / rounded / rounded-fill / sharp / sharp-fill).
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case OUTLINED = 'outlined';
    case OUTLINED_FILL = 'outlined-fill';
    case ROUNDED = 'rounded';
    case ROUNDED_FILL = 'rounded-fill';
    case SHARP = 'sharp';
    case SHARP_FILL = 'sharp-fill';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath($this->value);
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::OUTLINED->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
