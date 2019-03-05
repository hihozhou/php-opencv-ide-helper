<?php

namespace CV;

/**
 * 开闭运算、顶帽、黑帽
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param int         $op
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function morphologyEx(Mat $src, Mat $dst, int $op, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

/**
 * 漫水填充
 *
 * @param Mat         $image
 * @param Point       $seedPoint
 * @param Scalar      $newVal
 * @param Mat|null    $mat
 * @param Rect|null   $rect
 * @param Scalar|null $loDiff
 * @param Scalar|null $upDiff
 * @param int         $flags
 */
function floodFill(Mat $image, Point $seedPoint, Scalar $newVal, Mat $mat = null, Rect $rect = null, Scalar $loDiff = null, Scalar $upDiff = null, int $flags = 4)
{

}

/**
 * @param Mat $src
 * @param int $code
 * @param int $dstCn
 *
 * @return Mat $dst
 */
function cvtColor(Mat $src, int $code, int $dstCn = 0)
{

}

/**
 * @param Mat    $mat
 * @param Mat    $dst
 * @param double $thresh
 * @param double $maxval
 * @param int    $type
 */
function threshold(Mat $mat, Mat $dst, double $thresh, double $maxval, int $type)
{

}

/**
 * @param Mat  $src
 * @param null $dst
 */
function equalizeHist(Mat $src, $dst = null)
{

}

/**
 * @param Mat    $img
 * @param Point  $center
 * @param Size   $axes
 * @param double $angle
 * @param double $startAngle
 * @param double $endAngle
 * @param Scalar $color
 * @param int    $thickness
 * @param int    $lineType
 * @param int    $shift
 */
function ellipse(Mat $img, Point $center, Size $axes, double $angle, double $startAngle, double $endAngle, Scalar $color, int $thickness = 1, int $lineType = LINE_8, int $shift = 0)
{

}

/**
 * @param Mat    $img
 * @param Point  $center
 * @param int    $radius
 * @param Scalar $color
 * @param int    $thickness
 * @param int    $lineType
 * @param int    $shift
 */
function circle(Mat $img, Point $center, int $radius, Scalar $color, int $thickness = 1, int $lineType = LINE_8, int $shift = 0)
{

}

function GaussianBlur(Mat $src, Mat $dst, Size $ksize, double $sigmaX, double $sigmaY = 0, $borderType = BORDER_DEFAULT)
{

}

/**
 * 自适应阈值化函数
 *
 * @param Mat    $src
 * @param Mat    $dst
 * @param double $maxValue
 * @param int    $adaptiveMethod
 * @param int    $thresholdType
 * @param int    $blockSize
 * @param double $C
 */
function adaptiveThreshold(Mat $src, Mat $dst, double $maxValue, int $adaptiveMethod, int $thresholdType, int $blockSize, double $C)
{

}

/**
 * @param Mat        $image
 * @param array      $contours
 * @param int        $mode
 * @param int        $method
 * @param Point|null $offset
 */
function findContoursWithoutHierarchy(Mat $image, array $contours, int $mode, int $method, Point $offset = null)
{

}

/**
 * @param Mat        $image      要绘制轮廓的图像
 * @param array      $contours   所有输入的轮廓，每个轮廓被保存成一个point二位数组（向量）
 * @param int        $contourIdx 指定要绘制轮廓的编号，如果是负数，则绘制所有的轮廓
 * @param Scalar     $color      绘制轮廓所用的颜色
 * @param int        $thickness  绘制轮廓的线的粗细，如果是负数，则轮廓内部被填充
 * @param int        $lineType   绘制轮廓的线的连通性
 * @param array      $hierarchy  关于层级的可选参数，只有绘制部分轮廓时才会用到
 * @param            $maxLevel   绘制轮廓的最高级别，这个参数只有hierarchy有效的时候才有效
 *                               maxLevel=0，绘制与输入轮廓属于同一等级的所有轮廓即输入轮廓和与其相邻的轮廓
 *                               maxLevel=1, 绘制与输入轮廓同一等级的所有轮廓与其子节点。
 *                               maxLevel=2，绘制与输入轮廓同一等级的所有轮廓与其子节点以及子节点的子节点
 * @param Point|null $offset
 */
function drawContours(Mat $image, array $contours,
                      int $contourIdx, Scalar $color,
                      int $thickness = 1, int $lineType = LINE_8,
                      array $hierarchy = [],
                      $maxLevel = INT_MAX, Point $offset = null)
{

}

/**
 * 返回外部矩形边界
 *
 * @param array $points point数组
 *
 * @return Rect
 */
function boundingRect(array $points)
{

}

/**
 * @param Mat        $src        输入的图片
 * @param Mat        $dst        输出和src一样的size和channel的图片
 * @param int        $ddepth     原图像的深度，$src->depth()
 * @param Mat        $kernel     卷积核，是一个单通道浮点型的矩阵，如果你想使用不同的核在不同的通道，那么可以使用函数Split（）将通道分离，再逐个使用核运算
 * @param Point|null $anchor     核的中心，默认在核的中点处
 * @param double     $delta      未知用途
 * @param int        $borderType 未知用途
 *
 * @return null
 */
function filter2D(Mat $src, Mat &$dst, int $ddepth, Mat $kernel, Point $anchor = null, double $delta = 0, int $borderType = BORDER_DEFAULT)
{

}

/**
 * 创建核
 *
 * @param int        $shape
 * @param Size       $ksize
 * @param Point|null $achor
 *
 * @return Mat
 */
function getStructuringElement(int $shape, Size $ksize, Point $achor = null)
{

}


/**
 * 腐蚀
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function erode(Mat $src, Mat $dst, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

/**
 * 膨胀
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function dilate(Mat $src, Mat $dst, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}


/**
 * 主要用于获得图像绕着某一点的旋转矩阵
 *
 * @param Point  $center 旋转的中心点
 * @param double $angle  表示旋转的角度
 * @param double $scale  图像缩放系数
 *
 * @return Mat
 */
function getRotationMatrix2D(Point $center, double $angle, double $scale)
{

}

/**
 * 反射变换方法
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param Mat         $M
 * @param Size        $dsize
 * @param ing         $flags
 * @param             $borderMode
 * @param Scalar|null $borderValue
 */
function warpAffine(Mat $src, Mat $dst, Mat $M, Size $dsize, ing $flags = INTER_LINEAR, $borderMode = BORDER_CONSTANT, Scalar $borderValue = null)
{

}


/**
 * @param Mat   $image
 * @param Size  $patchSize
 * @param Point $center
 * @param Mat   $patch
 * @param int   $patchType
 */
function getRectSubPix(Mat $image, Size $patchSize, Point $center, Mat $patch, int $patchType = -1)
{

}


/**
 * Perspective transformation
 * 透视变换
 *
 * @author hihozhou
 *
 * @param array $src         The array of coordinates in the source image that needs to be transformed, Point array
 *                           源图像中需要变换的坐标数组，Point数组
 * @param array $dst         Transform target coordinate array, Point array
 *                           变换目标坐标数组，Point数组
 * @param int   $solveMethod The default value is \CV\DECOMP_LU
 *                           默认值为 \CV\DECOMP_LU
 *
 * @return Mat
 */
function getPerspectiveTransform(array $src, array $dst, int $solveMethod = DECOMP_LU): Mat
{

}