<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/3/4
 * Time: 下午4:08
 */

namespace Jceee\Algorithm\Sort;

/**
 * 冒泡法
 * Class BubbleSort
 */
class BubbleSort
{
    /**
     * @param $array
     * @param bool $isDesc
     * @return mixed
     */
    public static function sort($array, $isDesc = true)
    {
        if (!is_array($array)) {
            return array();
        } else if ($count = count($array) < 2) {
            return $array;
        }
        for ($index = 0; $index < $count - 1; $index ++) {
            for ($index_2 = 0; $index_2 < $count - 1; $index_2 ++) {
                if (isset($array[$index_2]) && isset($array[$index_2 + 1])) {
                    $condition = $isDesc ? $array[$index_2 + 1] > $array[$index_2] : $array[$index_2 + 1] < $array[$index_2];
                    if ($condition) {
                        $tmp = $array[$index_2];
                        $array[$index_2] = $array[$index_2 + 1];
                        $array[$index_2 + 1] = $tmp;
                    }
                }
            }
        }
        return $array;
    }
}