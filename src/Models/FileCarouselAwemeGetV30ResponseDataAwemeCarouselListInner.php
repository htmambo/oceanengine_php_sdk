<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $carouselCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $carouselPlayUrl = null;

    /**
     * @var string
     */
    protected ?string $carouselTitle = null;

    /**
     * @var \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @return string
     */
    public function getCarouselCoverUrl(): ?string
    {
        return $this->carouselCoverUrl;
    }

    /**
     * @param string $carouselCoverUrl
     * @return self
     */
    public function setCarouselCoverUrl(?string $carouselCoverUrl): self
    {
        $this->carouselCoverUrl = $carouselCoverUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarouselPlayUrl(): ?string
    {
        return $this->carouselPlayUrl;
    }

    /**
     * @param string $carouselPlayUrl
     * @return self
     */
    public function setCarouselPlayUrl(?string $carouselPlayUrl): self
    {
        $this->carouselPlayUrl = $carouselPlayUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarouselTitle(): ?string
    {
        return $this->carouselTitle;
    }

    /**
     * @param string $carouselTitle
     * @return self
     */
    public function setCarouselTitle(?string $carouselTitle): self
    {
        $this->carouselTitle = $carouselTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInnerImagesInner[] $images
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
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
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
        if ($this->carouselCoverUrl !== null) {
            $result['carousel_cover_url'] = $this->carouselCoverUrl;
        }
        if ($this->carouselPlayUrl !== null) {
            $result['carousel_play_url'] = $this->carouselPlayUrl;
        }
        if ($this->carouselTitle !== null) {
            $result['carousel_title'] = $this->carouselTitle;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_cover_url'] ?? null) !== null) {
            $obj->carouselCoverUrl = (string) $v;
        }
        if (($v = $data['carousel_play_url'] ?? null) !== null) {
            $obj->carouselPlayUrl = (string) $v;
        }
        if (($v = $data['carousel_title'] ?? null) !== null) {
            $obj->carouselTitle = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
