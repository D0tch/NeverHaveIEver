<?php

    require_once('neverhaveiever.php');

    echo '<h3>Never have I ever</h3>';

    echo $questions_array[rand( 0 , count($questions_array)-1)];
