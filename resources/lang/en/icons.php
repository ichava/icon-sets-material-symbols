<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Material Symbols -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A copy here would
| drift from it, and nothing would notice, because nothing loads this file
| for those keys. A non-English locale may add them to override; `en` must
| not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Enums\Variant.
|
*/

return [
    'variants' => [
        'outlined'      => 'Outlined',
        'outlined-fill' => 'Outlined filled',
        'rounded'       => 'Rounded',
        'rounded-fill'  => 'Rounded filled',
        'sharp'         => 'Sharp',
        'sharp-fill'    => 'Sharp filled',
    ],

    'variant_descriptions' => [
        'outlined'      => 'Outlined style, weight 400, unfilled',
        'outlined-fill' => 'Outlined style, weight 400, filled',
        'rounded'       => 'Rounded style, weight 400, unfilled',
        'rounded-fill'  => 'Rounded style, weight 400, filled',
        'sharp'         => 'Sharp style, weight 400, unfilled',
        'sharp-fill'    => 'Sharp style, weight 400, filled',
    ],
];
