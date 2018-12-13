<?php

namespace CV;


function addWeighted(Mat $src1, float $alpha, Mat $src2, float $beta, float $gamma, Mat &$dst = NULL, int $dtype = -1)
{

}


/**
 * @param int $n
 *
 * @return int
 */
function CV_8UC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_8SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_16UC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_16SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_32SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_32FC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_64FC(int $n)
{

}

/**
 *
 *
 * Mat matrix cutting,You can cut the multi-channel matrix.
 * Mat矩阵切割，可以将多通道矩阵进行切割
 *
 * @author hihozhou
 *
 * @param Mat $src  Matrix object that needs to be cut
 *                  需要切割的矩阵对象
 *
 * @return array  Returns an array of Mat objects containing each channel.
 *                返回包含各个通道的Mat对象数组
 *
 * e.g:
 *
 * $image = new Mat(10,10,CV_8UC3,new Scalar(10,11,12));
 *
 * list($b,$g,$r) = CV\split($srcImage);
 *
 *
 */
function split(Mat $src): array
{

}

/**
 * @param array $channels 合并的Mat对象数组
 * @param Mat   $dst      合成输出的对象
 *
 * @return null
 */
function merge(array $channels, Mat $dst)
{

}


/**
 * getOptimalDFTSize函数返回给定向量尺寸的傅立叶最优尺寸大小。
 * 为了提高离散傅立叶变换的运行速度，需要扩充图像，
 * 而具体扩充多少，就有这个函数来计算得到。
 *
 * @param int $vecsize 需要计算最优的原始大小
 *
 * @return int 返回最优大小
 */
function getOptimalDFTSize(int $vecsize)
{

}

/**
 * copyMakeBorder函数
 * 该函数用于将图像扩充图像边界
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param int         $top
 * @param int         $bottom
 * @param int         $left
 * @param int         $right
 * @param int         $borderType
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
 * @return int
 */
function getTickCount()
{

}


/**
 * @return double
 */
function getTickFrequency()
{

}






