<?php

return [
    'hero' => [
        'title' => 'Empowering the Next Generation of Ethiopian Innovators',
        'subtitle' => 'Accessible, practical, and inspiring education — tailored for our community’s dreams and potential.'
    ],

    'story' => [
        'title' => 'How Tedor Path Began',
        'description' => 'Tedor Path started in Addis Ababa in 2017 E.C. with a single purpose: to help Ethiopian students and learners unlock their full potential through relevant, high-quality education. What began as a grassroots tutoring initiative by passionate university students has now grown into a movement to make modern learning — especially in tech, creativity, and language — accessible to all.',
        'image' => '/assets/img/story.jpg',
        'milestones' => [
            [
                'year' => '2017',
                'event' => 'Founded in Addis Ababa with 6 foundational summer courses and tutoring services',
                'icon' => 'lightbulb'
            ],
            [
                'year' => '2017 (Sene)',
                'event' => 'First summer program launched — 30+ tutors, 100+ students, and a vision born',
                'icon' => 'rocket'
            ],
            [
                'year' => 'Looking Ahead',
                'event' => 'Plans underway to offer year-round courses and serve learners across Ethiopia',
                'icon' => 'target'
            ]
        ],
        'stats' => [
            'title' => 'Launch Highlights',
            'description' => '30+ Tutors • 6 Learning Tracks • 3 Learning Modes • 1 Shared Purpose'
        ]
    ],

    'team' => [
        'title' => 'Built by Local Educators, Technologists & Dreamers',
        'description' => 'We’re a team of young professionals, teachers, and technologists dedicated to creating real change through education.',
        'members' => [
            [
                'name' => 'Bethel Berihun',
                'role' => 'Founder & Academic Lead',
                'expertise' => 'Electrical Engineer | Education Innovator',
                'image' => '/assets/img/bethel.jpg',
                'bio' => 'Leads Tedor Path’s academic vision — blending engineering thinking with a passion for empowering youth.',
                'social' => [
                    ['icon' => 'linkedin', 'url' => '#']
                ]
            ],
            [
                'name' => 'Meseret Getachew',
                'role' => 'Language Programs Director',
                'expertise' => 'Multilingual Instruction & Literacy Champion',
                'image' => '/assets/img/meseret.jpg',
                'bio' => 'Focused on unlocking communication skills for Ethiopian students across Amharic, English, and more.',
                'social' => [
                    ['icon' => 'linkedin', 'url' => '#']
                ]
            ],
            [
                'name' => 'Daniel Teklu',
                'role' => 'Tech Coach & Platform Architect',
                'expertise' => 'Web & Mobile Dev | Python Mentor',
                'image' => '/assets/img/daniel.jpg',
                'bio' => 'Coaches learners in real-world development skills and helps build the Tedor Path learning platform.',
                'social' => [
                    ['icon' => 'github', 'url' => '#'],
                    ['icon' => 'linkedin', 'url' => '#']
                ]
            ]
        ]
    ],

    'values' => [
        'title' => 'What Drives Us',
        'description' => 'Every course, every tutor, every student experience is guided by these shared values.',
        'items' => [
            [
                'title' => 'Local Empowerment',
                'description' => 'We build for Ethiopian students first — context-aware, culturally relevant, and future-ready.',
                'icon' => 'home',
                'icon_bg' => 'bg-orange-100 text-orange-600 dark:bg-orange-900/30 dark:text-orange-400'
            ],
            [
                'title' => 'Teaching Excellence',
                'description' => 'We invest in passionate instructors who love mentoring and deeply know their subject.',
                'icon' => 'star',
                'icon_bg' => 'bg-yellow-100 text-yellow-600 dark:bg-yellow-900/30 dark:text-yellow-400'
            ],
            [
                'title' => 'Learning by Doing',
                'description' => 'We believe students learn best when they build, create, and explore through action.',
                'icon' => 'hammer',
                'icon_bg' => 'bg-green-100 text-green-600 dark:bg-green-900/30 dark:text-green-400'
            ],
            [
                'title' => 'Access for All',
                'description' => 'Whether online, offline, or in hybrid — our learning model is flexible and inclusive.',
                'icon' => 'users',
                'icon_bg' => 'bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400'
            ]
        ]
    ],

    'cta' => [
        'title' => 'Be Part of Ethiopia’s Education Revolution',
        'description' => 'We’re inviting learners, parents, and partners to help reimagine what learning can be. Start your journey today.',
        'button' => [
            'url' => '/register',
            'class' => 'px-8 py-4 bg-white text-orange-600 hover:bg-orange-100 font-medium rounded-lg transition-colors duration-300',
            'text' => 'Join Our Program'
        ]
    ]
];
