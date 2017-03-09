<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/3/9
 * Time: 下午4:16
 */

namespace Jceee\Algorithm\Sort;

/**
 * 选择排序
 * Class SelectSort
 * @package Jceee\Algorithm\Sort
 */
class SelectSort
{
    /**
     * @param array $array
     * @param bool $isDesc
     */
    public static function sort(array $array, $isDesc = true)
    {
        if ($arrayCount = count($array) < 2) {
            return $array;
        }

        for ($i = 0; $i < $arrayCount; $i ++) {
            $left = $i;
            for ($j = $i + 1; $j < $arrayCount; $j ++) {
                if ($isDesc ? $array[$left] < $array[$j] : $array[$left] > $array[$j]) {
                    $left = $j;
                }
            }
            if ($left != $i) {
                $tmp = $array[$left];
                $array[$left] = $array[$i];
                $array[$i] = $tmp;
            }
        }
        return $array;
    }
}