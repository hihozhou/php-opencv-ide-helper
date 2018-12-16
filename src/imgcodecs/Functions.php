<?php

namespace CV;

/**
 * Image input
 * 读取图片
 *
 * @author hihozhou
 *
 * @param string $filename Path of image file to be input
 *                         需要读取图片的路径
 *
 * @param int    $flags    Read the way configuration, such as: IMREAD_COLOR BGR3 channel, IMREAD_GRAYSCALE gray-scale form of reading, and so on.
 *                         读取的方式配置，如：IMREAD_COLOR以BGR3通道，IMREAD_GRAYSCALE灰度形式读取，等。
 *
 * @return \CV\Mat 返回存在读取图像数据的Mat对象
 */
function imread(string $filename, int $flags = IMREAD_COLOR)
{
}


/**
 * Save image
 * 保存图片
 *
 * @author hihozhou
 *
 * @param string $filename Path of image file to be output
 *                         保存图像的路径
 *
 * @param Mat    $img      Mat object to be saved
 *                         需要保存的Mat对象
 */
function imwrite(string $filename, Mat $img)
{

}