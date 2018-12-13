<?php

namespace CV;

/**
 *
 * image input
 *
 * 读取图片
 *
 * @author hihozhou
 *
 * @param string $path   The path that needs to input the image
 *                       需要读取的图片路径
 * @param int    $flags  The configuration of the read mode, such as: IMREAD_COLOR read in BGR3 channel, IMREAD_GRAYSCALE grayscale, and so on.
 *                       读取的方式配置，如：IMREAD_COLOR以BGR3通道，IMREAD_GRAYSCALE灰度形式读取，等。
 *
 * @return \CV\Mat 返回存在读取图像数据的Mat对象
 */
function imread(string $path, int $flags = IMREAD_COLOR)
{

}

