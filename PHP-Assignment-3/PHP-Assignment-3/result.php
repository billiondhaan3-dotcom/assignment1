<?php
session_start();
if (empty($_SESSION['student_data']) || !is_array($_SESSION['student_data'])) {
    header('Location: index.php');
    exit;
}
$data = $_SESSION['student_data'];
function h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
$labels = [
    'name' => 'Full Name',
    'pob' => 'Place of Birth (POB)',
    'dob' => 'Date of Birth (DOB)',
    'address' => 'Address',
    'gender' => 'Gender',
    'telephone' => 'Telephone',
    'email' => 'Email',
    'parent_name' => 'Parent Name',
    'parent_telephone' => 'Parent Telephone',
    'relationship' => 'Relationship',
    'student_id' => 'Student ID',
    'faculty' => 'Faculty',
    'department' => 'Department',
    'class' => 'Class',
    'registration_date' => 'Registration Date'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f3f6fb; }
        .page-header { background: linear-gradient(135deg, #173b73, #2876bd); color: white; border-radius: 16px; }
        .card { border: 0; border-radius: 16px; box-shadow: 0 5px 20px rgba(20,45,80,.08); }
        .student-photo { width: 120px; height: 120px; object-fit: cover; border-radius: 12px; border: 3px solid #e5edf7; }
    </style>
</head>
<body>
<div class="container py-5">
    <header class="page-header p-4 p-md-5 mb-4">
        <h1 class="h2 mb-2">Registration Successful</h1>
        <p class="mb-0">Student information submitted successfully.</p>
    </header>
    <div class="card p-3 p-md-4">
        <div class="d-flex align-items-center gap-3 mb-4">
            <img src="<?= h($data['image']) ?>" class="student-photo" alt="Student image">
            <div>
                <h2 class="h4 mb-1"><?= h($data['name']) ?></h2>
                <p class="text-secondary mb-0">Student ID: <?= h($data['student_id']) ?></p>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary"><tr><th style="width: 38%">Field</th><th>Submitted Information</th></tr></thead>
                <tbody>
                <?php foreach ($labels as $key => $label): ?>
                    <tr><th scope="row"><?= h($label) ?></th><td><?= h($data[$key] ?? '') ?></td></tr>
                <?php endforeach; ?>
                <tr><th scope="row">Student Image</th><td><?= h(basename($data['image'])) ?></td></tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-column flex-sm-row gap-2">
            <a href="index.php" class="btn btn-primary">Register Another Student</a>
            <button type="button" onclick="window.print()" class="btn btn-outline-secondary">Print Details</button>
        </div>
    </div>
</div>
</body>
</html>
