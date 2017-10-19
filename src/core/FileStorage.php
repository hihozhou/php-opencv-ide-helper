<?php
/**
 * Created by PhpStorm.
 * User: hiho
 * Date: 17-10-10
 * Time: 上午11:42
 */

namespace CV;


class FileStorage
{
    const READ = 0;
    const WRITE = 1; //!< value, open the file for writing
    const APPEND = 2; //!< value, open the file for appending
    const MEMORY = 4; //!< flag, read data from source or write data to the internal buffer (which is
    //!< returned by FileStorage::release)
    const FORMAT_MASK = (7 << 3); //!< mask for format flags
    const FORMAT_AUTO = 0;      //!< flag, auto format
    const FORMAT_XML = (1 << 3); //!< flag, XML format
    const FORMAT_YAML = (2 << 3); //!< flag, YAML format
    const FORMAT_JSON = (3 << 3); //!< flag, JSON format

    const BASE64 = 64;     //!< flag, write rawdata in Base64 by default. (consider using WRITE_BASE64)
    const WRITE_BASE64 = self::BASE64 | self::WRITE; //!< flag, enable both WRITE and BASE64


    /**
     * FileStorage constructor.
     * @param String|null $source
     * @param int $flags
     */
    public function __construct(String $source = null, int $flags = self::READ)
    {

    }

    /**
     * @return bool
     */
    public function isOpened()
    {

    }

    /**
     * @param String $name 读取的key名称
     * @param int $type 读取的类型： 1：int，2：double，3：string，4：bool，5：Mat
     * @return mixed|null|Mat
     */
    public function read(String $name, int $type)
    {

    }

    public function release()
    {

    }

}