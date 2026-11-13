# Variants

*Reference.* The 6 variants of `ichava/icon-sets-material-symbols`, and how to address them.

`ichava/icon-sets-material-symbols` ships **23,640 icons across 6 variants**. Each variant is a folder under `resources/assets/svg/files/`, and core files every icon under its folder, so the variant is the first segment of the icon path.

| Variant | Path | Icons | Style |
|---|---|---:|---|
| `outlined` | `outlined/<name>` | 3,940 | Outlined style, weight 400, unfilled |
| `outlined-fill` | `outlined-fill/<name>` | 3,940 | Outlined style, weight 400, filled |
| `rounded` | `rounded/<name>` | 3,940 | Rounded style, weight 400, unfilled |
| `rounded-fill` | `rounded-fill/<name>` | 3,940 | Rounded style, weight 400, filled |
| `sharp` | `sharp/<name>` | 3,940 | Sharp style, weight 400, unfilled |
| `sharp-fill` | `sharp-fill/<name>` | 3,940 | Sharp style, weight 400, filled |

The default variant is `outlined`. Always include the variant in the icon path: `ichava/icon-sets-material-symbols::outlined/home`.

Each SVG has `viewBox="0 -960 960 960"` and `width="48" height="48"`, and paints with the default fill (black) unless the element is coloured by CSS. Set `fill: currentColor` on the `svg` to make it follow the text colour.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-material-symbols::outlined/home" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-material-symbols::sharp-fill/favorite" class="w-6 h-6" />
```

## Variant enum (PHP)

```php
use Simtabi\Laranail\Ichava\IconSetsMaterialSymbols\Enums\Variant;

Variant::OUTLINED->value;              // 'outlined'
Variant::OUTLINED_FILL->value;         // 'outlined-fill'
Variant::ROUNDED->value;               // 'rounded'
Variant::ROUNDED_FILL->value;          // 'rounded-fill'
Variant::SHARP->value;                 // 'sharp'
Variant::SHARP_FILL->value;            // 'sharp-fill'
Variant::default();             // Variant::OUTLINED
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## What is not here

Weight 400 only, in all three styles, filled and unfilled. The other six weights (100, 200, 300, 500, 600, 700) are not vendored: they would add 141,861 files. Upstream names use underscores and are slugged to hyphens (`bullet_chart` is `bullet-chart`).

## See also

- [Customisation](customization.md), colour and size
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
