<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectUpdateV30ResponseDataErrorListInner implements \JsonSerializable
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
     * @var \Oceanengine\Models\ProjectUpdateV30DataErrorListObjectType
     */
    protected ?string $objectType = null;

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
     * @return \Oceanengine\Models\ProjectUpdateV30DataErrorListObjectType
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30DataErrorListObjectType $objectType
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
            $obj->errorCode = (int) $v;
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
