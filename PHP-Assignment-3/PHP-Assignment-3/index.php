<?php
// Student Registration Form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f3f6fb; }
        .page-header { background: linear-gradient(135deg, #173b73, #2876bd); color: white; border-radius: 16px; }
        .section-title { color: #173b73; border-bottom: 2px solid #dce7f5; padding-bottom: .55rem; margin-bottom: 1rem; }
        .card { border: 0; border-radius: 16px; box-shadow: 0 5px 20px rgba(20,45,80,.08); }
        .form-label { font-weight: 600; }
    </style>
</head>
<body>
<div class="container py-5">
    <header class="page-header p-4 p-md-5 mb-4">
        <h1 class="h2 mb-2">Student Registration Form</h1>
        <p class="mb-0">PHP &amp; MySQL — Chapter 4 Assignment (Forms)</p>
    </header>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php
            $messages = [
                'missing' => 'Please complete all required fields.',
                'name' => 'Name must contain letters and spaces only.',
                'email' => 'Please enter a valid email address.',
                'image' => 'Please upload a valid image file (PNG, JPG, JPEG, GIF, or WEBP).',
                'upload' => 'The image could not be uploaded. Please try again.'
            ];
            $key = $_GET['error'];
            echo htmlspecialchars($messages[$key] ?? 'Please check your entries.', ENT_QUOTES, 'UTF-8');
            ?>
        </div>
    <?php endif; ?>

    <form action="process.php" method="POST" enctype="multipart/form-data" class="card p-3 p-md-4" id="registrationForm" novalidate>
        <section class="mb-4">
            <h2 class="h5 section-title">1. Personal Information</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="name">Full Name *</label>
                    <input class="form-control" id="name" name="name" required pattern="[A-Za-z ]+" title="Letters and spaces only">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="pob">Place of Birth (POB) *</label>
                    <input class="form-control" id="pob" name="pob" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="dob">Date of Birth (DOB) *</label>
                    <input class="form-control" type="date" id="dob" name="dob" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="address">Address *</label>
                    <input class="form-control" id="address" name="address" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="gender">Gender *</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="">Choose gender</option>
                        <option>Male</option><option>Female</option><option>Other</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="telephone">Telephone *</label>
                    <input class="form-control" type="tel" id="telephone" name="telephone" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="email">Email *</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="image">Student Image *</label>
                    <input class="form-control" type="file" id="image" name="image" accept=".png,.jpg,.jpeg,.gif,.webp" required>
                    <div class="form-text">Allowed formats: PNG, JPG, JPEG, GIF, WEBP.</div>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <h2 class="h5 section-title">2. Parent Information</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label" for="parent_name">Parent Name *</label>
                    <input class="form-control" id="parent_name" name="parent_name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="parent_telephone">Parent Telephone *</label>
                    <input class="form-control" type="tel" id="parent_telephone" name="parent_telephone" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="relationship">Relationship *</label>
                    <select class="form-select" id="relationship" name="relationship" required>
                        <option value="">Choose relationship</option>
                        <option>Father</option><option>Mother</option><option>Guardian</option><option>Other</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <h2 class="h5 section-title">3. Academic Information</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label" for="student_id">Student ID *</label>
                    <input class="form-control" id="student_id" name="student_id" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="faculty">Faculty *</label>
                    <input class="form-control" id="faculty" name="faculty" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="department">Department *</label>
                    <input class="form-control" id="department" name="department" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="class">Class *</label>
                    <input class="form-control" id="class" name="class" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="registration_date">Registration Date *</label>
                    <input class="form-control" type="date" id="registration_date" name="registration_date" required>
                </div>
            </div>
        </section>

        <div class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
            <button type="reset" class="btn btn-outline-secondary">Clear Form</button>
            <button type="submit" class="btn btn-primary px-4">Register Student</button>
        </div>
    </form>
    <p class="text-center text-secondary small mt-4 mb-0">All fields marked with * are required.</p>
</div>
<script>
document.getElementById('registrationForm').addEventListener('submit', function (event) {
    const form = this;
    const name = document.getElementById('name');
    if (!/^[A-Za-z ]+$/.test(name.value.trim())) {
        event.preventDefault();
        name.focus();
        name.setCustomValidity('Name must contain letters and spaces only.');
        name.reportValidity();
    } else {
        name.setCustomValidity('');
    }
});
document.getElementById('name').addEventListener('input', function () {
    this.setCustomValidity('');
});
</script>
</body>
</html>
