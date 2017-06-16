<?php
$data = json_decode(file_get_contents('php://input'), true);

    getcwd();
    shell_exec('git stash');
    shell_exec('git pull');
    shell_exec('git stash pop stash@{0}');
}
