<?php

namespace CV;

/**
 * 读取图片
 * @author hihozhou
 *
 * @param string $path  需要读取图片的路径
 * @param int    $flags 读取的方式配置，如：IMREAD_COLOR以BGR3通道，IMREAD_GRAYSCALE灰度形式读取，等。
 *
 * @return \CV\Mat 返回存在读取图像数据的Mat对象
 */
function imread(string $path, int $flags = IMREAD_COLOR)
{

}

