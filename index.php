<?php
Kirby::plugin('white/longlist', [
  'blueprints' => [
    'blocks/longlist'   => __DIR__ . '/blueprints/blocks/longlist.yml',
  ],
  'snippets' => [
    'blocks/longlist'   => __DIR__ . '/snippets/blocks/longlist.php',
    'longlist-css'   => __DIR__ . '/snippets/longlist-css.php',
  ]
]);
