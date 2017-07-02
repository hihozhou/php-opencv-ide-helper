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


const CV_8U = 0;
const CV_8S = 1;
const CV_16U = 2;
const CV_16S = 3;
const CV_32S = 4;
const CV_32F = 5;
const CV_64F = 6;
const CV_USRTYPE1 = 7;

const CV_8UC1 = CV_8UC(1);
const CV_8UC2 = CV_8UC(2);
const CV_8UC3 = CV_8UC(3);
const CV_8UC4 = CV_8UC(4);

const CV_8SC1 = CV_8SC(1);
const CV_8SC2 = CV_8SC(2);
const CV_8SC3 = CV_8SC(3);
const CV_8SC4 = CV_8SC(4);

const CV_16UC1 = CV_16UC(1);
const CV_16UC2 = CV_16UC(2);
const CV_16UC3 = CV_16UC(3);
const CV_16UC4 = CV_16UC(4);

const CV_16SC1 = CV_16SC(1);
const CV_16SC2 = CV_16SC(2);
const CV_16SC3 = CV_16SC(3);
const CV_16SC4 = CV_16SC(4);

const CV_32SC1 = CV_32SC(1);
const CV_32SC2 = CV_32SC(2);
const CV_32SC3 = CV_32SC(3);
const CV_32SC4 = CV_32SC(4);

const CV_32FC1 = CV_32FC(1);
const CV_32FC2 = CV_32FC(2);
const CV_32FC3 = CV_32FC(3);
const CV_32FC4 = CV_32FC(4);

const CV_64FC1 = CV_64FC(1);
const CV_64FC2 = CV_64FC(2);
const CV_64FC3 = CV_64FC(3);
const CV_64FC4 = CV_64FC(4);
