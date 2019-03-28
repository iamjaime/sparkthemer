<?php

namespace Iamjaime\sparktheme\contracts;

interface ThemePreset {

    /**
     * Handles the theme's installation
     * @return mixed
     */
    public function install();

}