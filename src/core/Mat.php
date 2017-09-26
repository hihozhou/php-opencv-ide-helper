<?php

namespace CV;

/**
 * Class Mat
 * @package CV
 * Mat是PHP-OpenCV中储存对象矩阵数据的对象
 */
class Mat
{

    /**
     * @var int $rows
     */
    public $rows;
    /**
     * @var int $cols
     */
    public $cols;
    /**
     * @var int $type
     */
    private $type;

    /**
     * Mat constructor.
     * @param int $rows
     * @param int $cols
     * @param Scalar $color
     * @return Mat
     */
    public function __construct(int $rows, int $cols, int $type, Scalar $color = NULL)
    {
        return new Mat();
    }

    /**
     * @return Size
     */
    public function size()
    {

    }

    /**
     * 返回一个制定行数和列数的空矩阵对象
     * @param int $rows
     * @param int $cols
     * @param int $type
     * return Mat
     */
    public static function zeros(int $rows, int $cols, int $type = 0)
    {

    }

    /**
     * @param Size $size
     * @param int $type
     * @return Mat
     */
    public static function zerosBySize(Size $size, int $type = 0)
    {

    }

    /**
     * 输出Mat对象的矩阵数据信息
     * @param int $type
     * @see Formatter::FMT_DEFAULT
     */
    public function print(int $type = Formatter::FMT_DEFAULT)
    {

    }

    /**
     * 返回Mat对象的type
     * @return int
     */
    public function type()
    {

    }

    /**
     * 获取Mat对象深度
     * @return int
     */
    public function depth()
    {

    }

    /**
     * 获取Mat对象通道数
     * @return int
     */
    public function channels()
    {

    }

    /**
     * 判断Mat是否是一个连续的矩阵数据
     * @return bool
     */
    public function isContinuous()
    {

    }

    /**
     * 获取Mat矩阵第y行数据，并保存在新的Mat对象返回
     * @param int $y
     * @return Mat
     */
    public function row(int $y)
    {

    }

    /**
     * 获取Mat矩阵第x列数据，并保存在新的Mat对象返回
     * @param int $x
     * @return Mat
     */
    public function col(int $x)
    {

    }

    /**
     * 克隆当前调用clone方法的Mat对象，并且返回新的Mat对象
     * @return Mat
     */
    public function clone()
    {

    }

    /**
     * 获取指定区域roi矩阵，并以Mat对象返回
     * @param Rect $rect
     * @return Mat
     * @throws Exception 当获取roi区域超过源Mat矩阵范围时，抛出异常
     */
    public function getImageROI(Rect $rect)
    {

    }

    /**
     * 把当前Mat矩阵合并到$mat中
     * @param Mat $mat 合并到的矩阵
     * @param Mat|NULL $mask 掩码，必须为灰度图
     */
    public function copyTo(Mat $mat, Mat $mask = NULL)
    {

    }


    /**
     * @param int $row
     * @param int $col
     * @param int $channel
     * @param int|NULL $value
     * @return int|NULL
     */
    public function at(int $row, int $col, int $channel, int $value = NULL)
    {

    }


    /**
     * 设置矩阵统一某种颜色
     * todo mask
     * @param Scalar $value
     */
    public function setTo(Scalar $value)
    {

    }


    /**
     * @return bool
     */
    public function empty()
    {

    }


}