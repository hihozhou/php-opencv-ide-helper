<?php

namespace CV;

/**
 * 读取图片
 * @param string $path 读取的路径
 * @param int $flags
 * @return Mat
 */
function imread(string $path, int $flags = IMREAD_COLOR)
{

}

/**
 * GUI展示图片
 * @param string $windowName 窗口名称
 * @param Mat $mat 需要展示的Mat矩阵
 */
function imshow(string $windowName, Mat $mat)
{

}

/**
 * 等待输入建输出后继续执行，
 * 如果$sec大于0的等待多少秒，如果为0则一直等待
 * @param int $sec 单位秒
 */
function waitKey(int $sec)
{

}


/**
 * 计算矩阵数据加权，用于合成图片
 * @param Mat $src1 第一张合成图片的Mat对象
 * @param double $alpha 第一张图片的权重
 * @param Mat $src2 第二张合成图片的Mat对象，这里注意要与一个Mat对象拥有相同的尺寸和通道数
 * @param double $beta 第二张图片的权重，$alpha + $beta = 1
 * @param double $gamma 一个加到权重总和上的标量值。其含义通过接下来的里出的式子自然会理解
 * @param Mat $dst 输出的图像矩阵
 * @param int $dtype 返回的Mat对象的深度，默认为-1.当两个Mat具有相同的深度时候，这个参数设置为-1,既等同于$src1.depth()
 * @return null
 */
function addWeighted(Mat $src1, double $alpha, Mat $src2, double $beta, double $gamma, Mat &$dst = NULL, int $dtype = -1)
{

}


/**
 * @param int $n
 * @return int
 */
function CV_8UC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_8SC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_16UC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_16SC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_32SC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_32FC(int $n)
{

}

/**
 * @param int $n
 * @return int
 */
function CV_64FC(int $n)
{

}

/**
 * @param Mat $src
 * @return array
 */
function split(Mat $src)
{

}

/**
 * @param array $channels 合并的Mat对象数组
 * @param Mat $dst 合成输出的对象
 * @return null
 */
function merge(array $channels, Mat $dst)
{

}

function createTrackbar(string $trackbarname, string $winname, int $value, int $count, callable $onChange)
{

}


/**
 * getOptimalDFTSize函数返回给定向量尺寸的傅立叶最优尺寸大小。
 * 为了提高离散傅立叶变换的运行速度，需要扩充图像，
 * 而具体扩充多少，就有这个函数来计算得到。
 * @param int $vecsize 需要计算最优的原始大小
 * @return int 返回最优大小
 */
function getOptimalDFTSize(int $vecsize)
{

}

/**
 * copyMakeBorder函数
 * 该函数用于将图像扩充图像边界
 * @param Mat $src
 * @param Mat $dst
 * @param int $top
 * @param int $bottom
 * @param int $left
 * @param int $right
 * @param int $borderType
 * @param Scalar|NULL $value
 */
function copyMakeBorder(Mat $src, Mat $dst, int $top, int $bottom, int $left, int $right, int $borderType, Scalar $value = NULL)
{

}

function dft(Mat $src, Mat $dst, int $flags = 0, int $nonzeroRows = 0)
{

}


/**
 * @param Mat $x
 * @param Mat $y
 * @param Mat $dst
 */
function magnitude(Mat $x, Mat $y, Mat $dst)
{

}

/**
 * @param Mat|Scalar $src1
 * @param Mat|Scalar $src2
 * @param Mat|Scalar $dst
 */
function add($src1, $src2, $dst)
{

}

/**
 * @param Mat $src
 * @param Mat $dst
 * @param int $alpha
 * @param int $beta
 * @param int $norm_type
 * @param int $dtype
 */
function normalize(Mat $src, Mat $dst, int $alpha = 1, int $beta = 0, int $norm_type, $dtype = -1)
{

}

/**
 * 获取滑动条的值
 * @param String $trackbarname 轨迹条的名称
 * @param String $winname 轨迹条的父窗口名称
 */
function getTrackBarPos(String $trackbarname, String $winname)
{

}

/**
 * 表查找
 * @param Mat $src 原图像矩阵
 * @param Mat $lut 表查找数据
 * @param Mat $dst 输出矩阵
 */
function LUT(Mat $src, Mat $lut, Mat $dst)
{
}

/**
 * @return int
 */
function getTickCount(){

}


/**
 * @return double
 */
function getTickFrequency(){

}