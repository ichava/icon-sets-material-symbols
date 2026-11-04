# Attribution and licence

*Reference.*

## Upstream

[Material Symbols](https://fonts.google.com/icons) is made by Google LLC (artwork) and the material-symbols contributors (packaging). Source: [github.com/marella/material-symbols](https://github.com/marella/material-symbols).

## Licence

The icons and this package are owned separately:

- **The icons** are © Google LLC (artwork) and the material-symbols contributors (packaging), under [Apache-2.0](https://github.com/marella/material-symbols/blob/v0.48.3/LICENSE). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

Apache-2.0 allows commercial and non-commercial use, modification and redistribution, provided a copy of the licence goes with every copy, modified files say so, and any upstream NOTICE is carried along. The licence text and a NOTICE stating what was changed ship under `resources/assets/svg/licenses/material-symbols/`, and [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root repeats the terms. Both ship in the dist archive (`docs/` does not). Keep them with the icons if you copy them out of the package.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Material Symbols](https://fonts.google.com/icons) by Google (Apache-2.0).

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync). End users **don't** refresh
locally -- `vendor/` is regenerated on every `composer install`, so any local change is discarded.
Run `php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-material-symbols` to see whether a new upstream
version is available.

## See also

- [Material Symbols](https://fonts.google.com/icons)
- [Source repository](https://github.com/marella/material-symbols)

---

[← Docs index](../README.md#documentation)
