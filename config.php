<?php

return [
    'site_name' => 'Wonnegauer Designwerkstatt',
    'base_url'  => '',

    'pages' => [
        'index' => [
            'title'       => 'Willkommen',
            'description' => 'Wonnegauer Designwerkstatt – Kunst, Kultur und Design aus der Metropolregion Rhein-Neckar.',
            'view'        => 'index',
        ],
        'aktuell' => [
            'title'       => 'Aktuell',
            'description' => 'Aktuelle Neuigkeiten und Veranstaltungen der Wonnegauer Designwerkstatt.',
            'view'        => 'aktuell',
            'items'       => [
                [
                    'text' => 'Öffnungszeiten nach Vereinbarung, oder einfach mal klingeln – wenn wir da sind, sind wir für Sie da.',
                ],
                [
                    'text' => 'Ausstellung „Orange" im Verbandsgemeinde Museum in Gimbsheim.',
                    'link' => ['href' => 'https://www.museum-vg-eich.de', 'label' => 'www.museum-vg-eich.de'],
                ],
            ],
        ],
        'termine' => [
            'title'       => 'Termine',
            'description' => 'Kommende Termine und Veranstaltungen.',
            'view'        => 'termine',
            'termine'     => [
                [
                    'datum'       => '2026-04-12',
                    'titel'       => 'Atelierführung Frühjahr',
                    'beschreibung'=> 'Offene Atelierführung durch die Wonnegauer Designwerkstatt. Eintritt frei.',
                    'ort'         => 'Atelier Ternis, Flörsheim-Dalsheim',
                ],
                [
                    'datum'       => '2026-05-03',
                    'titel'       => 'Radwanderung Rheinhessen',
                    'beschreibung'=> 'Geführte Radwanderung durch die Weinberge Rheinhessens mit Brigitte Ternis.',
                    'ort'         => 'Treffpunkt: Marktplatz Flörsheim-Dalsheim',
                ],
                [
                    'datum'       => '2026-06-21',
                    'titel'       => 'Sommerfest & Vernissage',
                    'beschreibung'=> 'Eröffnung der Sommerausstellung mit neuen Acrylarbeiten von Wolfgang Ternis.',
                    'ort'         => 'Atelier Ternis, Flörsheim-Dalsheim',
                ],
            ],
        ],
        'kunst' => [
            'title'       => 'Kunst',
            'description' => 'Kunstprojekte und Ausstellungen der Wonnegauer Designwerkstatt.',
            'view'        => 'kunst',
        ],
        'kultur' => [
            'title'       => 'Kultur',
            'description' => 'Kulturelles Engagement und Projekte.',
            'view'        => 'kultur',
        ],
        'design' => [
            'title'       => 'Design',
            'description' => 'Designprojekte und Arbeiten aus der Werkstatt.',
            'view'        => 'design',
        ],
        'wir' => [
            'title'       => 'Wir',
            'description' => 'Das Team hinter der Wonnegauer Designwerkstatt.',
            'view'        => 'wir',
        ],
        'links' => [
            'title'       => 'Links',
            'description' => 'Interessante Links und Empfehlungen.',
            'view'        => 'links',
        ],
        'kontakt' => [
            'title'       => 'Kontakt',
            'description' => 'Kontaktieren Sie die Wonnegauer Designwerkstatt.',
            'view'        => 'kontakt',
        ],
        'impressum' => [
            'title'       => 'Impressum',
            'description' => 'Impressum und rechtliche Hinweise.',
            'view'        => 'impressum',
        ],
    ],

    'nav' => ['aktuell', 'termine', 'kunst', 'kultur', 'design', 'wir', 'links', 'kontakt'],
];
