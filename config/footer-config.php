<?php
return [
    'brand' => [
        'logo' => '/favicon.ico',
        'name' => 'TedorPath',
        'description' => 'Empowering learners and shaping futures through quality education and practical skill development.',
        'certification' => [
            'logo' => '/assets/img/education-ministry-logo.png',
            'alt' => 'Ministry of Education'
        ]
    ],
    
    'links' => [
        ['url' => '/', 'text' => 'Home'],
        ['url' => '/courses', 'text' => 'Courses'],
        ['url' => '/about', 'text' => 'About Us'],
        ['url' => '/contact', 'text' => 'Contact']
    ],
    
    'contact' => [
        'email' => 'info@tedorpath.et',
        'phones' => [
            '+251 966 114 216',
            '+251 993 807 690'
        ]
    ],
    
    'social' => [
        ['icon' => 'facebook', 'url' => 'https://facebook.com/tedorpath'],
        ['icon' => 'telegram', 'url' => 'https://t.me/tedorpath'],
        ['icon' => 'youtube', 'url' => 'https://youtube.com/@tedorpath'],
        ['icon' => 'tiktok', 'url' => 'https://tiktok.com/tedorpath'],
        ['icon' => 'whatsapp', 'url' => 'https://wa.me/yourphonenumber']
    ],
    
    'newsletter' => [
        'title' => 'Newsletter',
        'description' => 'Subscribe to get updates on new courses and offers'
    ],
    
    'copyright' => [
        'text' => '&copy; '.date('Y').' Tedor Path. All rights reserved.',
        'links' => [
            ['url' => '/privacy', 'text' => 'Privacy Policy'],
            ['url' => '/terms', 'text' => 'Terms of Service'],
            ['url' => '/sitemap', 'text' => 'Sitemap']
        ]
    ]
];