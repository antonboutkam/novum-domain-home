<?php
require_once '../../../../vendor/autoload.php';
require_once '../../../../config/novum.svb/propel/config.php';
require_once '../../../../config/novum.svb/config.php';

$servicename = 'svb';
$password = 'Mkwhwm!2020'; // Makkelijker kunnen we het wel maken!

$aScripts = glob('../../_default/novum/*');

foreach ($aScripts as $sScript)
{
    echo "Importing $sScript" . PHP_EOL;
    require_once $sScript;
}

