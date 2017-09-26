<?php
namespace CV;


//! Flags for cv::namedWindow WindowFlags
const WINDOW_NORMAL = 0x00000000;
const WINDOW_AUTOSIZE = 0x00000001;
const WINDOW_OPENGL = 0x00001000;
const WINDOW_FULLSCREEN = 1;
const WINDOW_FREERATIO = 0x00000100;
const WINDOW_KEEPRATIO = 0x00000000;
const WINDOW_GUI_EXPANDED = 0x00000000;
const WINDOW_GUI_NORMAL = 0x00000010;

//! Mouse Events see CV\MouseCallback
const EVENT_MOUSEMOVE = 0; //!< indicates that the mouse pointer has moved over the window.
const EVENT_LBUTTONDOWN = 1; //!< indicates that the left mouse button is pressed.
const EVENT_RBUTTONDOWN = 2; //!< indicates that the right mouse button is pressed.
const EVENT_MBUTTONDOWN = 3; //!< indicates that the middle mouse button is pressed.
const EVENT_LBUTTONUP = 4; //!< indicates that left mouse button is released.
const EVENT_RBUTTONUP = 5; //!< indicates that right mouse button is released.
const EVENT_MBUTTONUP = 6; //!< indicates that middle mouse button is released.
const EVENT_LBUTTONDBLCLK = 7; //!< indicates that left mouse button is double clicked.
const EVENT_RBUTTONDBLCLK = 8; //!< indicates that right mouse button is double clicked.
const EVENT_MBUTTONDBLCLK = 9; //!< indicates that middle mouse button is double clicked.
const EVENT_MOUSEWHEEL = 10; //!< positive and negative values mean forward and backward scrolling, respectively.
const EVENT_MOUSEHWHEEL = 11; //!< positive and negative values mean right and left scrolling, respectively.

//! Mouse Event Flags see CV\MouseCallback
const EVENT_FLAG_LBUTTON = 1; //!< indicates that the left mouse button is down.
const EVENT_FLAG_RBUTTON = 2; //!< indicates that the right mouse button is down.
const EVENT_FLAG_MBUTTON = 4; //!< indicates that the middle mouse button is down.
const EVENT_FLAG_CTRLKEY = 8; //!< indicates that CTRL Key is pressed.
const EVENT_FLAG_SHIFTKEY = 16;//!< indicates that SHIFT Key is pressed.
const EVENT_FLAG_ALTKEY = 32; //!< indicates that ALT Key is pressed.