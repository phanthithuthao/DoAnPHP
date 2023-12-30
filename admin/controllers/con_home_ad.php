<?php
$action = Utilities::get('action', 'index');

if ($action == 'index') {
    include './views-ad/home/index.php';
}
