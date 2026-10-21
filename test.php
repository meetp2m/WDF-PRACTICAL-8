
<?php
require "db.php";

$sql = "SELECT s.name, s.email, e.event_name
        FROM registrations r
        JOIN students s ON r.student_id = s.student_id
        JOIN events e ON r.event_id = e.event_id
        WHERE s.student_id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([1]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudentHub</title>
</head>
<body>

<h2>StudentHub Database Connected Successfully!</h2>

<h3>Student Registrations</h3>

<table border="1" cellpadding="8">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Event</th>
</tr>

<?php foreach ($results as $row) { ?>
<tr>
    <td><?= htmlspecialchars($row["name"]) ?></td>
    <td><?= htmlspecialchars($row["email"]) ?></td>
    <td><?= htmlspecialchars($row["event_name"]) ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>


̥