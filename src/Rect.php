<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 下午12:07
 */

namespace CV;

/**
 * Class Rect
 * @package CV
 * 表示区域的对象
 */
class Rect
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
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * Rect constructor.
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     */
    public function __construct(int $x, int $y, int $width, int $height)
    {

    }


    /**
     * 数据Rect对象信息
     */
    public function print(){

    }

    /**
     * 获取矩形左上角的坐标
     * @return Point
     */
    public function tl(){

    }

    /**
     * 获取矩形右下角的坐标
     * @return Point
     */
    public function br(){

    }

    /**
     * 返回矩形大小
     * @return Size
     */
    public function size(){

    }

    /**
     * 返回矩形的大小
     * @return int
     */
    public function area(){

    }
}