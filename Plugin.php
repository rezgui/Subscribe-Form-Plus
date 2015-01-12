<?php namespace Andradedev\Subscribe;

use System\Classes\PluginBase;

/**
 * Subscribe Plugin Information File
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
            'name'        => 'Subscribe',
            'description' => 'A simple Subscribe form for October CMS',
            'author'      => 'Andradedev',
            'icon'        => 'icon-rss'
        ];
    }

    public function registerComponents()
    {
        return [
            'Andradedev\Subscribe\Components\Subscriber'       => 'formSubscribe',
        ];
    }

    public function registerPermissions()
    {
        return [
            'andradedev.subscribe.subscribers'       => ['tab' => 'Subscribe', 'label' => 'Access Subscribers'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'subscribe' => [
                'label'       => 'Subscribers',
                'url'         => \Backend::url('andradedev/subscribe/subscribers'),
                'icon'        => 'icon-rss',
                'permissions' => ['andradedev.subscribe.*'],
                'order'       => 500,

                'sideMenu' => [
                    'subscribers' => [
                        'label'       => 'Subscribers',
                        'icon'        => 'icon-rss',
                        'url'         => \Backend::url('andradedev/subscribe/subscribers'),
                        'permissions' => ['andradedev.subscribe.access_subscribers'],
                    ]
                ]

            ]
        ];
    }

    public function registerMailTemplates()
{
    return [
        'andradedev.subscribe::mail.subscribe' => 'Welcome message for subscriber'
    ];
}

}
