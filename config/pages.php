<?php

return [
    [
        'active' => true,
        'category' => 'desenvolvedores',
        'slug' => 'gerador-senha',
        'title' => 'Gerador de Senhas',
        'subtitle' => 'Crie aqui senhas seguras de formas aleatórias.',
        'component' => 'PasswordGenerator',
        'method' => 'passwordGenerator'
    ],
    [
        'active' => true,
        'category' => 'geradores',
        'slug' => 'gerador-nome',
        'title' => 'Gerador de Nomes',
        'subtitle' => 'Crie nomes de forma aleatória.',
        'component' => 'PersonNameGenerator',
        'method' => 'personNameGenerator'
    ],
    [
        'active' => true,
        'category' => 'desenvolvedores',
        'slug' => 'gerador-celular',
        'title' => 'Gerador de Celular',
        'subtitle' => 'Crie numeros de celular.',
        'component' => 'CellPhoneNumberGenerator',
        'method' => 'cellPhoneNumberGenerator'
    ],
    [
        'active' => true,
        'category' => 'desenvolvedores',
        'slug' => 'gerador-telefone',
        'title' => 'Gerador de telefone',
        'subtitle' => 'Crie numeros de telefone.',
        'component' => 'PhoneNumberGenerator',
        'method' => 'phoneNumberGenerator'
    ],
    [
        'active' => true,
        'category' => 'desenvolvedores',
        'slug' => 'lorem ipsum',
        'title' => 'Gerador de textos',
        'subtitle' => 'Crie textos de formas aleatórias.',
        'component' => 'TextGenerator',
        'method' => 'textGenerator'
    ]
];