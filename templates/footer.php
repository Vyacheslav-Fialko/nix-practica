<?php
function footerHTML(string $var):string
{
    $str = '</main>
    <footer>
        <a href="'. $var .'">GitHub commit link</a>
    </footer>
    </body>

    </html>';
    return $str;
}