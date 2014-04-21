<?php
/**
 * Class PrettyDump
 */

namespace kotchuprik\PrettyDump;

class Dumper
{
    public function dump($value)
    {
        echo '<pre>';
        highlight_string('<?php' . PHP_EOL . var_export($value, true));
        echo '</pre>';
    }
}
