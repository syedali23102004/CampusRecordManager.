<?php
include_once __DIR__ . '/DB.php';
include_once __DIR__ . '/layout.php';

$error_msg = '';

if (isset($_POST['save'])) {
    $name = trim($_POST['name']);
    $registration_no = trim($_POST['registration_no']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);

    if (empty($name) || empty($registration_no) || empty($email) || empty($course)) {
        $error_msg = "All fields are required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Invalid email format!";
    } else {
        addStudent($name, $registration_no, $email, $course);
        header("Location: VIEW.php?action=success&msg=Record+Added+Successfully");
        exit;
    }
}
?>

<div class="card" style="max-width:600px; margin:auto;">
    <h2 style="margin-bottom:25px;">➕ Add New Student</h2>

    <?php if ($error_msg): ?>
        <div style="background:#ffebee; color:#c62828; padding:12px; border-radius:8px; margin-bottom:20px;">
            <?php echo htmlspecialchars($error_msg); ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <div style="margin-bottom:15px;">
            <label>Full Name</label>
            <input type="text" name="name" required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Registration Number</label>
            <input type="text" name="registration_no" required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Email Address</label>
            <input type="email" name="email" required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
        </div>

        <div style="margin-bottom:20px;">
            <label>Select Course</label>
            <select name="course" required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
                <option value="">Choose Course</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Data Science">Data Science</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Web Development">Web Development</option>
            </select>
        </div>

        <button type="submit" name="save" class="btn btn-add" style="width:100%;">
            💾 Save Student
        </button>

    </form>
</div>

</div>
</body>
</html>