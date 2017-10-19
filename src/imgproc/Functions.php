<?php

namespace CV;

/**
 * 开闭运算、顶帽、黑帽
 * @param Mat $src
 * @param Mat $dst
 * @param int $op
 * @param Mat $kernel
 * @param Point|null $anchor
 * @param int $iterations
 * @param int $borderType
 * @param Scalar|null $borderValue
 */
function morphologyEx(Mat $src, Mat $dst, int $op, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

/**
 * 漫水填充
 * @param Mat $image
 * @param Point $seedPoint
 * @param Scalar $newVal
 * @param Mat|null $mat
 * @param Rect|null $rect
 * @param Scalar|null $loDiff
 * @param Scalar|null $upDiff
 * @param int $flags
 */
function floodFill(Mat $image, Point $seedPoint, Scalar $newVal, Mat $mat = null, Rect $rect = null, Scalar $loDiff = null, Scalar $upDiff = null, int $flags = 4)
{

}

/**
 * @param Mat $src
 * @param int $code
 * @param int $dstCn
 * @return Mat $dst
 */
function cvtColor(Mat $src, int $code, int $dstCn = 0)
{

}

/**
 * @param Mat $mat
 * @param Mat $dst
 * @param double $thresh
 * @param double $maxval
 * @param int $type
 */
function threshold(Mat $mat, Mat $dst, double $thresh, double $maxval, int $type)
{

}

/**
 * @param Mat $src
 * @param null $dst
 */
function equalizeHist(Mat $src, $dst = null)
{

}

/**
 * @param Mat $img
 * @param Point $center
 * @param Size $axes
 * @param double $angle
 * @param double $startAngle
 * @param double $endAngle
 * @param Scalar $color
 * @param int $thickness
 * @param int $lineType
 * @param int $shift
 */
function ellipse(Mat $img, Point $center, Size $axes, double $angle, double $startAngle, double $endAngle, Scalar $color, int $thickness = 1, int $lineType = LINE_8, int $shift = 0)
{

}

/**
 * @param Mat $img
 * @param Point $center
 * @param int $radius
 * @param Scalar $color
 * @param int $thickness
 * @param int $lineType
 * @param int $shift
 */
function circle(Mat $img, Point $center, int $radius, Scalar $color, int $thickness = 1, int $lineType = LINE_8, int $shift = 0)
{

}

function GaussianBlur(Mat $src, Mat $dst, Size $ksize, double $sigmaX, double $sigmaY = 0, $borderType = BORDER_DEFAULT)
{

}

/**
 * 自适应阈值化函数
 * @param Mat $src
 * @param Mat $dst
 * @param double $maxValue
 * @param int $adaptiveMethod
 * @param int $thresholdType
 * @param int $blockSize
 * @param double $C
 */
function adaptiveThreshold(Mat $src, Mat $dst, double $maxValue, int $adaptiveMethod, int $thresholdType, int $blockSize, double $C)
{

}

/**
 * @param Mat $image
 * @param array $contours
 * @param int $mode
 * @param int $method
 * @param Point|null $offset
 */
function findContoursWithoutHierarchy(Mat $image, array $contours, int $mode, int $method, Point $offset = null)
{

}