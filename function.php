<?php

function heading($title, $type, $align, $fontFamily, $fontSize, $color)
{
    return "<{$type} style='background: #ecf0f3; padding: 20px;
    border-radius: 0px;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;text-align:{$align};font-family:{$fontFamily};font-size:{$fontSize};color:{$color};'>{$title}</{$type}>";
}
