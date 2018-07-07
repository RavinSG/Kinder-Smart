<?php

require_once("../include/connection.inc.php");
$query = "SELECT  * FROM (
        SELECT  DATE_ADD('2018-01-01', 
            INTERVAL n4.num*1000+n3.num*100+n2.num*10+n1.num DAY ) AS DATE 
          FROM  (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
         ) AS n1,
         (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n2,
        (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n3,
        (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n4
    ) AS a
WHERE DATE >= '2018-01-01' AND DATE < '2018-12-31'
  AND WEEKDAY(DATE) = 0
ORDER BY DATE";

$result = mysqli_query($connection,$query);
$i=0;
$mondays = array();
while($array = mysqli_fetch_array($result)){
    array_push($mondays,$array[0]);
}
$query = "SELECT  *
   FROM (
        SELECT  DATE_ADD('2018-01-01', 
            INTERVAL n4.num*1000+n3.num*100+n2.num*10+n1.num DAY ) AS DATE 
          FROM  (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
         ) AS n1,
         (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n2,
        (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n3,
        (
              SELECT 0 AS num
              UNION ALL SELECT 1
              UNION ALL SELECT 2
              UNION ALL SELECT 3
              UNION ALL SELECT 4
              UNION ALL SELECT 5
              UNION ALL SELECT 6
              UNION ALL SELECT 7
              UNION ALL SELECT 8
              UNION ALL SELECT 9
        ) AS n4
    ) AS a
WHERE DATE >= '2018-01-01' AND DATE < '2018-12-31'
  AND WEEKDAY(DATE) = 4
ORDER BY DATE";

$result = mysqli_query($connection,$query);
$fridays = array();
while($array = mysqli_fetch_array($result)){
    array_push($fridays,$array[0]);
}

$i=0;
while($i<sizeof($fridays)){
    $query = "INSERT INTO lunch (str_date,end_date) VALUES ('{$mondays[$i]}','{$fridays[$i]}')";
    $result = mysqli_query($connection,$query);
    $i++;
}