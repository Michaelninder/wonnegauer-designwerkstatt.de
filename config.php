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
            'items'       => [
                [
                    'bilder' => ['assets/img/kunst/empfangskomitee_bahnhof.jpg'],
                    'text'   => '"Empfangskomitee" – Als aktiver Mensch versuche ich Einflüsse und Strömungen in mein Handeln einzubeziehen. In der Öffentlichkeit wurde und wird intensiv über die Willkommenskultur in Deutschland debattiert. Dieser Willkommensgedanke und die Partnerschaft mit Garons haben mich inspiriert, die schon länger als „Begrüßer" eingesetzten Faßdauben in einem Objekt zu vereinen, um als „Empfangskomitee" die Offenheit und Freundlichkeit von Flörsheim-Dalsheim zu symbolisieren. Die drei Fassdauben haben sich zu einer Dreiergruppe zusammengefunden und stehen seit dem 25. März 2015 auf der Grünfläche gegenüber des Bahnhofs als das „Empfangskomitee" bereit, um mit ihren am oberen Ende eingefrässten, lachenden Gesichtern stellvertretend für die Flörsheim-Dalsheimer, unsere Partnergemeinde Garons und alle vorbeikommenden Besucher mit heiterer Offenheit zu grüßen.',
                ],
                [
                    'bilder' => ['assets/img/kunst/atelier_2013.jpg'],
                    'text'   => 'Unser Atelier wurde im Sommer 2013 eröffnet.',
                ],
                [
                    'bilder' => ['assets/img/kunst/unendlich.jpg'],
                    'text'   => 'Einfach Unendlich',
                ],
                [
                    'bilder' => ['assets/img/kunst/kunst1.jpg'],
                    'text'   => "„Das gelbe Dach\"\n„Gehen und Kommen, Woher und Wohin?\"\n„Verdichten und Expandieren\"\n„Licht am Ende des Tunnels\"",
                ],
                [
                    'bilder' => ['assets/img/kunst/kunst2.jpg'],
                    'text'   => "Bild links: Jahreszeiten – auch diese verändern sich.\nBild rechts: Pure Energie; Sonne und die noch brodelnde Erde, mittendrin das Leben.",
                ],
                [
                    'bilder' => ['assets/img/kunst/bühne_dgh.jpg'],
                    'text'   => '„Bühnenbild „Annabelle und die Wunschkugel"',
                ],
                [
                    'bilder' => ['assets/img/kunst/die_erde_brennt_1.JPG', 'assets/img/kunst/die_erde_brennt_2.JPG'],
                    'text'   => "„Die Erde brennt\"\nDer Hochglanzlack steht für den Glamour in der Welt, das matte Acryl für das reale Leben. Die Erde brennt in allen Bereichen – in Wirtschaft, Ökologie und Gesellschaft.",
                ],
            ],
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
