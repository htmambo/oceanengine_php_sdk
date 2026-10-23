<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo implements \JsonSerializable
{
    /**
     * 抖音图文id
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * 图文描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * 图片创意样式，需要一个枚举
     * @var int
     */
    protected ?int $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfoImagesInner[]
     */
    protected ?array $images = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 图文音乐播放链接
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * 图文标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 抖音图文id
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * 抖音图文id
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

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
     * 图片创意样式，需要一个枚举
     * @return int
     */
    public function getImageMode(): ?int
    {
        return $this->imageMode;
    }

    /**
     * 图片创意样式，需要一个枚举
     * @param int $imageMode
     * @return self
     */
    public function setImageMode(?int $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfoImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfoImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
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
     * 图文音乐播放链接
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * 图文音乐播放链接
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
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
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
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (int) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfoImagesInner::fromArray($vv), $v);
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
