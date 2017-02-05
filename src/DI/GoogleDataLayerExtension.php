<?php

use Nette;

/**
 * see: https://github.com/martinknor/feed/blob/d577ff9c43b01b230ac298cc8e5efbf912806200/src/DI/FeedExtension.php
 * Class FeedExtension
 */
class GoogleDataLayerExtension extends Nette\DI\CompilerExtension
{
    /** @var array */
    private $defaults = array(
        'gtmId' => '%gtmId%'
    );
}