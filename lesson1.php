<?php
include './templates/header.php';
include './templates/footer.php';
echo headerHTML();
echo '<h1>Lesson 1</h1><div class="table">';

for ($i=1; $i <= 10; $i++) {
    $content = '';
    $content .='<div>';
    for ($j=1; $j <=10 ; $j++) { 
        $content .= '<p>'.$i.' * '.$j.' = '.$i*$j.'</p>';
    }
    $content .= '</div>';
    echo $content;
}

echo '</div>';
echo footerHTML('link');