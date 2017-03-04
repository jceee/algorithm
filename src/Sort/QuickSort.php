<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/3/4
 * Time: 下午3:56
 */

namespace Jceee\Algorithm\Sort;

/**
 * 快排
 * Class QuickSort
 */
class QuickSort
{
    /**
     * @param $array
     * @param bool $isDesc
     * @return array
     */
    public static function sort($array, $isDesc = true)
    {
        if(!is_array($array)) {
            return array();
        } else if (count($array) <= 1) {
            return $array;
        }
        $mid = $array[0];
        $leftArray = array();
        $rightArray = array();

        foreach($array as $v) {
            if ($isDesc ? $v > $mid : $v < $mid) {
                $leftArray[] = $v;
            } else {
                $rightArray[] = $v;
            }
        }

        $leftArray = self::sort($leftArray);
        $leftArray[] = $mid;
        $rightArray = self::sort($rightArray);
        return array_merge($leftArray, $rightArray);
    }
}