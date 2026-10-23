<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasCancelBoostItemGroupV2Response implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $code = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $data = null;

    /**
     * @var string
     */
    protected ?string $message = null;

    /**
     * @var string
     */
    protected ?string $requestId = null;

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array<string,mixed> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return self
     */
    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->requestId !== null) {
            $result['request_id'] = $this->requestId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['request_id'] ?? null) !== null) {
            $obj->requestId = (string) $v;
        }
        return $obj;
    }
}
