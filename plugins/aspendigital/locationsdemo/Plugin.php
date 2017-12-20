<?php

namespace AspenDigital\LocationsDemo;

use System\Classes\PluginBase;

/**
 * Locations Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['AspenDigital.Locations'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Locations Pro Demo',
            'description' => 'Demo features for Locations Pro',
            'author'      => 'Aspen Digital',
            'icon'        => 'icon-map-marker'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommand('locations:demo:seed', Console\SeedCommand::class);
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
        ];
    }

}
