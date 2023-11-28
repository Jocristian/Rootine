<?php
    session_start();

    // unset($_SESSION['username']);
    session_destroy();

    return redirect()->to('/index')->send();
?>