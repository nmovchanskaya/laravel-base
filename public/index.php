<?php

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Student;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

/*
    $group = Group::create([
        'id' => 1,
        'title' => 'Группа FS-01', // Название группы
        'start_from' => '2023-01-10', // Дата начала обучения
        'is_active' => true, // Начала ли группа своё обучение
        'created_at' => '2023-01-01 10:00:00',
        'updated_at' => '2023-01-01 10:00:00',
    ]);
    
    $student = Student::create([
        'id' => 1,
        'group_id' => 1, // ID группы
        'surname' => 'Петров', // Фамилия студента
        'name' => 'Иван', // Имя студента
        'created_at' => '2023-01-01 10:00:00',
        'updated_at' => '2023-01-01 10:00:00',
    ]);
    
    $a = $student->group();
    echo "!!!!!";
    //var_dump($a);
*/