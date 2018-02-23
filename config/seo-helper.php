<?php

return [
    /* -----------------------------------------------------------------
     |  Title
     | -----------------------------------------------------------------
     */
    'title'       => [
        'default'   => 'Ninance — Next Finance Uniting Crypto',
        'site-name' => '',
        'separator' => '—',
        'first'     => false,
        'max'       => 155,
    ],

    /* -----------------------------------------------------------------
     |  Description
     | -----------------------------------------------------------------
     */
    'description' => [
        'default' => 'ᐅᐅᐅ NIC (ICO) started! ᐅᐅᐅ Ninance is a decentralized exchange and protocol for next finance. ᐅᐅᐅ NIC (ICO) ends on June 18!',
        'max'     => 155,
    ],

    /* -----------------------------------------------------------------
     |  Keywords
     | -----------------------------------------------------------------
     */
    'keywords'    => [
        'default' => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Miscellaneous
     | -----------------------------------------------------------------
     */
    'misc'        => [
        'canonical' => true,
        'robots'    => config('app.env') !== 'production', // Tell robots not to index the content if it's not on production
        'default'   => [
            'viewport'  => 'initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no', // Responsive design thing
            'author'    => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
            'publisher' => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
        ],
    ],

    /* -----------------------------------------------------------------
     |  Webmaster Tools
     | -----------------------------------------------------------------
     */
    'webmasters'  => [
        'google'    => '',
        'bing'      => '',
        'alexa'     => '',
        'pinterest' => '',
        'yandex'    => '',
    ],

    /* -----------------------------------------------------------------
     |  Open Graph
     | -----------------------------------------------------------------
     */
    'open-graph'  => [
        'enabled'     => true,
        'prefix'      => 'og:',
        'type'        => 'website',
        'title'       => 'Ninance — Next Finance Uniting Crypto',
        'description' => 'ᐅᐅᐅ NIC (ICO) started! ᐅᐅᐅ Ninance is a decentralized exchange and protocol for next finance. ᐅᐅᐅ NIC (ICO) ends on June 18!',
        'image'       => 'https://ninance.com/ninance-ograph.png',
        'site-name'   => '',
        'properties'  => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Twitter
     | -----------------------------------------------------------------
     |  Supported card types : 'app', 'gallery', 'photo', 'player', 'product', 'summary', 'summary_large_image'.
     */
    'twitter'     => [
        'enabled' => true,
        'prefix'  => 'twitter:',
        'card'    => 'summary',
        'site'    => 'ninance',
        'title'   => 'Ninance — Next Finance Uniting Crypto',
        'image'   => 'https://ninance.com/favicon-228.png',
        'metas'   => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Analytics
     | -----------------------------------------------------------------
     */
    'analytics'   => [
        'google' => 'UA-112734228-1', // UA-XXXXXXXX-X
    ],
];
