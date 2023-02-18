<?php

use Learning\DesignPatterns\Structural\Bridge\About;
use Learning\DesignPatterns\Structural\Bridge\AquaTheme;
use Learning\DesignPatterns\Structural\Bridge\Careers;
use Learning\DesignPatterns\Structural\Bridge\DarkTheme;

$careers = new Careers(new DarkTheme());

echo $careers->getContent();

breakLine();

$about = new About(new AquaTheme());

echo $about->getContent();
