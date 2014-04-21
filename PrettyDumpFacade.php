<?php

/**
 * Class PrettyDumpFacade
 */

namespace kotchuprik\PrettyDump;

use \Illuminate\Support\Facades\Facade;

class PrettyDumpFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'prettyDump';
    }
}
