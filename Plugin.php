<?php namespace Wontw\ThemeSwitcher;

use Backend;
use System\Classes\PluginBase;

/**
 * ThemeSwitcher Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ThemeSwitcher',
            'description' => 'No description provided yet...',
            'author'      => 'Wontw',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

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
        return []; // Remove this line to activate

        return [
            'Wontw\ThemeSwitcher\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'wontw.themeswitcher.some_permission' => [
                'tab' => 'ThemeSwitcher',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'themeswitcher' => [
                'label'       => 'ThemeSwitcher',
                'url'         => Backend::url('wontw/themeswitcher/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['wontw.themeswitcher.*'],
                'order'       => 500,
            ],
        ];
    }
}
