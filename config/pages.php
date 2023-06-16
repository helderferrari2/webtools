<?php

return [
    [
        'active' => true,
        'slug' => 'gerador-senha',
        'title' => 'Gerador de Senhas',
        'subtitle' => 'Crie aqui senhas seguras de formas aleatórias.',
        'icon' => '',
        'component' => 'PasswordGenerator',
        'method' => 'passwordGenerator'
    ],
    [
        'active' => true,
        'slug' => 'gerador-nome',
        'title' => 'Gerador de Nomes',
        'subtitle' => 'Crie nomes de forma aleatória.',
        'icon' => '',
        'component' => 'PersonNameGenerator',
        'method' => 'personNameGenerator'
    ],
];