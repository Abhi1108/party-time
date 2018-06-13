<?php

require 'init.php';

$app = new App();

$columns = $app->add('Columns');

$left = $columns->addColumn();
$right = $columns->addColumn();

$app->add(['Message','Welcome to the Party!','info'])->text
  ->addParagraph('Our Party is using "Bring Your Own Drink™" policy, so be sure '.'to grab a beer or lemonade');

$left->add('Form')->setModel(new Guest($app->db));
