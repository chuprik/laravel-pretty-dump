<?php
/**
 * Class PrettyDumpFacade
 */

namespace kotchuprik\PrettyDump;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'prettyDump';
    }
}
