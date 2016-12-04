<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.12.16
 * Time: 21:45
 */

$this->title = 'Test Application';

/*foreach ($data as $test) {
        echo $test;

}*/

foreach ($data as $test) {
    echo '<br>';
    foreach ($test as $test2) {
        echo $test2.' ';
    }
}

