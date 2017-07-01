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
 * @param int $dtype 返回的Mat对象的深度，默认为-1.当两个Mat具有相同的深度时候，这个参数设置为-1,既等同于$src1.depth()
 */
function addWeighted(Mat $src1, double $alpha, Mat $src2, double $beta, double $gamma, int $dtype = -1)
{

}