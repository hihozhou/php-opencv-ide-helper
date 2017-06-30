<?php
namespace CV;

/**
 * imread方法$flags选项
 */
const IMREAD_UNCHANGED = -1; //If set, return the loaded image as is (with alpha channel, otherwise it gets cropped).
const IMREAD_GRAYSCALE = 0; //灰度读取
const IMREAD_COLOR = 1; //读取BGR3通道图片
const IMREAD_ANYDEPTH = 2; //如果图片是16bit或32bit则正常读取，否则以8bit读取
const IMREAD_ANYCOLOR = 4; //读取任何格式的图片
const IMREAD_LOAD_GDAL = 8; //If set, use the gdal driver for loading the image.
const IMREAD_REDUCED_GRAYSCALE_2 = 16;//If set, always convert image to the single channel grayscale image and the image size reduced 1/2.
const IMREAD_REDUCED_COLOR_2 = 17;//!< If set, always convert image to the 3 channel BGR color image and the image size reduced 1/2.
const IMREAD_REDUCED_GRAYSCALE_4 = 32;//!< If set, always convert image to the single channel grayscale image and the image size reduced 1/4.
const IMREAD_REDUCED_COLOR_4 = 33;//!< If set, always convert image to the 3 channel BGR color image and the image size reduced 1/4.
const IMREAD_REDUCED_GRAYSCALE_8 = 64;//!< If set, always convert image to the single channel grayscale image and the image size reduced 1/8.
const IMREAD_REDUCED_COLOR_8 = 65;//!< If set, always convert image to the 3 channel BGR color image and the image size reduced 1/8.
const IMREAD_IGNORE_ORIENTATION = 128; //!< If set, do not rotate the image according to EXIF's orientation flag.
