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
     */
    public function __construct(int $rows, int $cols, Scalar $color = NULL, int $type = 0)
    {

    }


    /**
     * 返回一个制定行数和列数的空矩阵对象
     * @param int $rows
     * @param int $cols
     * @param int $type
     */
    public static function zeros(int $rows, int $cols, int $type = 0)
    {

    }

    /**
     * 输出Mat对象的矩阵数据信息
     * @param int $type
     */
    public function print(int $type = 2)
    {

    }

    /*
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

}