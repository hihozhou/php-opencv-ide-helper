<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 上午11:31
 */

namespace CV;

/**
 * Class Size
 * @package CV
 * Size类是OpenCV中用来表示大小的
 */
class Size
{
    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * Size constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
    }


    /**
     * 输出Size对象信息
     */
    public function print(){

    }


}