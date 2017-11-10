<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 上午11:23
 */

namespace CV;

/**
 * Class Point
 * @package CV
 * Point对象在OpenCV中用与表示点(x,y)
 */
class Point
{
    /**
     * @var int
     */
    public $x;

    /**
     * @var int
     */
    public $y;

    /**
     * Point constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
    }

    /**
     * 用于输出Point对象信息
     */
    public function print(){

    }
}