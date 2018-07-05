<!DOCTYPE html>
<html>
<head>
    <title>Requests for child removal from transport</title>
    <link rel="stylesheet" href="include/table.css">
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
<div class="table-users">
    <div class="header">Requests</div>

    <table cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Method</th>
            <th align="center">Action</th>
            <th>Remove State</th>
        </tr>

        <?php

        require_once 'classes/childRemoveRequest.php';
        $request = new ChildRemoveRequest();
        $requests = $request->getRequests();
        foreach ($requests as $row){
            echo "<tr><td>";
            echo ($row['child_id']);
            echo "</td><td>";
            echo ($row['remove_date']);
            echo "</td><td>";
            echo ($row['remove_time']);
            echo "</td><td>";
            echo ($row['method']);
            echo "</td><td>";
            echo "<a href='acceptChildRemoveRequest.php?state=accept&id=".$row['child_id']."' class='button'>Accept</a>";
            echo "</td><td style='text-align: center'>";
            if($row['state']==1){
                echo 'Accepted';
            }
            else{
                echo 'Not Viewed';
            }
            echo "</td></tr>\n";
        }
        ?>
    </table>

</div>
</body>
</html>