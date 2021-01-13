<?php
require './vendor/autoload.php';

$openapi = \OpenApi\scan(__DIR__.'/some_project_src');

file_put_contents(__DIR__.'/swagger_ui_dist/api.json', $openapi->toJson());