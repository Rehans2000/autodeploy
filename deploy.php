<?php
if (!isset($_SERVER['HTTP_X_EVENT_KEY'])) {
    header('HTTP/1.0 403 Forbidden');
    echo '<h1>403 Forbidden</h1>';
    echo 'You do not have access to view the contents of this web page';
    die();
}

$data = json_decode(file_get_contents('php://input'), true);

    getcwd();
    shell_exec('git stash');
    shell_exec('git pull');
    shell_exec('git stash pop stash@{0}');
}
