<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialCreateV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 下游错误码
     * @var string
     */
    protected ?string $errorCode = null;

    /**
     * 下游错误信息
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * 下游对象类型
     * @var string
     */
    protected ?string $objectType = null;

    /**
     * 下游错误码
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * 下游错误码
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * 下游错误信息
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 下游错误信息
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * 下游对象类型
     * @return string
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * 下游对象类型
     * @param string $objectType
     * @return self
     */
    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorCode !== null) {
            $result['error_code'] = $this->errorCode;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        if ($this->objectType !== null) {
            $result['object_type'] = $this->objectType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_code'] ?? null) !== null) {
            $obj->errorCode = (string) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['object_type'] ?? null) !== null) {
            $obj->objectType = (string) $v;
        }
        return $obj;
    }
}
