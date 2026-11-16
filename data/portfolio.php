
<?php

$projects = [
    [
        "title" => "Portfolio Website",
        "description" => "Un site web personnel développé avec HTML et CSS.",
        "image" => "img/project1.png",
        "category" => "Web",
        "status" => "completed"
    ],

    [
        "title" => "Todo List",
        "description" => "Une application pour organiser les tâches.",
        "image" => "img/project2.png",
        "category" => "JavaScript",
        "status" => "completed"
    ],

    [
        "title" => "E-commerce Website",
        "description" => "Un projet de boutique en ligne.",
        "image" => "img/project3.png",
        "category" => "Web",
        "status" => "in-progress"
    ]
];

$totalProjects = count($projects);

$completedProjects = [];

foreach ($projects as $project) {
    if ($project["status"] === "completed") {
        $completedProjects[] = $project;
    }
}
