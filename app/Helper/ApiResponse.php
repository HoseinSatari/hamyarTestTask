<?php

namespace App\Helper;

class ApiResponse
{
    protected static $status;
    protected static $success;
    protected static $userMessage;
    protected static $developerMessage;
    protected static $result;
    protected static $error;
    protected static $paginate;

    public static function setStatus($status)
    {
        static::$status = $status;
        if (static::$status == 200 or static::$status == 201 or static::$status == 204){
            static::$success = true;
        }else{
            static::$success = false;
        }
    }

    public static function setUserMessage($userMessage)
    {
        static::$userMessage = $userMessage;
    }

    public static function setDeveloperMessage($developerMessage)
    {
        static::$developerMessage = $developerMessage;
    }

    public static function setResult($result)
    {
        static::$result = $result;
    }

    public static function setError($error)
    {
        static::$error = $error;
    }

    public static function setPaginate($paginate)
    {
        static::$paginate = $paginate;
    }

    public static function toArray()
    {
        $response = [
            'success' => static::$success,
            'status' => static::$status,
        ];

        if (!empty(static::$userMessage)) {
            $response['user_message'] = static::$userMessage;
        }

        if (!empty(static::$developerMessage)) {
            $response['developer_message'] = static::$developerMessage;
        }

        if (!is_null(static::$result)) {
            $response['result'] = static::$result;
        }

        if (!is_null(static::$error)) {
            $response['error'] = static::$error;
        }

        if (!is_null(static::$paginate)) {
            $response['paginate'] = static::$paginate;
        }

        return $response;
    }

    public static function toJson()
    {
        return response()->json(static::toArray(), static::$status);

    }
}
