<?php
return [
    // Hero Section Configuration
    'hero' => [
        'title' => "Make Your Child's Summer <span class='text-orange-500'>Meaningful</span>",
        'subtitle' => '#Summer  #ForStudy  #ForPassion',
        'buttons' => [
            [
                'text' => 'Join Now',
                'url' => '/register',
                'class' => 'px-8 py-3 bg-azure hover:bg-blue-700 text-white rounded-lg transition-all duration-300 font-heading shadow-lg hover:shadow-xl transform hover:-translate-y-1'
            ],
            [
                'text' => 'Login',
                'url' => '/login',
                'class' => 'px-8 py-3 border-2 border-white text-white hover:bg-white hover:text-gray-900 rounded-lg transition-all duration-300 font-heading'
            ]
        ],
        'background_image' => '/assets/img/hero-bg.jpg',
        'decorative_elements' => [
            [
                'position' => 'top-1/4 left-1/4',
                'class' => 'w-16 h-16 rounded-full bg-blue-400 opacity-20 blur-xl animate-float-slow'
            ],
        ]
    ],

    // Why Choose Us Section
    'why_choose_us' => [
        'title' => 'Why <span class="text-blue-600 dark:text-blue-400">Tedor Path?</span>',
        'description' => 'We guide learners to grow — academically, digitally, and personally.',
        'cards' => [
            [
                'icon' => 'user',
                'title' => 'Expert Tutors',
                'description' => 'Passionate and qualified, our tutors provide tailored support for every student\'s journey.',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'code',
                'title' => 'Practical Learning',
                'description' => 'From coding to design, we offer real-world skills that spark creativity and confidence.',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'community',
                'title' => 'Caring Community',
                'description' => 'We foster a welcoming space where every child feels seen, heard, and supported.',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ]
        ],
        'cta' => [
            'text' => 'Learn More About Us',
            'url' => '/about',
            'class' => 'inline-block px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-300 font-heading shadow-lg hover:shadow-xl transform hover:-translate-y-1'
        ],
        'background_elements' => [
            [
                'position' => '-top-20 -right-20',
                'class' => 'w-64 h-64 rounded-full bg-blue-100 dark:bg-blue-900/10 opacity-30 blur-3xl'
            ],
        ]
    ],

    // Tutors Section
    'tutors' => [
        'title' => 'Qualified Tutors',
        'subtitle' => '#Online #In-person #In-Group',
        'description' => 'Our experienced tutors help students excel in academics and discover new passions.',
        'categories' => [
            [
                'icon' => 'academic',
                'title' => 'Academic Excellence',
                'description' => 'English, Math & National Exam Prep',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'early-learning',
                'title' => 'Early Stimulation',
                'description' => 'Curiosity-driven early learning',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'skills',
                'title' => 'Skill Development',
                'description' => 'Creative & technical hands-on workshops',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'bg_color' => 'bg-blue-100 dark:bg-blue-900/30'
            ]
        ],
        'cta' => [
            'text' => 'Find a Tutor Today',
            'url' => '/tutors',
            'class' => 'inline-block px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-300 font-heading shadow-lg hover:shadow-xl transform hover:-translate-y-1'
        ],
        'background' => [
            'type' => 'grid',
            'class' => 'absolute inset-0 opacity-5 dark:opacity-10 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]'
        ]
    ],

    // Courses Section
    'courses' => [
        'title' => 'Summer Courses',
        'subtitle' => '#Online #In-person #In-Group',
        'description' => 'Engaging programs to spark creativity and build essential skills.',
        'items' => [
            [
                'icon' => 'python',
                'title' => 'Python Programming',
                'description' => 'Hands-on coding to build real projects',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30',
                'badge' => 'New'
            ],
            [
                'icon' => 'photoshop',
                'title' => 'Graphics & Photoshop',
                'description' => 'Visual design & creativity fundamentals',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'video-editing',
                'title' => 'Video Editing & Animation',
                'description' => 'Cinematic storytelling and production',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'web-dev',
                'title' => 'Web Development',
                'description' => 'Full stack development from scratch',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'languages',
                'title' => 'Languages',
                'description' => 'Afan Oromo, English, Arabic, French & more',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'icon' => 'ai',
                'title' => 'AI & Prompt Engineering',
                'description' => 'Learn emerging AI & prompt crafting',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30',
                'badge' => 'Popular'
            ]
        ],
        'cta' => [
            'text' => 'Explore All Courses',
            'url' => '/courses',
            'class' => 'inline-block px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-300 font-heading shadow-lg hover:shadow-xl transform hover:-translate-y-1'
        ],
        'background_elements' => [
            [
                'position' => '-top-32 left-0',
                'class' => 'w-64 h-64 rounded-full bg-blue-100 dark:bg-blue-900/10 opacity-20 blur-3xl'
            ],
            [
                'position' => 'bottom-0 right-0',
                'class' => 'w-96 h-96 rounded-full bg-orange-100 dark:bg-orange-900/10 opacity-10 blur-3xl'
            ]
        ]
    ],

    // Services Section
    'services' => [
        'title' => 'More Services',
        'description' => 'Beyond tutoring, we deliver tools and materials that make learning easier at home.',
        'items' => [
            [
                'title' => 'Book Delivery',
                'description' => 'We deliver school books and guides to your door.',
                'icon' => 'book',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'title' => 'Toys & Storybooks',
                'description' => 'Fun, skill-building toys and stories for young minds.',
                'icon' => 'toy',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ],
            [
                'title' => 'Custom Materials',
                'description' => 'Request extra worksheets, preps, or learning tools.',
                'icon' => 'materials',
                'icon_color' => 'text-blue-600 dark:text-blue-400',
                'icon_bg' => 'bg-blue-100 dark:bg-blue-900/30'
            ]
        ],
        'cta' => [
            'text' => 'Submit a Request',
            'url' => '/contact',
            'class' => 'inline-block px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-300 font-heading shadow-lg hover:shadow-xl transform hover:-translate-y-1'
        ],
        'background' => [
            'gradients' => [
                [
                    'position' => 'top-0 left-0',
                    'class' => 'bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-100/30 via-transparent to-transparent dark:from-blue-900/10 animate-gradient-pulse'
                ],
                [
                    'position' => 'bottom-0 right-0',
                    'class' => 'bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-orange-100/30 via-transparent to-transparent dark:from-orange-900/10 animate-gradient-pulse-slow'
                ]
            ]
        ]
    ],

    // Social Media Links
    'social_links' => [
        'facebook' => 'https://facebook.com/tedorpath',
        'twitter' => 'https://twitter.com/tedorpath',
        'instagram' => 'https://instagram.com/tedorpath'
    ],

    // Contact Information
    'contact' => [
        'email' => 'info@tedorpath.com',
        'phone' => '+251900000000',
        'address' => 'Addis Ababa, Ethiopia'
    ]
];
