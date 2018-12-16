<?php

namespace CV;

/**
 *
 * Imread flags
 * imread方法$flags选项
 * 
 * @see imread()
 */

/**
 * If set, return the loaded image as is (with alpha channel, otherwise it gets cropped).
 * 如果设置改参数，则按原样返回加载的图像（包含Alpha通道）
 */
const IMREAD_UNCHANGED = -1;

/**
 * If set, always convert image to the single channel grayscale image (codec internal conversion).
 * 如果设置该参数，始终将图像转换为单通道灰度图像（编解码器内部转换）。
 */
const IMREAD_GRAYSCALE = 0;

/**
 * If set, always convert image to the 3 channel BGR color image.
 * 如果设置该参数，请始终将图像转换为3通道BGR彩色图像。
 */
const IMREAD_COLOR = 1;

/**
 * If set, return 16-bit/32-bit image when the input has the corresponding depth, otherwise convert it to 8-bit.
 * 如果图片是16bit或32bit则正常读取，否则以8bit读取。
 */
const IMREAD_ANYDEPTH = 2;

/**
 * If set, the image is read in any possible color format.
 * 读取任何格式的图片
 */
const IMREAD_ANYCOLOR = 4;

/**
 * If set, use the gdal driver for loading the image.
 */
const IMREAD_LOAD_GDAL = 8;

/**
 * If set, always convert image to the single channel grayscale image and the image size reduced 1/2.
 */
const IMREAD_REDUCED_GRAYSCALE_2 = 16;

/**
 * If set, always convert image to the 3 channel BGR color image and the image size reduced 1/2.
 */
const IMREAD_REDUCED_COLOR_2 = 17;

/**
 * If set, always convert image to the single channel grayscale image and the image size reduced 1/4.
 */
const IMREAD_REDUCED_GRAYSCALE_4 = 32;

/**
 * If set, always convert image to the 3 channel BGR color image and the image size reduced 1/4.
 */
const IMREAD_REDUCED_COLOR_4 = 33;

/**
 * If set, always convert image to the single channel grayscale image and the image size reduced 1/8.
 */
const IMREAD_REDUCED_GRAYSCALE_8 = 64;

/**
 * If set, always convert image to the 3 channel BGR color image and the image size reduced 1/8.
 */
const IMREAD_REDUCED_COLOR_8 = 65;

/**
 * If set, do not rotate the image according to EXIF's orientation flag.
 */
const IMREAD_IGNORE_ORIENTATION = 128;


