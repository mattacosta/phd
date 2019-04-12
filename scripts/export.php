<?php

require __DIR__ . '/../vendor/autoload.php';

use phpdotnet\phd\Config;
use phpdotnet\phd\Reader;
use phpdotnet\phd\Render;

// If you change the `output_dir` setting, don't forget the trailing '/'.
Config::init([]);

// Set reader LIBXML options.
$readerOpts = 0;
if (Config::process_xincludes()) {
  $readerOpts |= LIBXML_XINCLUDE;
}
// Check path to `.manual.xml` file.
if (!file_exists($argv[1])) {
  echo 'PHP documentation file not found';
  exit;
}

$reader = new Reader();
$reader->open($argv[1], NULL, $readerOpts);

$render = new Render();
$render->attach(/* Add your renderer here. */);

foreach ($render as $format) {
  $format->notify(Render::VERBOSE, true);
}

$render->execute($reader);
