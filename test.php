<?php
/**
 * Created by PhpStorm.
 * User: Harith
 * Date: 7/6/2018
 * Time: 11:27 PM
 */
    $day = time();
    $date = new DateTime("today");
    $newDate =  date("Y-m-d",strtotime('- 2 day'));
    echo $newDate;
?>