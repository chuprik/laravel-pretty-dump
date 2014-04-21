<?php
/**
 * Class PrettyDumpServiceProvider
 */

namespace kotchuprik\PrettyDump;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app['prettyDump'] = $this->app->share(function ($app) {
            return new Dumper();
        });

        $this->app->booting(function () {
            AliasLoader::getInstance()->alias('PrettyDump', 'kotchuprik\PrettyDump\Facade');
        });

        Blade::extend(function ($view, $compiler) {
            $pattern = $compiler->createMatcher('prettyDump');

            return preg_replace($pattern, '$1<?php PrettyDump::dump$2 ?>', $view);
        });
    }

    public function provides()
    {
        return array('prettyDump');
    }
}
