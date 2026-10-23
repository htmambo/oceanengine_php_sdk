<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoUpdateV30RequestVideosInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
