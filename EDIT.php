<?php
// Initialize error message variable to avoid undefined variable notices
$error_msg = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student - CRUD System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
            color: #fff;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 6px;
            display: block;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .input-group input:focus,
        .input-group select:focus {
            box-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: 600;
        }

        .btn-update {
            background: #00c9a7;
            color: white;
        }

        .btn-update:hover {
            background: #00a389;
            transform: scale(1.05);
        }

        .btn-back {
            background: #ff4b5c;
            color: white;
            text-decoration: none;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-back:hover {
            background: #d63045;
            transform: scale(1.05);
        }

        .error-box {
            background: rgba(255, 0, 0, 0.2);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Update Student Record</h2>

    <?php if ($error_msg): ?>
        <div class="error-box">
            <?php echo htmlspecialchars($error_msg); ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="input-group">
            <label>Full Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($data['name'] ?? ''); ?>" required>
        </div>

        <div class="input-group">
            <label>Registration No</label>
            <input type="text" name="registration_no" value="<?php echo htmlspecialchars($data['registration_no'] ?? ''); ?>" required>
        </div>

        <div class="input-group">
            <label>Email Address</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($data['email'] ?? ''); ?>" required>
        </div>

        <div class="input-group">
            <label>Select Course</label>
            <select name="course" required>
                <option value="">Choose Course</option>
                <option value="Computer Science" <?php echo ($data['course'] ?? '') === 'Computer Science' ? 'selected' : ''; ?>>Computer Science</option>
                <option value="Information Technology" <?php echo ($data['course'] ?? '') === 'Information Technology' ? 'selected' : ''; ?>>Information Technology</option>
                <option value="Software Engineering" <?php echo ($data['course'] ?? '') === 'Software Engineering' ? 'selected' : ''; ?>>Software Engineering</option>
                <option value="Data Science" <?php echo ($data['course'] ?? '') === 'Data Science' ? 'selected' : ''; ?>>Data Science</option>
                <option value="Artificial Intelligence" <?php echo ($data['course'] ?? '') === 'Artificial Intelligence' ? 'selected' : ''; ?>>Artificial Intelligence</option>
                <option value="Web Development" <?php echo ($data['course'] ?? '') === 'Web Development' ? 'selected' : ''; ?>>Web Development</option>
            </select>
        </div>

        <div class="btn-group">
            <button type="submit" name="update" class="btn btn-update">Update</button>
            <a href="VIEW.php" class="btn btn-back">Back</a>
        </div>
    </form>
</div>

</body>
</html>