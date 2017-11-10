<?php
namespace CV;


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

/* fundamental constants */
const CV_PI = 3.1415926535897932384626433832795;
const CV_2PI = 6.283185307179586476925286766559;
const CV_LOG2 = 0.69314718055994530941723212145818;

