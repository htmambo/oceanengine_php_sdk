<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsImageMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsImageMaterialListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsImageMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsImageMaterialListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsImageMaterialListInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsImageMaterialListInnerImagesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
