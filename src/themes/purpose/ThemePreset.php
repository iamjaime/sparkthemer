<?php

namespace Iamjaime\Sparktheme\themes\purpose;

use Illuminate\Foundation\Console\Presets\Preset;
use Illuminate\Support\Facades\File;
use Iamjaime\sparktheme\contracts\ThemePreset as ThemePresetInterface;

class ThemePreset extends Preset implements ThemePresetInterface
{

    /**
     * Installs the Presets
     */
    public function install()
    {
        $this->updatePackageJson();
        $this->updateMix();
        $this->copySCSS();
        $this->copyAssets();
        $this->setupTheme();
        $this->runCommands();
    }

    /**
     * Handles overriding the current package json with our theme's package json
     */
    protected function updatePackageJson()
    {
        copy(__DIR__ . '/stubs/config/package.json', base_path('package.json'));
    }

    /**
     * Handles updating the laravel mix configurations
     */
    protected function updateMix()
    {
        copy(__DIR__ . '/stubs/config/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Handles copying the theme's default assets ( stock images etc. )
     */
    protected function copyAssets()
    {
        File::cleanDirectory(public_path('assets'));
        File::copyDirectory(__DIR__ . '/stubs/assets', public_path('assets'));
        $this->copyLogo();
    }


    /**
     * Handles copying the SCSS directory into the resources
     */
    protected function copySCSS()
    {
        File::copyDirectory(__DIR__ . '/stubs/scss', resource_path('scss'));
    }


    /**
     * Handles copying the logo to the spark logo directory
     */
    protected function copyLogo()
    {
        copy(__DIR__ . '/stubs/assets/img/brand/white-logo.png', public_path('img/white-logo.png'));
    }


    /**
     * Overrides Spark Views with our Theme
     */
    protected function setupTheme()
    {
        File::cleanDirectory(resource_path('views/vendor/spark'));
        File::copyDirectory(__DIR__ . '/stubs/spark', resource_path('views/vendor/spark'));
    }

    /**
     * Run the necessary NPM commands
     */
    protected function runCommands()
    {
        exec('npm install');
        exec('npm run dev');
    }
}