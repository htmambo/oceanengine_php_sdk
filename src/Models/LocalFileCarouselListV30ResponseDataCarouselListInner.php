<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileCarouselListV30ResponseDataCarouselListInner implements \JsonSerializable
{
    /**
     * 图文素材库素材id
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 图文创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 图文图片信息
     * @var \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerImageListInner[]
     */
    protected ?array $imageList = null;

    /**
     * @var \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic
     */
    protected ?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic $music = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * 图文素材库素材id
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * 图文素材库素材id
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 图文创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 图文创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 图文图片信息
     * @return \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerImageListInner[]
     */
    public function getImageList(): ?array
    {
        return $this->imageList;
    }

    /**
     * 图文图片信息
     * @param \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerImageListInner[] $imageList
     * @return self
     */
    public function setImageList(?array $imageList): self
    {
        $this->imageList = $imageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic
     */
    public function getMusic(): ?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic
    {
        return $this->music;
    }

    /**
     * @param \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic $music
     * @return self
     */
    public function setMusic(?\Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic $music): self
    {
        $this->music = $music;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
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
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->imageList !== null) {
            $result['image_list'] = $this->imageList;
        }
        if ($this->music !== null) {
            $result['music'] = $this->music;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['image_list'] ?? null) !== null && is_array($v)) {
            $obj->imageList = array_map(fn ($vv) => \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['music'] ?? null) !== null && is_array($v)) {
            $obj->music = \Oceanengine\Models\LocalFileCarouselListV30ResponseDataCarouselListInnerMusic::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
