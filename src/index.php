<style>
    body {
        font-size: 60px;
    }
</style>

<?php
require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo 'Hello World!!<br/>';
echo 'Hostname: ' . gethostname() .'<br/>';
echo 'Env var: ' . $_ENV['APP_NAME'];