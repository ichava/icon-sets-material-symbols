# Architecture

*Explanation.* What this pack is, what it delegates, and why it is shaped that way.

## What it ships

23,640 SVGs, addressed by variants -- see [Variants](variants.md). Counted from the tracked
files rather than quoted from prose:

```bash
git ls-tree -r --name-only origin/main -- resources/assets/svg/files | grep -c '\.svg$'
```

Besides the assets it ships a provider, a constants class, an enum for its addressing axis, and a
Blade component extending core's. That is the whole surface.

## Why a subset

Weight 400 only, in all three styles, filled and unfilled. The other six weights (100, 200, 300, 500, 600, 700) are not vendored: they would add 141,861 files. Upstream names use underscores and are slugged to hyphens (`bullet_chart` is `bullet-chart`).

Measured on 2026-11-04: before the subset, 165,501 files, 120.6 MB unpacked (all seven weights, 100 to 700, of 0.48.3); after it, 23,640 SVGs, 13.1 MB of SVG bytes, 92 MB on disk (weight 400 only). The pack plan
caps a pack at 150 MB on disk and 30,000 SVGs, because every install downloads the whole archive and
most applications use one style.

## It depends on core, and core does not depend on it

The pack registers its icon directory with core's `IconRegistry` during `bootingPackage()`, after
core's singletons are bound. Core discovers installed packs at runtime. It has no list of them, so a
pack is added by installing it and removed by removing it.

## It requires `laranail/package-tools` directly

The provider writes `Package` into its own `configurePackage()` signature, so it depends on that
class whatever the dependency graph delivers transitively through core. **Require what you import**
is the rule; a transitive dependency is not a contract.

## Upstream

Its upstream is the `@material-symbols/svg-400` npm package (marella/material-symbols `v0.48.3`), which republishes the SVGs of google/material-design-icons. The version these SVGs came from is recorded in
`resources/assets/svg/config.json` under `upstream.current_version`, and the licence text's SHA-256
under `license.sha256`, rather than written out here, so the two cannot drift.

## See also

- [Core architecture](https://github.com/ichava/core/blob/main/docs/architecture.md) -- topology, boot order, the registry
- [Attribution](attribution.md) -- the upstream project and its licence
- [Release](release.md)

---

[← Docs index](../README.md#documentation)
