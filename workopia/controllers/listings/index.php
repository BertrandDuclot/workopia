<?php

//require 'helpers.php';

function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

function loadView($name){

    $viewPath = basePath("views/{$name}.view.php");

    echo 'trying to load ' .$viewPath;

    if(file_exists($viewPath)){
        require $viewPath;
    } else {
        echo "View '{$name}' not found!";
    }  
}

loadView('index');

// http://localhost/workopia/workopia/views/listings/index.view.php

// /workopia/workopia/controllers/listings/index.php