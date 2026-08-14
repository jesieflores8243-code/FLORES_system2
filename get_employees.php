<?php

header('Content-Type: application/json');

$employees = [
    [
        'id' => 1,
        'name' => 'Juan Dela Cruz',
        'department' => 'Front Desk'
    ],
    [
        'id' => 2,
        'name' => 'Maria Santos',
        'department' => 'Housekeeping'
    ],
    [
        'id' => 3,
        'name' => 'Pedro Reyes',
        'department' => 'Management'
    ]
];

echo json_encode($employees);
