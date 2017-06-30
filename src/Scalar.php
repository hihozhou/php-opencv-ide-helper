<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 上午10:41
 */

namespace CV;

/**
 * Class Scalar
 * @package CV
 * Scalar是用于表示像素点对象的颜色，值存在$val中
 */
class Scalar
{
    /**
     * 用于存放对象的颜色值
     * @var array
     */
    public $val = [];

    /**
     * Scalar constructor.
     * @param int $val1
     * @param int $val2
     * @param int $val3
     * @param int $val4
     */
    public function __construct(int $val1 = 0, int $val2 = 0, int $val3 = 0, int $val4 = 0)
    {

    }

    /**
     * 输出Scalar对象信息
     */
    public function print(){

    }
}