<?php

namespace luguohuakai\func\base;

use Redis;

interface Func
{
    public static function dd($var, bool $stop = true, bool $as_array = false);

    public static function ww($var = '');

    public static function logs(string $filename, $data, string $format = 'human-readable', int $flags = FILE_APPEND, string $by = 'month');

    public static function wwLogs($filename, $data, string $format = 'human-readable', int $flags = FILE_APPEND, string $by = 'month');

    public static function alert($var);

    public static function Rds(int $index = 0, int $port = 6379, string $host = 'localhost', string $pass = null): Redis;

    public static function get($url, array $get_data = [], array $header = []);

    public static function joinParams($path, $params);

    public static function post($url, $post_data, array $header = []);

    public static function delete($url, array $data = []);

    public static function put($url, array $data = []);

    public static function formatReturnData2Json($data = false, string $msg = '成功', int $status = 1, int $code = 200);

    public static function success($data = false, string $msg = '成功', int $status = 1, int $code = 200): string;

    public static function fail($data = false, string $msg = '失败', int $status = 0, int $code = 200): string;

    public static function exitSuccess($data = false, string $msg = '成功', int $status = 1, int $code = 200);

    public static function exitFail($data = false, string $msg = '失败', int $status = 0, int $code = 200);

    public static function page(int $count, int $page, int $size);

    public static function ED(string $string = '', string $operation = 'E', string $key = 'www.srun.com');

    public static function exportAsCsv($data, string $filename = '');

    public static function getRealClientIp(int $type = 0, bool $adv = true);

    public static function generateUniqueId(string $prefix = 'mg_', string $uid = '', string $suffix = ''): string;

    public static function base64EncodeImage($image_file): string;

    public static function latLngToAddress($lat, $lng): string;

    public static function formatDistance($size, bool $chinese = false): string;

    public static function isEmail($input): bool;

    public static function isIp($input): bool;

    public static function isIpv4($input): bool;

    public static function isIpv6($input): bool;

    public static function isMac($input): bool;

    public static function isDomain($input): bool;

    public static function isUrl($input): bool;

    public static function isMobilePhone($input): bool;

    public static function dataSizeFormat(int $size = 0, int $dec = 2);

    public static function magicTime(string $what);

    public static function jsonDecodePlus($str, bool $mode = false);

    public static function tree(array $items);

    public static function replaceWith(string $str, string $position = 'middle', string $replace = '*'): string;

    public static function dt(bool $timestamp = false, string $delimiter = '-', bool $short = false);

    public static function rateLimit(int $seconds = 10, int $times = 1);
}