<?php
function md5_sha($str) {
	return md5(sha1($str));
}

if ( ! function_exists('ordersn') )
{
    function ordersn()
    {
        return date('YmdHis') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7,  13), 1))), 0, 8) . mt_rand(10, 99);
    }
}

