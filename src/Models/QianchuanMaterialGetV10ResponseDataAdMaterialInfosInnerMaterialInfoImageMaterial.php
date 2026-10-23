<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterialImagesInner[]
     */
    protected ?array $images = null;

    /**
     * 更新时需要传，创建时不需要传
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource
     */
    protected ?string $source = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterialImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterialImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * 更新时需要传，创建时不需要传
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 更新时需要传，创建时不需要传
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoImageMaterialSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterialImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
