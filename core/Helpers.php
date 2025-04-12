<?php

function checkAuth()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?c=User&m=loginForm');
        exit;
    }
}

