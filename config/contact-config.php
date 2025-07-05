<?php

return [
    'hero' => [
        'title' => 'Let\'s Talk About Your Learning Journey',
        'subtitle' => 'Whether you have a question, feedback, or need help choosing a course — we’re here for you.'
    ],

    'form' => [
        'title' => 'Send Us a Message',
        'description' => 'We typically respond within 24–48 hours',
        'submit_text' => 'Submit Inquiry',
        'fields' => [
            [
                'id' => 'name',
                'name' => 'name',
                'label' => 'Full Name',
                'type' => 'text',
                'required' => true
            ],
            [
                'id' => 'email',
                'name' => 'email',
                'label' => 'Email Address',
                'type' => 'email',
                'required' => true
            ],
            [
                'id' => 'phone',
                'name' => 'phone',
                'label' => 'Phone Number',
                'type' => 'tel',
                'required' => true
            ],
            [
                'id' => 'message',
                'name' => 'message',
                'label' => 'Your Message',
                'type' => 'textarea',
                'required' => true
            ]
        ]
    ],

    'info' => [
        'title' => 'Get in Touch',
        'address' => 'Tedor Path Center<br>22, Lotus Bldg, Office No: 321<br>Addis Ababa, Ethiopia',
        'phones' => [
            '+251 99 380 7690 (General Line)',
            '+251 96 611 4216 (Admissions Office)'
        ],
        'email' => 'info@tedorpath.et',
        'hours' => [
            'Monday–Saturday: 2:00 – 11:00 LT (Morning & Evening)',
            'Sunday: Closed'
        ],
        'social' => [
            ['icon' => 'facebook', 'url' => 'https://facebook.com/tedorpath'],
            ['icon' => 'telegram', 'url' => 'https://t.me/tedorpath'],
            ['icon' => 'youtube', 'url' => 'https://linkedin.com/tedorpath'],
            ['icon' => 'tiktok', 'url' => 'https://tiktok.com/tedorpath']
        ]
    ],

    'map' => [
        'embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.022288415353!2d38.75863607412478!3d9.027676091034443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85713f2fdf5f%3A0x7db11d1a3a5d24c!2sBole%20Area%2C%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1718000000000!5m2!1sen!2set'
    ]
];
