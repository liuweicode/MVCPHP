<?php

//输出js提示并且返回
function echo_js_tips_back($str,$muns=1){
    echo "<script>alert('".$str."');window.history.go(-".$muns.")</script>";
    exit;
}
//输出js提示并且跳转
function echo_js_tips_jump($str,$url){
    echo "<script>alert('".$str."');window.location.href='".$url."'</script>";
    exit;
}

function debug_print_arr($arr){
    echo "<pre>";print_r($arr);echo "<pre>";
}
