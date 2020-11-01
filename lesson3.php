<?php

include './templates/header.php';
include './templates/footer.php';
echo headerHTML();
echo '<h1>Lesson 3</h1>';
if ($_GET['text'] ?? null) {
    echo '<h2 class="reverse">' . strrev($_GET['text']) . '</h2>';
    echo '<a href="./lesson3.php" class="back">Back</a>';
} else {
    echo    '<form method="get">
                <input type="text" name="text">
                <button type="submit">Submit</button>
            </form>';
}

echo footerHTML('https://github.com/Vyacheslav-Fialko/nix-pratica/commit/b1c0716d2edb8cdcc36abe62cb4ebfb340bc2bd9');