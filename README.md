# phd

Base types for generating PHP documentation.

## Requirements

- [PHP 7](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- SVN

## Installation

1. Get a copy of the PHP manual.

   `svn checkout https://svn.php.net/repository/phpdoc/modules/doc-en ./phpdoc-en`

2. Generate a `.manual.xml` file.

   `php phpdoc-en/doc-base/configure.php`

3. Install dependencies.

   `composer install`

## Getting started

1. Create a class that extends `Package_IDE_Base` and implement a rendering
   function.

2. Add it to `export.php` and run the script.

   `php src/export.php phpdoc-en/doc-base/.manual.xml`
