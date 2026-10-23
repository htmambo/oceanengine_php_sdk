<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoUpdateV30ResponseDataVideosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpVideoUpdateV30DataVideosStatusCode
     */
    protected ?string $statusCode = null;

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
     * @return \Oceanengine\Models\ToolsEbpVideoUpdateV30DataVideosStatusCode
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpVideoUpdateV30DataVideosStatusCode $statusCode
     * @return self
     */
    public function setStatusCode(?string $statusCode): self
    {
        $this->statusCode = $statusCode;
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
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (string) $v;
        }
        return $obj;
    }
}
