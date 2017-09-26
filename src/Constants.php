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

/**
 * BorderTypes
 * Various border types, image boundaries are denoted with `|`
 * @see borderInterpolate, copyMakeBorder
 */
const BORDER_CONSTANT = 0; //!< `iiiiii|abcdefgh|iiiiiii`  with some specified `i`
const BORDER_REPLICATE = 1; //!< `aaaaaa|abcdefgh|hhhhhhh`
const BORDER_REFLECT = 2; //!< `fedcba|abcdefgh|hgfedcb`
const BORDER_WRAP = 3; //!< `cdefgh|abcdefgh|abcdefg`
const BORDER_REFLECT_101 = 4; //!< `gfedcb|abcdefgh|gfedcba`
const BORDER_TRANSPARENT = 5; //!< `uvwxyz|absdefgh|ijklmno`

const BORDER_REFLECT101 = BORDER_REFLECT_101;//!< same as BORDER_REFLECT_101
const BORDER_DEFAULT = BORDER_REFLECT_101;//!< same as BORDER_REFLECT_101
const BORDER_ISOLATED = 16;//!< do not look outside of ROI

/**
 * NormTypes
 * @see normalize
 */
const NORM_INF = 1;
const NORM_L1 = 2;
const NORM_L2 = 4;
const NORM_L2SQR = 5;
const NORM_HAMMING = 6;
const NORM_HAMMING2 = 7;
const NORM_TYPE_MASK = 7;
const NORM_RELATIVE = 8;
const NORM_MINMAX = 32;
