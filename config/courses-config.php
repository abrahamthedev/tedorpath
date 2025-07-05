<?php

return [
    'hero' => [
        'title' => 'Master Rewarding Skills This Summer',
        'subtitle' => 'Carefully curated summer courses led by passionate tutors — designed to empower learners across Ethiopia',
        'cta' => [
            'url' => '#featured-courses',
            'class' => 'px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition-colors duration-300',
            'text' => 'Browse Courses'
        ]
    ],

    'categories' => [
        'title' => 'Explore Our Course Categories',
        'description' => 'Choose from practical and relevant course areas designed to build 21st-century skills',
        'items' => [
            [
                'title' => 'Programming & Technology',
                'description' => 'Build apps, websites, and intelligent systems with modern tools and languages',
                'icon' => 'cpu',
                'gradient' => 'from-orange-500 to-yellow-500',
                'link' => '/courses/technology'
            ],
            [
                'title' => 'Creative Media & Design',
                'description' => 'Design visual stories and compelling digital media with expert guidance',
                'icon' => 'camera',
                'gradient' => 'from-pink-500 to-red-500',
                'link' => '/courses/media'
            ],
            [
                'title' => 'Language & Communication',
                'description' => 'Master local and global languages to express ideas and open new opportunities',
                'icon' => 'book-open',
                'gradient' => 'from-blue-500 to-indigo-600',
                'link' => '/courses/languages'
            ]
        ]
    ],

    'popular' => [
        'title' => 'Popular Courses for Summer 2017 (E.C.)',
        'description' => 'Taught by passionate tutors ready to support your learning journey',
        'courses' => [
            [
                'title' => 'Python Programming Essentials',
                'description' => 'Learn to code from scratch, solve problems, and build interactive apps.',
                'image' => '/assets/img/python.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.9,
                'reviews' => '1.1k',
                'price' => '1000 Birr/month',
                'url' => '/courses/python'
            ],
            [
                'title' => 'AI & Prompt Engineering',
                'description' => 'Understand AI fundamentals and master prompting for chatbots, content, and tools.',
                'image' => '/assets/img/ai.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.8,
                'reviews' => '850',
                'price' => '1200 Birr/month',
                'url' => '/courses/ai'
            ],
            [
                'title' => 'Web Development (Front + Back End)',
                'description' => 'Build complete websites using HTML, CSS, JavaScript, and PHP or Node.js.',
                'image' => '/assets/img/web-dev.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.9,
                'reviews' => '1.3k',
                'price' => '1000 Birr/month',
                'url' => '/courses/web-development'
            ],
            [
                'title' => 'Graphic Design & Photoshop',
                'description' => 'Design posters, social media content, and branding with Adobe Photoshop.',
                'image' => '/assets/img/graphics.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.7,
                'reviews' => '970',
                'price' => '1000 Birr/month',
                'url' => '/courses/graphics'
            ],
            [
                'title' => 'Video Editing',
                'description' => 'Produce cinematic edits, reels, and YouTube content using professional tools.',
                'image' => '/assets/img/video.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.6,
                'reviews' => '720',
                'price' => '1000 Birr/month',
                'url' => '/courses/video-editing'
            ],
            [
                'title' => 'Language Courses (Afan Oromo, English, Arabic...)',
                'description' => 'Speak and write fluently with language tutors across multiple languages.',
                'image' => '/assets/img/language.jpg',
                'level' => 'Beginner to Intermediate',
                'rating' => 4.9,
                'reviews' => '1.6k',
                'price' => '1000 Birr/month',
                'url' => '/courses/languages'
            ]
        ]
    ],

    'cta' => [
        'title' => 'Ready to Learn Something Transformational?',
        'description' => 'Be part of our first summer intake and gain skills to shape your career and future.',
        'button' => [
            'url' => '/register',
            'class' => 'px-8 py-4 bg-white text-orange-600 hover:bg-orange-100 font-medium rounded-lg transition-colors duration-300',
            'text' => 'Register Now'
        ]
    ]
];
