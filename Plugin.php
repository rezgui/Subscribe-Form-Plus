<?php namespace REZGUI\Subscribe;

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
            'author'      => 'Jorge Andrade',
            'icon'        => 'icon-rss'
        ];
    }

    public function registerComponents()
    {
        return [
            'REZGUI\Subscribe\Components\Subscriber'       => 'formSubscribe',
            'REZGUI\Subscribe\Components\Unsubscribe'       => 'formUnsubscribe',
        ];
    }

    public function registerPermissions()
    {
        return [
            'rezgui.subscribe.subscribers'       => ['tab' => 'Subscribe', 'label' => 'Access Subscribers'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'subscribe' => [
                'label'       => 'Subscribers',
                'url'         => \Backend::url('rezgui/subscribe/subscribers'),
                'icon'        => 'icon-rss',
                'permissions' => ['rezgui.subscribe.*'],
                'order'       => 500,

                'sideMenu' => [
                    'subscribers' => [
                        'label'       => 'Subscribers',
                        'icon'        => 'icon-rss',
                        'url'         => \Backend::url('rezgui/subscribe/subscribers'),
                        'permissions' => ['rezgui.subscribe.access_subscribers'],
                    ]
                ]

            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'rezgui.subscribe::mail.subscribe' => 'Welcome message for subscriber',
            'rezgui.subscribe::mail.unsubscribe' => 'Good bye message for subscriber'
        ];
    }

}
