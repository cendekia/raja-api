<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $statusCode = 200;

    private function defaultResponse($message = 'Success', $code = 10, $type = 'success')
    {
        return ($type == 'success') ?
            ['message' => $message, 'status_code' => $code] : ['error' => ['message' => $message, 'status_code' => $code]];
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respondInvalidRequest($message = 'Invalid Request!', $code = 41)
    {
        return $this->setStatusCode(422)->respondWithError($message, $code);
    }

    public function respondNotFound($message = 'Not Found!', $code = 50)
    {
        return $this->setStatusCode(404)->respondWithError($message, $code);
    }

    public function respondForbidden($message = 'Forbidden access!', $code = 51)
    {
        return $this->setStatusCode(403)->respondWithError($message, $code);
    }

    public function respondInternalError($message = 'Internal Error!', $code = 60)
    {
        return $this->setStatusCode(500)->respondWithError($message, $code);
    }

    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message, $code)
    {
        return $this->respond($this->defaultResponse($message, $code, 'error'));
    }

    public function respondSuccess($message = 'Success', $code = 10)
    {
        return $this->respond($this->defaultResponse($message, $code));
    }

    public function respondFormatter(Array $data, $message = 'Success', $code = 10)
    {
        $formatterCollection = collect($this->defaultResponse($message, $code));

        foreach ($data as $key => $value) {
            $formatterCollection->put($key, $value);
        }

        return $formatterCollection;
    }
}