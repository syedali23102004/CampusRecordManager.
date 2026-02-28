<?php
include 'DB.php';
include 'layout.php';

$students = getAllStudents();
$action = $_GET['action'] ?? '';
$msg = $_GET['msg'] ?? '';
$msg = str_replace('+', ' ', urldecode($msg));
?>

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:10px;">
        <h2>👥 Student Records</h2>

        <div>
            <a href="INDEX.php">
                <button class="btn btn-add">➕ Add Student</button>
            </a>
        </div>
    </div>

    <p style="margin-bottom:15px; color:#555;">
        📊 Total Students: <strong><?php echo count($students); ?></strong>
    </p>

    <?php if ($action === 'success' && $msg): ?>
        <div style="background:#e8f5e9; color:#2e7d32; padding:12px; border-radius:8px; margin-bottom:15px;">
            ✅ <?php echo htmlspecialchars($msg); ?>
        </div>
    <?php endif; ?>

    <?php if ($action === 'danger' && $msg): ?>
        <div style="background:#ffebee; color:#c62828; padding:12px; border-radius:8px; margin-bottom:15px;">
            ❌ <?php echo htmlspecialchars($msg); ?>
        </div>
    <?php endif; ?>

    <?php if (empty($students)): ?>
        <div style="padding:40px; text-align:center; color:#777;">
            <h3>No Records Found</h3>
            <p style="margin-top:10px;">Click "Add Student" to create your first entry.</p>
        </div>
    <?php else: ?>

        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Reg No</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($students as $index => $student): ?>
                        <tr>
                            <td><strong><?php echo $index + 1; ?></strong></td>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['registration_no']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['course']); ?></td>
                            <td>
                                <a href="EDIT.php?id=<?php echo $student['id']; ?>">
                                    <button class="btn btn-edit">✏ Edit</button>
                                </a>

                                <a href="DELETE.php?id=<?php echo $student['id']; ?>">
                                    <button class="btn btn-delete">🗑 Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php endif; ?>

</div>

</div>
</body>
</html>