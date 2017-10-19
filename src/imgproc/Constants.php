<?php
namespace CV;

//! shape of the structuring element
//MorphShapes
const MORPH_RECT = 0;
const MORPH_CROSS = 1;
const MORPH_ELLIPSE = 2;

//! type of morphological operation
//MorphTypes
const MORPH_ERODE = 0;
const MORPH_DILATE = 1;
const MORPH_OPEN = 2;
const MORPH_CLOSE = 3;
const MORPH_GRADIENT = 4;
const MORPH_TOPHAT = 5;
const MORPH_BLACKHAT = 6;
const MORPH_HITMISS = 7;

const COLOR_BGR2BGRA = 0; //!< add alpha channel to RGB or BGR image
const COLOR_RGB2RGBA = COLOR_BGR2BGRA;

const COLOR_BGRA2BGR = 1; //!< remove alpha channel from RGB or BGR image
const COLOR_RGBA2RGB = COLOR_BGRA2BGR;

const COLOR_BGR2RGBA = 2; //!< convert between RGB and BGR color spaces (with or without alpha channel)
const COLOR_RGB2BGRA = COLOR_BGR2RGBA;

const COLOR_RGBA2BGR = 3;
const COLOR_BGRA2RGB = COLOR_RGBA2BGR;

const COLOR_BGR2RGB = 4;
const COLOR_RGB2BGR = COLOR_BGR2RGB;

const COLOR_BGRA2RGBA = 5;
const COLOR_RGBA2BGRA = COLOR_BGRA2RGBA;

const COLOR_BGR2GRAY = 6; //!< convert between RGB/BGR and grayscale, @ref color_convert_rgb_gray "color conversions"
const COLOR_RGB2GRAY = 7;
const COLOR_GRAY2BGR = 8;
const COLOR_GRAY2RGB = COLOR_GRAY2BGR;
const COLOR_GRAY2BGRA = 9;
const COLOR_GRAY2RGBA = COLOR_GRAY2BGRA;
const COLOR_BGRA2GRAY = 10;
const COLOR_RGBA2GRAY = 11;

const COLOR_BGR2BGR565 = 12; //!< convert between RGB/BGR and BGR565 (16-bit images)
const COLOR_RGB2BGR565 = 13;
const COLOR_BGR5652BGR = 14;
const COLOR_BGR5652RGB = 15;
const COLOR_BGRA2BGR565 = 16;
const COLOR_RGBA2BGR565 = 17;
const COLOR_BGR5652BGRA = 18;
const COLOR_BGR5652RGBA = 19;

const COLOR_GRAY2BGR565 = 20; //!< convert between grayscale to BGR565 (16-bit images)
const COLOR_BGR5652GRAY = 21;

const COLOR_BGR2BGR555 = 22;  //!< convert between RGB/BGR and BGR555 (16-bit images)
const COLOR_RGB2BGR555 = 23;
const COLOR_BGR5552BGR = 24;
const COLOR_BGR5552RGB = 25;
const COLOR_BGRA2BGR555 = 26;
const COLOR_RGBA2BGR555 = 27;
const COLOR_BGR5552BGRA = 28;
const COLOR_BGR5552RGBA = 29;

const COLOR_GRAY2BGR555 = 30; //!< convert between grayscale and BGR555 (16-bit images)
const COLOR_BGR5552GRAY = 31;

const COLOR_BGR2XYZ = 32; //!< convert RGB/BGR to CIE XYZ, @ref color_convert_rgb_xyz "color conversions"
const COLOR_RGB2XYZ = 33;
const COLOR_XYZ2BGR = 34;
const COLOR_XYZ2RGB = 35;

const COLOR_BGR2YCrCb = 36; //!< convert RGB/BGR to luma-chroma (aka YCC), @ref color_convert_rgb_ycrcb "color conversions"
const COLOR_RGB2YCrCb = 37;
const COLOR_YCrCb2BGR = 38;
const COLOR_YCrCb2RGB = 39;

const COLOR_BGR2HSV = 40; //!< convert RGB/BGR to HSV (hue saturation value), @ref color_convert_rgb_hsv "color conversions"
const COLOR_RGB2HSV = 41;

const COLOR_BGR2Lab = 44; //!< convert RGB/BGR to CIE Lab, @ref color_convert_rgb_lab "color conversions"
const COLOR_RGB2Lab = 45;

const COLOR_BGR2Luv = 50; //!< convert RGB/BGR to CIE Luv, @ref color_convert_rgb_luv "color conversions"
const COLOR_RGB2Luv = 51;
const COLOR_BGR2HLS = 52; //!< convert RGB/BGR to HLS (hue lightness saturation), @ref color_convert_rgb_hls "color conversions"
const COLOR_RGB2HLS = 53;

const COLOR_HSV2BGR = 54; //!< backward conversions to RGB/BGR
const COLOR_HSV2RGB = 55;

const COLOR_Lab2BGR = 56;
const COLOR_Lab2RGB = 57;
const COLOR_Luv2BGR = 58;
const COLOR_Luv2RGB = 59;
const COLOR_HLS2BGR = 60;
const COLOR_HLS2RGB = 61;

const COLOR_BGR2HSV_FULL = 66; //!<
const COLOR_RGB2HSV_FULL = 67;
const COLOR_BGR2HLS_FULL = 68;
const COLOR_RGB2HLS_FULL = 69;

const COLOR_HSV2BGR_FULL = 70;
const COLOR_HSV2RGB_FULL = 71;
const COLOR_HLS2BGR_FULL = 72;
const COLOR_HLS2RGB_FULL = 73;

const COLOR_LBGR2Lab = 74;
const COLOR_LRGB2Lab = 75;
const COLOR_LBGR2Luv = 76;
const COLOR_LRGB2Luv = 77;

const COLOR_Lab2LBGR = 78;
const COLOR_Lab2LRGB = 79;
const COLOR_Luv2LBGR = 80;
const COLOR_Luv2LRGB = 81;

const COLOR_BGR2YUV = 82; //!< convert between RGB/BGR and YUV
const COLOR_RGB2YUV = 83;
const COLOR_YUV2BGR = 84;
const COLOR_YUV2RGB = 85;

//! YUV 4:2:0 family to RGB
const COLOR_YUV2RGB_NV12 = 90;
const COLOR_YUV2BGR_NV12 = 91;
const COLOR_YUV2RGB_NV21 = 92;
const COLOR_YUV2BGR_NV21 = 93;
const COLOR_YUV420sp2RGB = COLOR_YUV2RGB_NV21;
const COLOR_YUV420sp2BGR = COLOR_YUV2BGR_NV21;

const COLOR_YUV2RGBA_NV12 = 94;
const COLOR_YUV2BGRA_NV12 = 95;
const COLOR_YUV2RGBA_NV21 = 96;
const COLOR_YUV2BGRA_NV21 = 97;
const COLOR_YUV420sp2RGBA = COLOR_YUV2RGBA_NV21;
const COLOR_YUV420sp2BGRA = COLOR_YUV2BGRA_NV21;

const COLOR_YUV2RGB_YV12 = 98;
const COLOR_YUV2BGR_YV12 = 99;
const COLOR_YUV2RGB_IYUV = 100;
const COLOR_YUV2BGR_IYUV = 101;
const COLOR_YUV2RGB_I420 = COLOR_YUV2RGB_IYUV;
const COLOR_YUV2BGR_I420 = COLOR_YUV2BGR_IYUV;
const COLOR_YUV420p2RGB = COLOR_YUV2RGB_YV12;
const COLOR_YUV420p2BGR = COLOR_YUV2BGR_YV12;

const COLOR_YUV2RGBA_YV12 = 102;
const COLOR_YUV2BGRA_YV12 = 103;
const COLOR_YUV2RGBA_IYUV = 104;
const COLOR_YUV2BGRA_IYUV = 105;
const COLOR_YUV2RGBA_I420 = COLOR_YUV2RGBA_IYUV;
const COLOR_YUV2BGRA_I420 = COLOR_YUV2BGRA_IYUV;
const COLOR_YUV420p2RGBA = COLOR_YUV2RGBA_YV12;
const COLOR_YUV420p2BGRA = COLOR_YUV2BGRA_YV12;

const COLOR_YUV2GRAY_420 = 106;
const COLOR_YUV2GRAY_NV21 = COLOR_YUV2GRAY_420;
const COLOR_YUV2GRAY_NV12 = COLOR_YUV2GRAY_420;
const COLOR_YUV2GRAY_YV12 = COLOR_YUV2GRAY_420;
const COLOR_YUV2GRAY_IYUV = COLOR_YUV2GRAY_420;
const COLOR_YUV2GRAY_I420 = COLOR_YUV2GRAY_420;
const COLOR_YUV420sp2GRAY = COLOR_YUV2GRAY_420;
const COLOR_YUV420p2GRAY = COLOR_YUV2GRAY_420;

//! YUV 4:2:2 family to RGB
const COLOR_YUV2RGB_UYVY = 107;
const COLOR_YUV2BGR_UYVY = 108;
//COLOR_YUV2RGB_VYUY = 109;
//COLOR_YUV2BGR_VYUY = 110;
const COLOR_YUV2RGB_Y422 = COLOR_YUV2RGB_UYVY;
const COLOR_YUV2BGR_Y422 = COLOR_YUV2BGR_UYVY;
const COLOR_YUV2RGB_UYNV = COLOR_YUV2RGB_UYVY;
const COLOR_YUV2BGR_UYNV = COLOR_YUV2BGR_UYVY;

const COLOR_YUV2RGBA_UYVY = 111;
const COLOR_YUV2BGRA_UYVY = 112;
//COLOR_YUV2RGBA_VYUY = 113;
//COLOR_YUV2BGRA_VYUY = 114;
const COLOR_YUV2RGBA_Y422 = COLOR_YUV2RGBA_UYVY;
const COLOR_YUV2BGRA_Y422 = COLOR_YUV2BGRA_UYVY;
const COLOR_YUV2RGBA_UYNV = COLOR_YUV2RGBA_UYVY;
const COLOR_YUV2BGRA_UYNV = COLOR_YUV2BGRA_UYVY;

const COLOR_YUV2RGB_YUY2 = 115;
const COLOR_YUV2BGR_YUY2 = 116;
const COLOR_YUV2RGB_YVYU = 117;
const COLOR_YUV2BGR_YVYU = 118;
const COLOR_YUV2RGB_YUYV = COLOR_YUV2RGB_YUY2;
const COLOR_YUV2BGR_YUYV = COLOR_YUV2BGR_YUY2;
const COLOR_YUV2RGB_YUNV = COLOR_YUV2RGB_YUY2;
const COLOR_YUV2BGR_YUNV = COLOR_YUV2BGR_YUY2;

const COLOR_YUV2RGBA_YUY2 = 119;
const COLOR_YUV2BGRA_YUY2 = 120;
const COLOR_YUV2RGBA_YVYU = 121;
const COLOR_YUV2BGRA_YVYU = 122;
const COLOR_YUV2RGBA_YUYV = COLOR_YUV2RGBA_YUY2;
const COLOR_YUV2BGRA_YUYV = COLOR_YUV2BGRA_YUY2;
const COLOR_YUV2RGBA_YUNV = COLOR_YUV2RGBA_YUY2;
const COLOR_YUV2BGRA_YUNV = COLOR_YUV2BGRA_YUY2;

const COLOR_YUV2GRAY_UYVY = 123;
const COLOR_YUV2GRAY_YUY2 = 124;
//CV_YUV2GRAY_VYUY    = CV_YUV2GRAY_UYVY;
const COLOR_YUV2GRAY_Y422 = COLOR_YUV2GRAY_UYVY;
const COLOR_YUV2GRAY_UYNV = COLOR_YUV2GRAY_UYVY;
const COLOR_YUV2GRAY_YVYU = COLOR_YUV2GRAY_YUY2;
const COLOR_YUV2GRAY_YUYV = COLOR_YUV2GRAY_YUY2;
const COLOR_YUV2GRAY_YUNV = COLOR_YUV2GRAY_YUY2;

//! alpha premultiplication
const COLOR_RGBA2mRGBA = 125;
const COLOR_mRGBA2RGBA = 126;

//! RGB to YUV 4:2:0 family
const COLOR_RGB2YUV_I420 = 127;
const COLOR_BGR2YUV_I420 = 128;
const COLOR_RGB2YUV_IYUV = COLOR_RGB2YUV_I420;
const COLOR_BGR2YUV_IYUV = COLOR_BGR2YUV_I420;

const COLOR_RGBA2YUV_I420 = 129;
const COLOR_BGRA2YUV_I420 = 130;
const COLOR_RGBA2YUV_IYUV = COLOR_RGBA2YUV_I420;
const COLOR_BGRA2YUV_IYUV = COLOR_BGRA2YUV_I420;
const COLOR_RGB2YUV_YV12 = 131;
const COLOR_BGR2YUV_YV12 = 132;
const COLOR_RGBA2YUV_YV12 = 133;
const COLOR_BGRA2YUV_YV12 = 134;

//! Demosaicing
const COLOR_BayerBG2BGR = 46;
const COLOR_BayerGB2BGR = 47;
const COLOR_BayerRG2BGR = 48;
const COLOR_BayerGR2BGR = 49;

const COLOR_BayerBG2RGB = COLOR_BayerRG2BGR;
const COLOR_BayerGB2RGB = COLOR_BayerGR2BGR;
const COLOR_BayerRG2RGB = COLOR_BayerBG2BGR;
const COLOR_BayerGR2RGB = COLOR_BayerGB2BGR;

const COLOR_BayerBG2GRAY = 86;
const COLOR_BayerGB2GRAY = 87;
const COLOR_BayerRG2GRAY = 88;
const COLOR_BayerGR2GRAY = 89;

//! Demosaicing using Variable Number of Gradients
const COLOR_BayerBG2BGR_VNG = 62;
const COLOR_BayerGB2BGR_VNG = 63;
const COLOR_BayerRG2BGR_VNG = 64;
const COLOR_BayerGR2BGR_VNG = 65;

const COLOR_BayerBG2RGB_VNG = COLOR_BayerRG2BGR_VNG;
const COLOR_BayerGB2RGB_VNG = COLOR_BayerGR2BGR_VNG;
const COLOR_BayerRG2RGB_VNG = COLOR_BayerBG2BGR_VNG;
const COLOR_BayerGR2RGB_VNG = COLOR_BayerGB2BGR_VNG;

//! Edge-Aware Demosaicing
const COLOR_BayerBG2BGR_EA = 135;
const COLOR_BayerGB2BGR_EA = 136;
const COLOR_BayerRG2BGR_EA = 137;
const COLOR_BayerGR2BGR_EA = 138;

const COLOR_BayerBG2RGB_EA = COLOR_BayerRG2BGR_EA;
const COLOR_BayerGB2RGB_EA = COLOR_BayerGR2BGR_EA;
const COLOR_BayerRG2RGB_EA = COLOR_BayerBG2BGR_EA;
const COLOR_BayerGR2RGB_EA = COLOR_BayerGB2BGR_EA;

//! Demosaicing with alpha channel
const COLOR_BayerBG2BGRA = 139;
const COLOR_BayerGB2BGRA = 140;
const COLOR_BayerRG2BGRA = 141;
const COLOR_BayerGR2BGRA = 142;

const COLOR_BayerBG2RGBA = COLOR_BayerRG2BGRA;
const COLOR_BayerGB2RGBA = COLOR_BayerGR2BGRA;
const COLOR_BayerRG2RGBA = COLOR_BayerBG2BGRA;
const COLOR_BayerGR2RGBA = COLOR_BayerGB2BGRA;

const COLOR_COLORCVT_MAX = 143;

//! floodfill algorithm flags
const FLOODFILL_FIXED_RANGE = 1 << 16;
const FLOODFILL_FIXED_RANGE = 1 << 17;


const THRESH_BINARY = 0; //!< \f[\texttt{dst} (x,y) =  \fork{\texttt{maxval}}{if \(\texttt{src}(x,y) > \texttt{thresh}\)}{0}{otherwise}\f]
const THRESH_BINARY_INV = 1; //!< \f[\texttt{dst} (x,y) =  \fork{0}{if \(\texttt{src}(x,y) > \texttt{thresh}\)}{\texttt{maxval}}{otherwise}\f]
const THRESH_TRUNC = 2; //!< \f[\texttt{dst} (x,y) =  \fork{\texttt{threshold}}{if \(\texttt{src}(x,y) > \texttt{thresh}\)}{\texttt{src}(x,y)}{otherwise}\f]
const THRESH_TOZERO = 3; //!< \f[\texttt{dst} (x,y) =  \fork{\texttt{src}(x,y)}{if \(\texttt{src}(x,y) > \texttt{thresh}\)}{0}{otherwise}\f]
const THRESH_TOZERO_INV = 4; //!< \f[\texttt{dst} (x,y) =  \fork{0}{if \(\texttt{src}(x,y) > \texttt{thresh}\)}{\texttt{src}(x,y)}{otherwise}\f]
const THRESH_MASK = 7;
const THRESH_OTSU = 8; //!< flag, use Otsu algorithm to choose the optimal threshold value
const THRESH_TRIANGLE = 16; //!< flag, use Triangle algorithm to choose the optimal threshold value

//AdaptiveThresholdTypes
const ADAPTIVE_THRESH_MEAN_C = 0;
const ADAPTIVE_THRESH_GAUSSIAN_C = 1;

//! mode of the contour retrieval algorithm
//RetrievalModes
const RETR_EXTERNAL = 0;
/** retrieves all of the contours without establishing any hierarchical relationships. */
const RETR_LIST = 1;
/** retrieves all of the contours and organizes them into a two-level hierarchy. At the top
 * level, there are external boundaries of the components. At the second level, there are
 * boundaries of the holes. If there is another contour inside a hole of a connected component, it
 * is still put at the top level. */
const RETR_CCOMP = 2;
/** retrieves all of the contours and reconstructs a full hierarchy of nested contours.*/
const RETR_TREE = 3;
const RETR_FLOODFILL = 4; //!<


//! the contour approximation algorithm
//ContourApproximationModes
/** stores absolutely all the contour points. That is, any 2 subsequent points (x1,y1) and
 * (x2,y2) of the contour will be either horizontal, vertical or diagonal neighbors, that is,
 * max(abs(x1-x2),abs(y2-y1))==1. */
const CHAIN_APPROX_NONE = 1;
/** compresses horizontal, vertical, and diagonal segments and leaves only their end points.
 * For example, an up-right rectangular contour is encoded with 4 points. */
const CHAIN_APPROX_SIMPLE = 2;
/** applies one of the flavors of the Teh-Chin chain approximation algorithm @cite TehChin89 */
const CHAIN_APPROX_TC89_L1 = 3;
/** applies one of the flavors of the Teh-Chin chain approximation algorithm @cite TehChin89 */
const CHAIN_APPROX_TC89_KCOS = 4;