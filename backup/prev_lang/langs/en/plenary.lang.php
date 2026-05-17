<?php
return [
    'coming_soon' => 'Coming Soon',
    'details' => 'Details',
    'program' => [
        'toggle_label' => 'FIFI May 18 Schedule',
        'schedule' => [
            ['time' => '09:15–10:00', 'title' => 'Registration'],
            ['time' => '10:00–10:05', 'title' => 'Rector\'s Welcome'],
            ['time' => '10:05–12:15', 'title' => 'Plenary sessions'],
        ],
        'plenary_talks' => [
            ['speaker' => 'Dr. Viktor Dorfler',          'title' => 'Professor of AI Strategy, University of Strathclyde'],
            ['speaker' => 'Prof. Dr. Petra Aczél',       'title' => 'Head, Centre for AI and Future Strategies, Széchenyi István University'],
            ['speaker' => 'Péter Hidvégi',               'title' => 'Managing Director, SAP Hungary'],
            ['speaker' => 'Gergely Kovács',              'title' => 'Head, XR Coalition'],
        ],
        'schedule_after' => [
            ['time' => '12:15–13:00', 'title' => 'Lunch break'],
            ['time' => '13:00–13:15', 'title' => 'Press conference'],
            ['time' => '13:15–16:20', 'title' => 'Session presentations, panel discussions (Coffee break: 14:35–14:50)'],
            ['time' => '16:20–16:30', 'title' => 'Closing remarks – Dr. Ferenc Dietz, President, Gábor Dénes University | Prompt Battle award ceremony'],
        ],
        'sections_label' => 'Session Presentations & Panel Discussions',
        'sections' => [
            [
                'number'   => 1,
                'title'    => 'Deep Tech & Fintech',
                'speakers' => [
                    ['name' => 'Zsombor Nagy',       'role' => 'Head, AI Centre, OTP Bank Nyrt.'],
                    ['name' => 'Rezka Norhafizah',   'role' => 'Junior Researcher, Islamic University of Kalimantan, Indonesia (online)'],
                    ['name' => 'Dr. Viktor Vajda',    'role' => 'Secretary General, AI Advisory Board'],
                    ['name' => 'Bálint Rákosi',       'role' => 'CEO, R-Szoft Kft.'],
                    ['name' => 'Antal Kuthy',         'role' => 'Managing Director, E-Group ICT Software Zrt.'],
                ],
                'roundtable' => [
                    'title'     => 'Panel Discussion – Fintech Trends with a Focus on Agentic AI',
                    'moderator' => 'Dr. Viktor Urbán',
                    'speakers'  => [],
                ],
            ],
            [
                'number'   => 2,
                'title'    => 'Knowledge, Research, Technology',
                'speakers' => [
                    ['name' => 'Dávid Csurgó',    'role' => 'Managing Director, GDE MIT'],
                    ['name' => 'Zoltán Biczó',    'role' => 'Lecturer, Gábor Dénes University'],
                    ['name' => 'Dávid Jakab',     'role' => 'Lecturer, Gábor Dénes University'],
                    ['name' => 'Dr. Viktor Urbán', 'role' => 'Head of Fintech Specialisation, Gábor Dénes University'],
                    ['name' => 'Tamás Szerémy',   'role' => 'Chief Technology Officer, GDE MIT'],
                    ['name' => 'Gábor Budaházy',  'role' => 'Head of Data and Analytics, GDE MIT'],
                ],
                'roundtable' => [
                    'title'     => 'Panel Discussion',
                    'moderator' => 'Zoltán Biczó',
                    'speakers'  => [
                        ['name' => 'László Gönczy',  'role' => 'Head of Department, BME AI Department'],
                        ['name' => 'László Gulyás',  'role' => 'Associate Professor, ELTE AI Department'],
                        ['name' => 'György Eigner',  'role' => 'Dean, Óbuda University'],
                    ],
                ],
            ],
        ],
    ],
    'speakers' => [
        [
            'name' => 'Prof. Dr. László Palkovics',
            'title' => 'University Professor',
            'institution' => 'Gábor Dénes University and University of Debrecen',
            'image' => 'palkovics.jpg',
            'image_position' => 'center top',
            'image_scale' => '80%',
            'bio' => 'Prof. Dr. László Palkovics, who until recently served as the Government Commissioner for Artificial Intelligence, led the implementation of Hungary\'s renewed artificial intelligence strategy. Previously, he held the positions of Minister of Innovation and Technology (2018–2022) and Minister of Technology and Industry (2022). With a background in mechanical engineering, he has held prominent roles in both academia and industry, including at the Budapest University of Technology and Economics, MTA SZTAKI, and Knorr-Bremse. His expertise encompasses innovation policy, higher education, and industrial R&D. He has played a pivotal role in shaping Hungary\'s AI strategy and advancing technological modernization. In recognition of his contributions to engineering and innovation, he has been honored with several prestigious awards, including the Széchenyi Prize and the Gábor Dénes Prize.',
        ],
        [
            'name' => 'Dr. Viktor Dörfler',
            'title' => 'Professor of AI Strategy',
            'institution' => 'University of Strathclyde Business School, Glasgow',
            'image' => 'dorfler.jpg',
            'image_position' => 'center top',
            'image_scale' => '80%',
            'bio' => 'Dr Viktor Dörfler is a scholar, consultant, teacher, and speaker, a Professor of AI Strategy at the University of Strathclyde Business School, Glasgow, UK and holds a Research Professor position at the Corvinus University of Budapest, Hungary, as well as a Visiting Professor appointment at the University of Zagreb, Croatia. As a practitioner, Viktor spearheaded the development of AI software, designed intelligent platforms, and conducted a number of AI implementations. Meanwhile, his scholarly research focuses on talent, creativity, and the grandmaster-apprentice relationship. Viktor conducted in-depth open-ended interviews with 20 top scientists, including 17 Nobel Laureates, in order to understand the thinking of scientists at the highest level of mastery. He advises organisations how to get the balance right between using AI, fostering communities of practice, and enabling grandmaster-apprentice relationships. Viktor\'s book What Every CEO Should Know About AI was published by the Cambridge University Press in 2022 followed by the Turkish edition in 2023.',
        ],
        [
            'name' => 'Péter Hidvégi',
            'title' => 'Managing Director',
            'institution' => 'SAP Hungary',
            'image' => 'hidvegi.png',
            'bio' => 'Péter Hidvégi, Managing Director of SAP Hungary, has more than twenty years of experience in the technology and consulting sectors. He has been working at SAP since 2017, where as a leader he has overseen sales areas responsible for the utilities, energy, and pharmaceutical industries, and later for enterprise clients, working with companies such as MOL, MVM, Richter, and Egis. Previously, he worked as a consultant at PricewaterhouseCoopers, IBM, and Accenture, and later led Microsoft\'s regional cooperation with one of the largest players in the telecommunications sector. He holds a technical degree from BME and an MBA from Corvinus University of Budapest, and is the father of five children.',
        ],
        [
            'name' => 'Dr. Petra Aczél',
            'title' => 'communication researcher, university professor, head of center',
            'institution' => 'AI and Future Strategies Center, Széchenyi István University',
            'image' => 'aczel.png',
            'bio' => 'Dr. Petra Aczél, communication and media researcher, full professor and head of AI and Future Strategies Centre at the Széchenyi István University of Győr. Working with several universities in Hungary and abroad, she has led research projects and published seven books and more than 200 articles in the fields of public, media and digital communication as well as future skills and future proofing. Her recent academic interests are invested into artificial intelligence, and its impact on human future(s).',
        ],
        [
            'name' => 'Gergely Kovács',
            'title' => 'President',
            'institution' => 'HUN XR Coalition',
            'image' => 'kovacs_g.png',
            'bio' => 'Dr. Gergely Kovács is President of the Hungarian XR Association and Head of the XR Centre of Excellence at the Defence Innovation Research Institute (VIKI). He leads research in virtual reality, artificial intelligence, and digital twin technologies, with a focus on immersive learning, AI-driven avatar instructors, and human performance in XR environments. He also chairs XR- and simulation-related international cooperation initiatives within the European Defence Agency, supporting innovation and next-generation training concepts across Europe.',
        ],
        [
            'name' => 'Dr. Dorota Czajkowska',
            'title' => 'Senior Lecturer',
            'institution' => 'UTH Uczelnia Techniczno-Handlowa',
            'image' => 'czajkowska.png',
            'bio' => 'Dr. Dorota Czajkowska is an economist, public finance practitioner and academic teacher. She works in local government, where she is involved in debt policy, creditworthiness assessment and financial risk analysis of the city. Her professional interests include local government finance, public debt management, relations with financial institutions, credit ratings and the impact of macroeconomic uncertainty on public sector decision-making. She is also an academic teacher at the University of Technology and Commerce in Warsaw, where she teaches economics and finance-related subjects. Her academic and teaching approach combines public finance practice with economic theory, with particular emphasis on real-world data, current macroeconomic developments and practical case studies. Her current research and teaching interests focus on the use of artificial intelligence in public finance management, economic education and decision-support processes in the public sector.',
        ],
    ],
];
