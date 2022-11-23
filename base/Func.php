<?php

namespace func\base;

interface Func
{
    public static function dd($var, $stop = true, $as_array = false);

    public static function ww($var = '');

    public static function logs($filename, $data, $format = 'human-readable', $flags = FILE_APPEND, $by = 'month');

    public static function wwLogs($filename, $data, $format = 'human-readable', $flags = FILE_APPEND, $by = 'month');

    public static function alert($var);

    public static function Rds($index = 0, $port = 6379, $host = 'localhost', $pass = null);

    public static function get($url, $get_data = [], $header = []);

    public static function joinParams($path, $params);

    public static function post($url, $post_data, $header = []);

    public static function delete($url, $post_data = []);

    public static function put($url, $post_data = []);

    public static function formatReturnData2Json($data = false, $msg = '成功', $status = 1, $code = 200);

    public static function success($data = false, $msg = '成功', $status = 1, $code = 200);

    public static function fail($data = false, $msg = '失败', $status = 0, $code = 200);

    public static function exitSuccess($data, $msg = '成功');

    public static function exitFail($data = '', $msg = '失败');

    public static function page($count, $page, $size);

    public static function ED($string = '', $operation = 'E', $key = 'www.srun.com');

    public static function exportAsCsv($data, $filename = '');

    public static function getRealClientIp($type = 0, $adv = true);

    public static function generateUniqueId($prefix = 'mg_', $uid = '', $suffix = '');

    public static function base64EncodeImage($image_file);

    public static function latLngToAddress($lat, $lng);

    public static function formatDistance($size, $chinese = false);

    public static function isEmail($input);

    public static function isIp($input);

    public static function isIpv4($input);

    public static function isIpv6($input);

    public static function isMac($input);

    public static function isDomain($input);

    public static function isUrl($input);

    public static function isMobilePhone($input);

    public static function dataSizeFormat($size = 0, $dec = 2);

    public static function magicTime($what);

    public static function jsonDecodePlus($str, $mode = false);

    public static function tree($items);

    public static function replaceWith($str, $position = 'middle', $replace = '*');

    public static function dt($timestamp = false, $delimiter = '-', $short = false);

    public static function rateLimit($seconds = 10, $times = 1);
}