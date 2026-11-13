<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-material-symbols')
        ->and(IconsConstants::getTitle())->toBe('Material Symbols')
        ->and(IconsConstants::getPrefix())->toBe('material-symbols')
        ->and(IconsConstants::getDefaultVariant())->toBe('outlined');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::OUTLINED->getClass())->toBe('material-symbols-outlined')
        ->and(Variant::OUTLINED_FILL->getClass())->toBe('material-symbols-outlined-fill')
        ->and(Variant::ROUNDED->getClass())->toBe('material-symbols-rounded')
        ->and(Variant::ROUNDED_FILL->getClass())->toBe('material-symbols-rounded-fill')
        ->and(Variant::SHARP->getClass())->toBe('material-symbols-sharp')
        ->and(Variant::SHARP_FILL->getClass())->toBe('material-symbols-sharp-fill');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::OUTLINED)
        ->and(Variant::OUTLINED->isDefault())->toBeTrue()
        ->and(Variant::OUTLINED_FILL->isDefault())->toBeFalse()
        ->and(Variant::ROUNDED->isDefault())->toBeFalse()
        ->and(Variant::ROUNDED_FILL->isDefault())->toBeFalse()
        ->and(Variant::SHARP->isDefault())->toBeFalse()
        ->and(Variant::SHARP_FILL->isDefault())->toBeFalse();
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-material-symbols'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-material-symbols registered after boot.',
    );
});

it(description: 'ships one directory per variant, holding the measured number of icons', closure: function () {
    // Counted 2026-11-04 from the vendored tree. The subset is deliberate (see
    // docs/architecture.md); a refresh that changes a count changes this table
    // in the same pull request, so a silently shrunk or grown variant fails.
    $expected = [
        'outlined'      => 3940,
        'outlined-fill' => 3940,
        'rounded'       => 3940,
        'rounded-fill'  => 3940,
        'sharp'         => 3940,
        'sharp-fill'    => 3940,
    ];

    $files = dirname(__DIR__, 2) . '/resources/assets/svg/files';
    $actual = [];

    foreach (glob($files . '/*', GLOB_ONLYDIR) ?: [] as $dir) {
        $actual[basename($dir)] = count(glob($dir . '/*.svg') ?: []);
    }

    ksort($expected);
    ksort($actual);

    expect($actual)->toBe($expected)
        ->and(array_keys($actual))->toEqualCanonicalizing(Variant::values());
});
