<?php

use Learning\DesignPatterns\Creational\FactoryMethod\CommunityManager;
use Learning\DesignPatterns\Creational\FactoryMethod\DevelopmentManager;

$developerManager = new DevelopmentManager();

$question_about = $developerManager->takeInterview();

echo "Development manager principle: $question_about";

echo PHP_EOL;

$marketingManager = new CommunityManager();

$question_about = $marketingManager->takeInterview();

echo "Marketing manager principle: $question_about";
