<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.12.16
 * Time: 21:45
 */

$this->title = 'Test Application';

echo '<table border="black 2px">';
echo '<a href="./create">Create</a>';
foreach ($data as $test) {

    echo '<tr>';
    foreach ($test as $test2) {
        echo '<td>'.$test2.'</td>';
    }
    echo '<td>'."<a href=\"./view?id=$test->id\">View</a>".'</td>';
    echo '<td>'."<a href=\"./edit?id=$test->id\">Edit</a>".'</td>';
    echo '<td>'."<a href=\"./delete?id=$test->id\">Delete</a>".'</td>';
    echo '</tr>';
}
echo '</table>';
?>