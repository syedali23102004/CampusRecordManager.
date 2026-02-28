<?php
include 'DB.php';

$id = $_GET['id'] ?? null;

if (!$id || !is_numeric($id)) {
    header("Location: VIEW.php?action=danger&msg=Invalid+Request");
    exit;
}

$student = getStudent($id);

if (!$student) {
    header("Location: VIEW.php?action=danger&msg=Student+Not+Found");
    exit;
}

if (isset($_POST['confirm_delete'])) {
    deleteStudent($id);
    header("Location: VIEW.php?action=danger&msg=Record+Deleted+Successfully");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete Confirmation</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        background: white;
        padding: 40px;
        border-radius: 20px;
        width: 400px;
        text-align: center;
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }

    h2 {
        color: #333;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 30px;
        font-size: 16px;
    }

    .btn-group {
        display: flex;
        gap: 15px;
    }

    .btn {
        flex: 1;
        padding: 12px;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-delete {
        background: #ff4b2b;
        color: white;
    }

    .btn-delete:hover {
        background: #d63031;
        transform: scale(1.05);
    }

    .btn-cancel {
        background: #2d3436;
        color: white;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn-cancel:hover {
        background: #000;
        transform: scale(1.05);
    }
</style>
</head>
<body>

<div class="box">
    <h2>⚠ Confirm Delete</h2>
    <p>
        Are you sure you want to delete <br>
        <strong><?php echo htmlspecialchars($student['name']); ?></strong> ?
    </p>

    <form method="POST">
        <div class="btn-group">
            <button type="submit" name="confirm_delete" class="btn btn-delete">Yes, Delete</button>
            <a href="VIEW.php" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>