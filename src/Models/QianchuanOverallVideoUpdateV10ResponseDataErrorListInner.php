<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoUpdateV10ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $errorCode = null;

    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * @var int
     */
    protected ?int $objectType = null;

    /**
     * @var int
     */
    protected ?int $optType = null;

    /**
     * @return int
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return self
     */
    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectType(): ?int
    {
        return $this->objectType;
    }

    /**
     * @param int $objectType
     * @return self
     */
    public function setObjectType(?int $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOptType(): ?int
    {
        return $this->optType;
    }

    /**
     * @param int $optType
     * @return self
     */
    public function setOptType(?int $optType): self
    {
        $this->optType = $optType;
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
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->objectType !== null) {
            $result['object_type'] = $this->objectType;
        }
        if ($this->optType !== null) {
            $result['opt_type'] = $this->optType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_code'] ?? null) !== null) {
            $obj->errorCode = (int) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['object_type'] ?? null) !== null) {
            $obj->objectType = (int) $v;
        }
        if (($v = $data['opt_type'] ?? null) !== null) {
            $obj->optType = (int) $v;
        }
        return $obj;
    }
}
