<?php
function underscore_to_camelcase($string, $upper=true)
{
    if ($upper) {
        // underscored to upper-camelcase 
        // e.g. "this_method_name" -> "ThisMethodName" 
        return preg_replace('/(?:^|_)(.?)/e',"strtoupper('$1')",$string);
    } else {
        // underscored to lower-camelcase 
        // e.g. "this_method_name" -> "thisMethodName" 
        return preg_replace('/_(.?)/e',"strtoupper('$1')",$string);
    }
}

function camelcase_to_underscore($string)
{
    // camelcase (lower or upper) to underscored 
    // e.g. "thisMethodName" -> "this_method_name" 
    // e.g. "ThisMethodName" -> "this_method_name" 
    return strtolower(preg_replace('/([^A-Z])([A-Z])/', "$1_$2", $string));
}