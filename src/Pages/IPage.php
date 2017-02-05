<?php

namespace StudioArtCz\GTM\Pages;

interface IPage
{
    /**
     * @return bool Return true if item is valid
     */
    public function validate();
}