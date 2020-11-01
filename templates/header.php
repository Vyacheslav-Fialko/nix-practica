<?php
function headerHTML()
{
    $html = '<!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>BEGINNER. ПРАКТИКА</title>
                <link rel="stylesheet" href="./css/style.css">
            </head>

            <body>
                <header>
                    <a href="/">BEGINNER</a>
                    <nav>
                        <a href="./lesson1.php">lesson 1</a>
                        <a href="./lesson2.php">lesson 2</a>
                        <a href="./lesson3.php">lesson 3</a>
                    </nav>
                </header>
                <main>';

    return $html;
}