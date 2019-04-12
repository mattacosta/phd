# phd-common

Base types for generating PHP documentation.

## Requirements

- [PHP 7](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- SVN

## Installation

1. Add `mattacosta/phd-common` to your `composer.json` file.

## Getting started

1. Get a copy of the PHP manual.

   `svn checkout https://svn.php.net/repository/phpdoc/modules/doc-en ./phpdoc-en`

2. Generate a `.manual.xml` file.

   `php phpdoc-en/doc-base/configure.php`

3. Create a class that extends `Package_IDE_Base` and implements a rendering
   function.

4. Create a script to setup and run the renderer (PEAR usage is unsupported).

   You can copy the `scripts/export.php` file as a basic starting point.

   Usage: `php scripts/export.php phpdoc-en/doc-base/.manual.xml`
