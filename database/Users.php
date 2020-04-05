<?php
session_start();
$USERS = [
    [
        "login" => "stanislav",
        "password" => "12345",
        "name" => "Станислав",
        "surname" => "Карноза",
        "role" => ADMIN,
        "lang" => "ru",
    ],
    [
        "login" => "reactive",
        "password" => "12345",
        "name" => "Эльдар",
        "surname" => "Мирзабеков",
        "role" => MANAGER,
        "lang" => "en",
    ],
    [
        "login" => "ruslan",
        "password" => "12345",
        "name" => "Руслан",
        "surname" => "Кравцов",
        "role" => CLIENT,
        "lang" => "uk",
    ],
    [
        "login" => "leha",
        "password" => "12345",
        "name" => "Алексей",
        "surname" => "Кравченко",
        "role" => CLIENT,
    ]
];
