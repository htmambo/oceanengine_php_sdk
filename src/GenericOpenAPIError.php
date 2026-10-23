<?php

declare(strict_types=1);

namespace Oceanengine;

use Exception;

/**
 * Error returned for non-2xx API responses; carries the raw body and status code.
 */
class GenericOpenAPIError extends Exception
{
    /** @var string Raw response body */
    private string $body;

    /** @var mixed Decoded error model, if any */
    private $model;

    /** @var int HTTP status code */
    private int $statusCode;

    /**
     * @param string $message
     * @param string $body
     * @param mixed $model
     * @param int $statusCode
     */
    public function __construct(string $message, string $body = '', $model = null, int $statusCode = 0)
    {
        parent::__construct($message, $statusCode);
        $this->body = $body;
        $this->model = $model;
        $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
