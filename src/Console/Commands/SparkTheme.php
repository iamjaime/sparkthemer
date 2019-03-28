<?php

namespace Iamjaime\Sparktheme\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\Facades\File;

class SparkTheme extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spark:theme {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Handles Presetting a Spark Theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Lets scan the themes directory for a folder with the same name as the {name} parameter.
        $themeExists = File::isDirectory(dirname(__DIR__ , 2) . "/themes/" . $this->argument('name'));

        if($themeExists){
            $theme = '\Iamjaime\sparktheme\themes\\' . $this->argument('name') . '\ThemePreset';
            $themePreset = new $theme;
            $themePreset->install();
        }else{
            $this->error('The theme that you are trying to install does not exist!');
        }

    }



    protected function landingType()
    {
        $landingPageType = $this->choice('What type of landing page do you need?', ['App', 'Classic', 'Software'], 0);
        return $landingPageType;
    }


}
