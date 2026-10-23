<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileEbpVideoGetV30ResponseDataListInnerMaterialProperties implements \JsonSerializable
{
    /**
     * 是否优质素材
     * @var bool
     */
    protected ?bool $isAdHighQualityMaterial = null;

    /**
     * 是否首发素材
     * @var bool
     */
    protected ?bool $isFirstPublish = null;

    /**
     * 是否优质素材
     * @return bool
     */
    public function getIsAdHighQualityMaterial(): ?bool
    {
        return $this->isAdHighQualityMaterial;
    }

    /**
     * 是否优质素材
     * @param bool $isAdHighQualityMaterial
     * @return self
     */
    public function setIsAdHighQualityMaterial(?bool $isAdHighQualityMaterial): self
    {
        $this->isAdHighQualityMaterial = $isAdHighQualityMaterial;
        return $this;
    }

    /**
     * 是否首发素材
     * @return bool
     */
    public function getIsFirstPublish(): ?bool
    {
        return $this->isFirstPublish;
    }

    /**
     * 是否首发素材
     * @param bool $isFirstPublish
     * @return self
     */
    public function setIsFirstPublish(?bool $isFirstPublish): self
    {
        $this->isFirstPublish = $isFirstPublish;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAdHighQualityMaterial !== null) {
            $result['is_ad_high_quality_material'] = $this->isAdHighQualityMaterial;
        }
        if ($this->isFirstPublish !== null) {
            $result['is_first_publish'] = $this->isFirstPublish;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_ad_high_quality_material'] ?? null) !== null) {
            $obj->isAdHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_first_publish'] ?? null) !== null) {
            $obj->isFirstPublish = (bool) $v;
        }
        return $obj;
    }
}
