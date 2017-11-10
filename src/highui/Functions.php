<?php

namespace CV;

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
 * @param String $winname
 * @param null $onMouse
 */
function setMouseCallback(String $winname, $onMouse = null)
{

}

/**
 * @param String $winname
 */
function destroyWindow(String $winname)
{

}

/**
 * 创建窗口
 * @param string $winname
 * @param int $flags
 */
function namedWindow(string $winname, int $flags = WINDOW_AUTOSIZE)
{

}

/**
 * 移动窗口
 * @param string $winname
 * @param int $x
 * @param int $y
 */
function moveWindow(string $winname, int $x, int $y)
{

}



/**
 * @param string $trackbarname
 * @param string $winname
 * @param int $value
 * @param int $count
 * @param callable|null $onChange
 */
function createTrackbar(string $trackbarname, string $winname, int $value, int $count, callable $onChange = null)
{

}


/**
 * 获取滑动条的值
 * @param String $trackbarname 轨迹条的名称
 * @param String $winname 轨迹条的父窗口名称
 * @return int
 */
function getTrackBarPos(String $trackbarname, String $winname)
{

}

