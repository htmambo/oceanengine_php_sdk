<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoCarouselMaterial implements \JsonSerializable
{
    /**
     * 图文描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoCarouselMaterialImageInner[]
     */
    protected ?array $image = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * 图文标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 图文描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 图文描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoCarouselMaterialImageInner[]
     */
    public function getImage(): ?array
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoCarouselMaterialImageInner[] $image
     * @return self
     */
    public function setImage(?array $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * @param string $musicUrl
     * @return self
     */
    public function setMusicUrl(?string $musicUrl): self
    {
        $this->musicUrl = $musicUrl;
        return $this;
    }

    /**
     * 图文标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 图文标题
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->musicUrl !== null) {
            $result['music_url'] = $this->musicUrl;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoCarouselMaterialImageInner::fromArray($vv), $v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['music_url'] ?? null) !== null) {
            $obj->musicUrl = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
