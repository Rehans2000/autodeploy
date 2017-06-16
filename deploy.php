<?php
echo "there";
shell_exec('git stash');
shell_exec('git pull');
shell_exec('git stash pop stash@{0}');
