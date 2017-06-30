<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-6-30
 * Time: 下午12:17
 */

namespace CV;


class Formatter
{
    /**
     * 默认格式输出
     */
    const FMT_DEFAULT = 0;

    /**
     * matlab格式输出
     */
    const FMT_MATLAB = 1;

    /**
     * csv格式输出
     */
    const FMT_CSV = 2;

    /**
     * python格式
     */
    const FMT_PYTHON = 3;

    /**
     * numpy格式输出
     */
    const FMT_NUMPY = 4;

    /**
     * c格式输出
     */
    const FMT_C = 5;
}