<?php

namespace CV;

/**
 * @author  hihozhou
 * Class Mat
 * @package CV
 *
 * Mat是储存图像矩阵数据的对象
 *
 * Mat is an object that stores image matrix data.
 */
class Mat
{

    /**
     * Number of rows of image matrix pixels
     *
     * 图像矩阵像素的行数
     *
     * @var int $rows
     */
    public $rows;

    /**
     * Number of columns of image matrix pixels
     *
     * 图像矩阵像素的列数
     *
     * @var int $cols
     */
    public $cols;

    /**
     * Represents the type of elements in the matrix and the number of channels in the matrix.
     * It is a series of predefined constants whose naming convention is CV_(number of bits) + (data type) + (number of channels). Such as: CV_8UC1, CV_8UC3, etc.
     *
     * 表示了矩阵中元素的类型以及矩阵的通道个数，它是一系列的预定义的常量，
     * 其命名规则为CV_(位数）+（数据类型）+（通道数）。如：CV_8UC1、CV_8UC3等
     *
     * @var int $type
     *
     */
    private $type;


    /**
     * Mat constructor.
     * Mat构造方法
     *
     * @param int    $rows  Number of rows of image matrix pixels
     *                      图像矩阵像素的行数
     *
     * @param int    $cols  Number of columns of image matrix pixels
     *                      图像矩阵像素的列数
     *
     * @param Scalar $color The color value of each pixel, Scalar object
     *                      每个像素点的颜色值,Scalar对象
     *
     *
     * @return Mat 返回创建的Mat对象
     */
    public function __construct(int $rows, int $cols, int $type, Scalar $color = NULL)
    {

    }


    /**
     * @return Size
     */
    public function size()
    {

    }

    /**
     * 返回一个制定行数和列数的空矩阵对象
     *
     * @param int $rows
     * @param int $cols
     * @param int $type
     *
     * @return Mat
     */
    public static function zeros(int $rows, int $cols, int $type = 0)
    {

    }

    /**
     * @param Size $size
     * @param int  $type
     *
     * @return Mat
     */
    public static function zerosBySize(Size $size, int $type = 0)
    {

    }

    /**
     * 输出Mat对象的矩阵数据信息
     *
     * @param int $type
     *
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
     *
     * @param int $y
     *
     * @return Mat
     */
    public function row(int $y)
    {

    }

    /**
     * 获取Mat矩阵第x列数据，并保存在新的Mat对象返回
     *
     * @param int $x
     *
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
     *
     * @param Rect $rect
     *
     * @return Mat
     * @throws Exception 当获取roi区域超过源Mat矩阵范围时，抛出异常
     */
    public function getImageROI(Rect $rect)
    {

    }

    /**
     * 把当前Mat矩阵合并到$mat中
     *
     * @param Mat      $mat  合并到的目标矩阵，如果$mat
     * @param Mat|NULL $mask 掩码，必须为灰度图
     */
    public function copyTo(Mat $mat, Mat $mask = NULL)
    {

    }


    /**
     * Get the value of the specific channel of the pixel specified by the Mat object
     * 获取Mat对象指定位置像素点的特定通道的值
     *
     * @param int      $row     The row of pixels
     *                          像素的所在行
     *
     * @param int      $col     The column of the pixel
     *                          像素的所在列
     *
     * @param int      $channel The first few channels of the pixel's point, starting at 0
     *                          像素点的第几个通道，从0开始
     * @param int|NULL $value
     *
     * @return int|NULL
     */
    public function at(int $row, int $col, int $channel, int $value = NULL)
    {

    }


    /**
     * 设置矩阵统一某种颜色
     * todo mask
     *
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


    /**
     * @param Mat $value1
     * @param Mat $value2
     *
     * @return Mat
     */
    public static function add(Mat $value1, Mat $value2)
    {

    }

    /**
     * @param Mat $value1
     * @param Mat $value2
     *
     * @return Mat
     */
    public static function subtract(Mat $value1, Mat $value2)
    {

    }


}