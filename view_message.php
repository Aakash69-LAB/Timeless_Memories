<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, message, created_at FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; background: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        th, td { padding: 15px; border: 1px solid #ddd; }
        th { background-color: #007BFF; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Contact Messages</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["message"] ?></td>
            <td><?= $row["created_at"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
