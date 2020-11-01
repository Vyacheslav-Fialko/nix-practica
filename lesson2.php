<?php
include './functions.php';
include './templates/header.php';
include './templates/footer.php';

echo headerHTML();
echo '<h1>Lesson 2</h1><div class="table">';

for ($i = 1; $i <= 10; $i++) {
    $content = '';
    $content .= '<div>';
    for ($j = 1; $j <= 10; $j++) {
        $content .= '<p>' . num_color($i) . ' * ' . num_color($j) . ' = ' . num_color($i * $j) . '</p>';
    }
    $content .= '</div>';
    echo $content;
}

echo '</div>';
echo footerHTML('https://github.com/Vyacheslav-Fialko/nix-pratica/commit/27e14a18fd402c59beb6601764b73402187bff9e');