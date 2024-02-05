<?php

namespace App\Exceptions;

use App\Helper\ApiResponse;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpResponseException::class,
        AuthenticationException::class,
        ModelNotFoundException::class,
        NotFoundHttpException::class,
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * @param Throwable $exception
     * @return void
     *
     * @throws Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param Throwable $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $exception)
    {


        if ($request->expectsJson()) {
            if ($exception instanceof NotFoundHttpException) {
                Log::error($exception->getMessage(), ['status code' => $exception->getCode()]);
                return $this->errorResponse(404, [], [], 'ادرس مورد نظر وجود ندارد', '');
            }

            if ($exception instanceof ModelNotFoundException) {
                Log::error($exception->getMessage(), ['status code' => $exception->getCode(), 'filename' => $exception->getFile()]);
                return $this->errorResponse(404, [], [], 'منبع مورد نظر وجود ندارد', '');
            }

            if ($exception instanceof HttpException) {
                Log::error($exception->getMessage(), ['status code' => $exception->getCode(), 'filename' => $exception->getFile()]);
                return $this->errorResponse($exception->getCode(), [], [], "", $exception->getMessage());
            }

            if ($exception instanceof AuthenticationException) {
                Log::error($exception->getMessage(), ['status code' => $exception->getCode(), 'filename' => $exception->getFile()]);
                return $this->errorResponse(401, [], [], 'شما نیاز به احراز هویت دارد', "");
            }

            if ($exception instanceof HttpResponseException) {
                return $exception->getResponse();
            }
            if ($exception instanceof ValidationException) {
                $errorMessage = (array) $exception->errors();
                $errorMessage = reset($errorMessage);
                if(is_array($errorMessage)){
                    $errorMessage = reset($errorMessage);

                }

                return $this->errorResponse(422, [], $exception->errors(), $errorMessage);
            }
        }

        return parent::render($request, $exception);
    }

    /**
     * Create a JSON response for the given errors.
     *
     * @param string $message
     * @param int $code
     * @param array $data
     * @return JsonResponse
     */
    protected function errorResponse($status, $result = [], $errors = [], $user_message = "", $developer_message = ""): JsonResponse
    {
        ApiResponse::setStatus($status);
        if ($user_message != "") {
            ApiResponse::setUserMessage($user_message);
        }
        if ($developer_message != "") {
            ApiResponse::setDeveloperMessage($developer_message);
        }
        if ($errors != []) {
            ApiResponse::setError($errors);
        }
        if ($result != []) {
            ApiResponse::setResult($result);
        }
        return ApiResponse::toJson();
    }
}
