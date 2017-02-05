<?php

namespace StudioArtCz\GoogleDataLayer\Pages;

interface IPage
{
    /**
     * @return bool Return true if item is valid
     */
    public function validate();
}