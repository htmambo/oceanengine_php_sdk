<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialStatusUpdateV30ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $message = null;

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 失败原因
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        return $obj;
    }
}
