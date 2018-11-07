# Browserizr PHP

[![license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/dutchenkoOleg/node-w3c-validator/blob/master/LICENSE)
[![composer](https://img.shields.io/badge/composer-require-orange.svg)](https://packagist.org/packages/wezom-agency/browserizr)
[![npm](https://img.shields.io/badge/npm-install-orange.svg)](https://www.npmjs.com/package/browserizr)
[![WezomAgency](https://img.shields.io/badge/wezom-agency-red.svg)](https://github.com/WezomAgency)

> **Browserizr** is tiny library, that detects your browser  
> with testing `$_SERVER['HTTP_USER_AGENT']`.

_that is PHP port of the JavaScript library [WezomAgency/Browserizr](https://github.com/WezomAgency/browserizr)  
with several limitations..._

---

## Install

```bash
composer require wezom-agency/browserizr
```

---

## Prev versions

> _please read:_

- [old-versions/README-2.x.md](https://github.com/WezomAgency/browserizr-php/blob/master/old-versions/README-2.x.md)

---

## API

### List of built-in tests

1. `Browserizr::detect()->isAndroid()`
1. `Browserizr::detect()->isAndroid3()`
1. `Browserizr::detect()->isAndroid4()`
1. `Browserizr::detect()->isAndroid5()`
1. `Browserizr::detect()->isAndroid6()`
1. `Browserizr::detect()->isAndroid7()`
1. `Browserizr::detect()->isAndroid8()`
1. `Browserizr::detect()->isBlackberry()`
1. `Browserizr::detect()->isBlackberry10()`
1. `Browserizr::detect()->isEdge()`
1. `Browserizr::detect()->isEdgeAndroid()`
1. `Browserizr::detect()->isEdgeIOS()`
1. `Browserizr::detect()->isIE()`
1. `Browserizr::detect()->isIE8()`
1. `Browserizr::detect()->isIE9()`
1. `Browserizr::detect()->isIE10()`
1. `Browserizr::detect()->isIE11()`
1. `Browserizr::detect()->isIPad()`
1. `Browserizr::detect()->isIPod()`
1. `Browserizr::detect()->isIPhone()`
1. `Browserizr::detect()->isWindowsPhone()`
1. `Browserizr::detect()->isMoz()`
1. `Browserizr::detect()->isOpera()`
1. `Browserizr::detect()->isSafari()`
1. `Browserizr::detect()->isChrome()`
1. `Browserizr::detect()->isMobile()`
1. `Browserizr::detect()->isDesktop()`

_Usage examples:_

```php
<?php

use WezomAgency\Browserizr;

?>
<?php if (Browserizr::detect()->isChrome()) { ?>
    <div class="alert">Chrome is here, baby!!!</div>
<?php } ?>

```

---

### Generate css classes

#### `Browserizr::detect()->cssClasses($tests, $cssPrefix = "", $toString = true): array|string`

> Create string with CSS classes

_Parameters:_

Name | Data type | Default value | Description
 --- | --- | --- | ---
 `$tests` | `string[]` |  | array of wanted tests, each name - test name without `is` prefix
 `$cssPrefix` | `string` | `""` | custom prefix for CSS class name
 `$toString` | `bool` | `true` | implode resulted array and return as string;
 
_Usage examples:_

```php
<?php

use WezomAgency\Browserizr;

?>
<!DOCTYPE html>
<html class="<?= Browserizr::detect()->cssClasses(['Mobile', 'Desktop']); ?>">
    <head>...</head>
    <body>...</body>
</html>

<!-- render output -->
<html class="is-mobile is-not-desktop"><!-- if mobile device -->
<html class="is-not-mobile is-desktop"><!-- if desktop -->

```

```php
<?php

use WezomAgency\Browserizr;

?>
<!DOCTYPE html>
<html class="<?= Browserizr::detect()->cssClasses(['Mobile', 'Desktop'], 'browserizr-'); ?>">
    <head>...</head>
    <body>...</body>
</html>

<!-- render output -->
<html class="browserizr-is-mobile browserizr-is-not-desktop"><!-- if mobile device -->
<html class="browserizr-is-not-mobile browserizr-is-desktop"><!-- if desktop -->

```

```php
<?php

use WezomAgency\Browserizr;

$myCssClasses = Browserizr::detect()->cssClasses(['Mobile', 'Desktop'], '', false);
// ... work with array, e.g. array_push() or array_combine() or whatever you want

?>
```

### Set custom UserAgent

by default Browserizr use `$_SERVER['HTTP_USER_AGENT']`  
you can set own string for UserAgent.

> **Note**  
> if you needed to change agent - you must do it before use the Browserizr tests

```php
<?php

use WezomAgency\Browserizr;

Browserizr::detect()->setUserAgent('my own UserAgent string');

// then can test your browser correctly
var_export(Browserizr::detect()->isWindowsPhone());

```
 
 ---


