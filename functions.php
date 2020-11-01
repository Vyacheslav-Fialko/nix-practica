<?php
function add_color($num):string
{
    switch ($num) {
        case '0':
            return '<span style="color:red">' . $num . '</span>';
            break;
        case '1':
            return '<span style="color:green">' . $num . '</span>';
            break;
        case '2':
            return '<span style="color:blue">' . $num . '</span>';
            break;
        case '3':
            return '<span style="color:black">' . $num . '</span>';
            break;
        case '4':
            return '<span style="color:orange">' . $num . '</span>';
            break;
        case '5':
            return '<span style="color:darkviolet">' . $num . '</span>';
            break;
        case '6':
            return '<span style="color:indigo">' . $num . '</span>';
            break;
        case '7':
            return '<span style="color:white">' . $num . '</span>';
            break;
        case '8':
            return '<span style="color:brown">' . $num . '</span>';
            break;
        case '9':
            return '<span style="color:darkslateblue">' . $num . '</span>';
            break;
        default:
            return '<span style="color:transparent">' . $num . '</span>';
            break;
    }
}

function color_big_int(int $var):string
{
    $str = (string) $var;
    $arr = str_split($str);
    $res = '';
    foreach($arr as $key => $val) {
        $res .= add_color($val);
    }
    return $res;
}

function num_color(int $var):string
{
    if($var < 10){
        return add_color($var);
    } else {
        return color_big_int($var);
    }
}
