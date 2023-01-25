<?php
session_start();

if (isset($_SESSION['couleur'])) {
    echo $_SESSION['couleur'];
}