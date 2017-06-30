<?php

namespace CV;

/**
 * 读取图片
 * @param string $path 读取的路径
 * @param int $flags
 * @return Mat
 */
function imread(string $path, int $flags = IMREAD_COLOR){

}

/**
 * GUI展示图片
 * @param string $windowName 窗口名称
 * @param Mat $mat 需要展示的Mat矩阵
 */
function imshow(string $windowName, Mat $mat){

}

/**
 * 等待输入建输出后继续执行，
 * 如果$sec大于0的等待多少秒，如果为0则一直等待
 * @param int $sec 单位秒
 */
function waitKey(int $sec){

}