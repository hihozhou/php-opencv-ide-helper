<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 下午12:07
 */

namespace CV;

/**
 * Class RotatedRect
 * @package CV
 * 表示旋转矩阵的对象
 */
class RotatedRect
{


    /**
     * 矩阵中心
     * @var Point
     */
    public $center;

    /**
     * 矩阵大小
     * @var Size
     */
    public $size;

    /**
     * 矩阵角度,When the angle is 0, 90, 180, 270 etc., the rectangle becomes an up-right rectangle.
     * @var double
     */
    public $angle;

    public function __construct(Point $center = null, Size $size = null, double $angle = 0.0)
    {

    }


    /**
     * 返回当前矩形的4个点的数组
     * @return array
     */
    public function points()
    {

    }


}