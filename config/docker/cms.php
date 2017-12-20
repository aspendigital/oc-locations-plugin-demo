<?php
/*
| For additional options see
| https://github.com/octobercms/october/blob/master/config/cms.php
*/

return [
    'activeTheme' => env('CMS_THEME', 'starter'),
    'edgeUpdates' => env('CMS_EDGEUPDATES', false),
    'disableCoreUpdates' => env('CMS_DISABLECOREUPDATES', true),
    'backendTimezone' => env('TZ', 'America/Denver'),
    'backendSkin' => 'Backend\Skins\Standard',
    'linkPolicy' => env('CMS_LINKPOLICY', 'detect'),
    'backendForceSecure' => false,
];
