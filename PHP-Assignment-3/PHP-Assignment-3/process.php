<?php
// Validate the submitted form, then pass the validated data to result.php.
function redirectWithError(string $error, string $field = ''): never {
    $url = 'index.php?error=' . rawurlencode($error);
    if ($field !== '') {
        $url .= '#' . rawurlencode($field);
    }
    header('Location: ' . $url);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$required = [
    'name', 'pob', 'dob', 'address', 'gender', 'telephone', 'email',
    'parent_name', 'parent_telephone', 'relationship',
    'student_id', 'faculty', 'department', 'class', 'registration_date'
];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim((string)$_POST[$field]) === '') {
        redirectWithError('missing', $field);
    }
}

$name = trim((string)$_POST['name']);
if (!preg_match('/^[\p{L} ]+$/u', $name)) {
    redirectWithError('name', 'name');
}

$email = trim((string)$_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithError('email', 'email');
}

if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    redirectWithError('image', 'image');
}

$allowedMimeTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg',
    'image/gif' => 'gif',
    'image/webp' => 'webp'
];
$tmpPath = $_FILES['image']['tmp_name'];
$mimeType = (new finfo(FILEINFO_MIME_TYPE))->file($tmpPath);
if (!isset($allowedMimeTypes[$mimeType])) {
    redirectWithError('image', 'image');
}

// Store uploads in a dedicated folder. Create it if it does not exist.
$uploadDir = __DIR__ . '/uploads';
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true) && !is_dir($uploadDir)) {
    redirectWithError('upload', 'image');
}

$extension = $allowedMimeTypes[$mimeType];
$fileName = bin2hex(random_bytes(8)) . '.' . $extension;
$destination = $uploadDir . '/' . $fileName;
if (!move_uploaded_file($tmpPath, $destination)) {
    redirectWithError('upload', 'image');
}

$data = [
    'name' => $name,
    'pob' => trim((string)$_POST['pob']),
    'dob' => (string)$_POST['dob'],
    'address' => trim((string)$_POST['address']),
    'gender' => trim((string)$_POST['gender']),
    'telephone' => trim((string)$_POST['telephone']),
    'email' => $email,
    'parent_name' => trim((string)$_POST['parent_name']),
    'parent_telephone' => trim((string)$_POST['parent_telephone']),
    'relationship' => trim((string)$_POST['relationship']),
    'student_id' => trim((string)$_POST['student_id']),
    'faculty' => trim((string)$_POST['faculty']),
    'department' => trim((string)$_POST['department']),
    'class' => trim((string)$_POST['class']),
    'registration_date' => (string)$_POST['registration_date'],
    'image' => 'uploads/' . $fileName
];

session_start();
$_SESSION['student_data'] = $data;
header('Location: result.php');
exit;
