<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
/*In web.php insert or creating data in database
Route::get('/projectsCreate', [DemoController::class, 'projectsCreate']);
Route::get('/experianceCreate', [DemoController::class, 'experianceCreate']);
Route::get('/educationInsert', [DemoController::class, 'educationInsert']);*/
    public function experianceCreate()
    {
        $experiences = [
            [
                'duration' => '2018-2020',
                'title' => 'Software Engineer',
                'designation' => 'Backend Developer',
                'details' => 'Worked as a backend developer, responsible for developing and maintaining server-side logic and APIs using PHP and Laravel framework. Collaborated with front-end developers to integrate user-facing elements with server-side logic.'
            ],
            [
                'duration' => '2020-2021',
                'title' => 'Senior Software Engineer',
                'designation' => 'Technical Lead',
                'details' => 'Promoted to a technical lead role, where I oversaw a team of developers and provided technical guidance and support. Led the architectural design and implementation of complex software systems.'
            ],
            [
                'duration' => '2021-2022',
                'title' => 'Solution Architect',
                'designation' => 'System Analyst',
                'details' => 'As a solution architect and system analyst, I collaborated with clients to gather requirements, designed scalable and efficient software solutions, and provided technical recommendations. Led a team of developers to implement the proposed solutions.'
            ],
            [
                'duration' => '2022-2023',
                'title' => 'Product Manager',
                'designation' => 'Product Owner',
                'details' => 'Transitioned into a product management role, responsible for defining product vision, creating roadmaps, and prioritizing features. Collaborated with cross-functional teams, including developers, designers, and stakeholders, to deliver successful products.'
            ],
            [
                'duration' => '2023-Present',
                'title' => 'CTO',
                'designation' => 'Chief Technology Officer',
                'details' => 'Currently serving as the CTO, responsible for defining and executing the company\'s technical strategies. Leading the technology team, driving innovation, and ensuring the organization stays at the forefront of technological advancements.'
            ]
        ];

        foreach ($experiences as $experience) {
            DB::table('experiences')->insert($experience);
        }
    }
    public function educationInsert()
    {
        $educations = [
            [
                'duration' => '2010-2014',
                'institutionName' => 'University of XYZ',
                'field' => 'Bachelor of Science in Computer Science',
                'details' => 'Studied various computer science subjects and completed a thesis on artificial intelligence.',
            ],
            [
                'duration' => '2007-2009',
                'institutionName' => 'ABC College',
                'field' => 'Associate Degree in Business Administration',
                'details' => 'Took courses in business management, accounting, and marketing.',
            ],
            [
                'duration' => '2015-2016',
                'institutionName' => 'School of Design',
                'field' => 'Certificate in Graphic Design',
                'details' => 'Learned graphic design principles, typography, and software skills.',
            ],
            [
                'duration' => '2021',
                'institutionName' => 'Online Learning Platform',
                'field' => 'Web Development Bootcamp',
                'details' => 'Completed an intensive web development program covering HTML, CSS, JavaScript, and frameworks.',
            ],
            [
                'duration' => '2005-2010',
                'institutionName' => 'High School Name',
                'field' => 'High School Diploma',
                'details' => 'Studied a range of subjects including mathematics, science, literature, and history.',
            ],
        ];
        foreach ($educations as $education) {
            DB::table('educations')->insert($education);
        }
    }
    public function projectsCreate()
    {
        $projects = [
            [
                'title' => 'E-commerce Website',
                'previewLink' => 'https://placehold.co/600x400/png',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A fully functional e-commerce website built using Laravel and Vue.js. The website includes features such as product listings, shopping cart, user authentication, and payment integration.',
            ],
            [
                'title' => 'Social Media App',
                'previewLink' => 'https://placehold.co/600x400/png',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A social media application developed using React and Node.js. The app allows users to create profiles, post updates, follow other users, and engage in social interactions.',
            ],
            [
                'title' => 'Mobile Expense Tracker',
                'previewLink' => 'https://placehold.co/600x400/png',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A mobile expense tracking app built for iOS and Android using React Native. The app enables users to track their expenses, set budgets, and generate reports for better financial management.',
            ],
            [
                'title' => 'Portfolio Website',
                'previewLink' => 'https://placehold.co/600x400/png',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A personal portfolio website showcasing my work and skills. The website is built using HTML, CSS, and JavaScript, and it includes sections for projects, about me, and contact information.',
            ],
            [
                'title' => 'Task Management App',
                'previewLink' => 'https://placehold.co/600x400/png',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A task management application developed using Django and Angular. The app allows users to create tasks, assign them to team members, track progress, and set deadlines for efficient project management.',
            ],
            [
                'title' => 'Music Streaming Service',
                'previewLink' => 'https://example.com/music-streaming-service-preview',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'An online music streaming platform that provides access to a vast library of songs. The service offers features like personalized playlists, recommendations, and social sharing, built using technologies such as Node.js and MongoDB.',
            ],
            [
                'title' => 'Food Delivery App',
                'previewLink' => 'https://example.com/food-delivery-app-preview',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A food delivery application built for iOS and Android using Flutter. The app allows users to browse nearby restaurants, place orders, track deliveries in real-time, and make payments securely.',
            ],
            [
                'title' => 'Online Learning Platform',
                'previewLink' => 'https://example.com/online-learning-platform-preview',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'An online learning platform offering courses on various subjects. The platform supports video lectures, quizzes, assignments, and discussion forums, and it is built using technologies like Ruby on Rails and PostgreSQL.',
            ],
            [
                'title' => 'Travel Booking Website',
                'previewLink' => 'https://example.com/travel-booking-website-preview',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A travel booking website that allows users to search for flights, hotels, and vacation packages. The website integrates with third-party APIs for real-time availability and booking, and it is developed using PHP and MySQL.',
            ],
            [
                'title' => 'Fitness Tracking App',
                'previewLink' => 'https://example.com/fitness-tracking-app-preview',
                'thumbnailLink' => 'https://placehold.co/600x400/png',
                'details' => 'A fitness tracking app for monitoring workouts and progress. The app provides features such as exercise tracking, goal setting, workout history, and performance analytics, and it is built using Kotlin and Firebase.',
            ],
        ];
        foreach ($projects as $project) {
            DB::table('projects')->insert($project);
        }
    }
}
