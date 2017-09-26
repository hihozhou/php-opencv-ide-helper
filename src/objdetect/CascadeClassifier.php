<?php

namespace CV;


class CascadeClassifier
{
    /**
     * @param Mat $image
     * @param null $objects
     * @param double $scaleFactor
     * @param int $minNeighbors
     * @param int $flags
     * @param Size|null $minSize
     * @param Size|null $maxSize
     */
    public function detectMultiScale(Mat $image, $objects = null, double $scaleFactor = 1.1, int $minNeighbors = 3, int $flags = 0, Size $minSize = null, Size $maxSize = null)
    {

    }

    /**
     * @param String $filename
     * @return bool
     */
    public function load(String $filename)
    {

    }
}