<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataImageMaterialListInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist
     */
    protected ?string $materialStatusFrist = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusSecond[]
     */
    protected ?array $materialStatusSecond = null;

    /**
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist
     */
    public function getMaterialStatusFrist(): ?string
    {
        return $this->materialStatusFrist;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist $materialStatusFrist
     * @return self
     */
    public function setMaterialStatusFrist(?string $materialStatusFrist): self
    {
        $this->materialStatusFrist = $materialStatusFrist;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusSecond[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataImageMaterialListMaterialStatusSecond[] $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?array $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialStatusFrist !== null) {
            $result['material_status_frist'] = $this->materialStatusFrist;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_status_frist'] ?? null) !== null) {
            $obj->materialStatusFrist = (string) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialStatusSecond = $v;
        }
        return $obj;
    }
}
