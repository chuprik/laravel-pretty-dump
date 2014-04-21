<?php
/**
 * Class PrettyDumpServiceProvider
 */

namespace kotchuprik\PrettyDump;

use \Illuminate\Support\ServiceProvider;

class PrettyDumpServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->app['prettyDump'] = $this->app->share(function ($app) {
            return new PrettyDumper();
        });

        $this->app->booting(function () {
            \Illuminate\Foundation\AliasLoader::getInstance()->alias('PrettyDump', 'PrettyDumpFacade');
        });

        Blade::extend(function ($view, $compiler) {
            $pattern = $compiler->createMatcher('prettyDump');

            return preg_replace($pattern, '$1<?php PrettyDump::dump$2 ?>', $view);
        });
    }

    public function provides()
    {
        return ['prettyDump'];
    }
}
 