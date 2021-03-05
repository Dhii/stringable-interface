# Stringable Interface
[![Continuous Integration](https://github.com/Dhii/stringable-interface/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/Dhii/stringable-interface/actions/workflows/continuous-integration.yml)
[![Latest Stable Version](https://poser.pugx.org/dhii/stringable-interface/v)](//packagist.org/packages/dhii/stringable-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/stringable-interface/v/unstable)](//packagist.org/packages/dhii/stringable-interface)

Increasing interoperability for objects that can be cast to string.
This was useful before [`symfony/polyfill-php80:1.19`][] which adds the
`Stringable` type if it doesn't natively exist for pre-PHP-8.0. Use that instead.

[`symfony/polyfill-php80:1.19`]: https://github.com/symfony/polyfill-php80/releases/tag/v1.19.0
