<?php

namespace App;


class Response
{
    const CODE_SUCCESS = 200;
    const CODE_ERROR = 500;

    /**
     * @param $code
     * @param string $message
     * @param array $data
     * @return string
     */
    public static function response($code, $message = '', $data = null, $dataPage = null)
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'dataPage' => $dataPage
        ];
    }

    /**
     * @param string $message
     * @param array $data
     * @return string
     */
    public static function error($message = '', $data = null)
    {
        return self::response(self::CODE_ERROR, $message, $data);
    }

    /**
     * @param string $message
     * @param array $data
     * @return string
     */
    public static function success($message = '', $data = null, $dataPage = null)
    {
        return self::response(self::CODE_SUCCESS, $message, $data, $dataPage);
    }
}