<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
it(description: 'exposes the outlined case value', closure: function () {
    expect(Variant::OUTLINED->getValue())->toBe('outlined');
});

it(description: 'exposes the outlined-fill case value', closure: function () {
    expect(Variant::OUTLINED_FILL->getValue())->toBe('outlined-fill');
});

it(description: 'exposes the rounded case value', closure: function () {
    expect(Variant::ROUNDED->getValue())->toBe('rounded');
});

it(description: 'exposes the rounded-fill case value', closure: function () {
    expect(Variant::ROUNDED_FILL->getValue())->toBe('rounded-fill');
});

it(description: 'exposes the sharp case value', closure: function () {
    expect(Variant::SHARP->getValue())->toBe('sharp');
});

it(description: 'exposes the sharp-fill case value', closure: function () {
    expect(Variant::SHARP_FILL->getValue())->toBe('sharp-fill');
});

it(description: 'returns every case from values', closure: function () {
    expect(Variant::values())->toBe(['outlined', 'outlined-fill', 'rounded', 'rounded-fill', 'sharp', 'sharp-fill']);
});

it(description: 'resolves known values and rejects unknown ones', closure: function () {
    expect(Variant::tryFromValue('outlined'))->toBe(Variant::OUTLINED)
        ->and(Variant::tryFromValue('sharp-fill'))->toBe(Variant::SHARP_FILL)
        ->and(Variant::tryFromValue('not-a-real-variant'))->toBeNull();
});
