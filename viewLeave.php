<!DOCTYPE html>
<html>
<head>
    <title>Accept</title>
    <link rel="stylesheet" href="include/table.css">
</head>
<body>
<div class="table-users">
    <div class="header">Applied Leaves</div>

    <table cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Leave Date</th>
            <th>Duration</th>
            <th width="230">Note</th>
            <th align="center">Action</th>
        </tr>

        <?php
        require_once 'include/pdo.inc.php';
        $stmt = $pdo->query("SELECT * FROM leaveforms");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>";
            echo ($row['id']);
            echo "</td><td>";
            echo ($row['leave_date']);
            echo "</td><td>";
            echo ($row['leave_duration']);
            echo "</td><td>";
            echo ($row['note']);
            echo "</td><td>";
            echo "<a href='nikan.php?id=".$row['id']."' class='button'>Accept</a>
<a href='nikan.php?id=".$row['id']."' class='button'>Decline</a>";
            echo "</td></tr>\n";
        }

        ?>
    </table>

</div>
</body>
</html>