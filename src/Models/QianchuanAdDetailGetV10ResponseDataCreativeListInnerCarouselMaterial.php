<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio $audio = null;

    /**
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio
     */
    public function getAudio(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio
    {
        return $this->audio;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio $audio
     * @return self
     */
    public function setAudio(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialImagesInner[] $images
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
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
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
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio'] ?? null) !== null && is_array($v)) {
            $obj->audio = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialAudio::fromArray($v);
        }
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterialImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        return $obj;
    }
}
