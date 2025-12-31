<?php include 'db.php'; ?>

<form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="course" placeholder="Course" required><br>
    <button type="submit" name="save">Add Student</button>
</form>

<?php
if(isset($_POST['save'])){
    $sql = "INSERT INTO students (name, email, course) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_POST['name'], $_POST['email'], $_POST['course']]);

    header("Location: index.php"); // redirect
    exit();
}
?>
