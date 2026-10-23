<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselGetV10ResponseDataCarouselsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio
     */
    protected ?\Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio $audio = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $filename = null;

    /**
     * @var \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsSource
     */
    protected ?string $source = null;

    /**
     * @return \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio
     */
    public function getAudio(): ?\Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio
    {
        return $this->audio;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio $audio
     * @return self
     */
    public function setAudio(?\Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

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
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
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
     * @return \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselGetV10DataCarouselsSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audio !== null) {
            $result['audio'] = $this->audio;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
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
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio'] ?? null) !== null && is_array($v)) {
            $obj->audio = \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerAudio::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanCarouselGetV10ResponseDataCarouselsInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        return $obj;
    }
}
