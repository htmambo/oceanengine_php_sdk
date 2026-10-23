<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterialCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * @var string[]
     */
    protected ?array $imageUri = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialCarouselMaterialListIsFfSeeSetting
     */
    protected ?string $isFfSeeSetting = null;

    /**
     * @var int
     */
    protected ?int $materialStatusFirst = null;

    /**
     * @var int[]
     */
    protected ?array $materialStatusSecond = null;

    /**
     * @var string
     */
    protected ?string $musicUrl = null;

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
     * @return string[]
     */
    public function getImageUri(): ?array
    {
        return $this->imageUri;
    }

    /**
     * @param string[] $imageUri
     * @return self
     */
    public function setImageUri(?array $imageUri): self
    {
        $this->imageUri = $imageUri;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialCarouselMaterialListIsFfSeeSetting
     */
    public function getIsFfSeeSetting(): ?string
    {
        return $this->isFfSeeSetting;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialCarouselMaterialListIsFfSeeSetting $isFfSeeSetting
     * @return self
     */
    public function setIsFfSeeSetting(?string $isFfSeeSetting): self
    {
        $this->isFfSeeSetting = $isFfSeeSetting;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialStatusFirst(): ?int
    {
        return $this->materialStatusFirst;
    }

    /**
     * @param int $materialStatusFirst
     * @return self
     */
    public function setMaterialStatusFirst(?int $materialStatusFirst): self
    {
        $this->materialStatusFirst = $materialStatusFirst;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param int[] $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?array $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->imageUri !== null) {
            $result['image_uri'] = $this->imageUri;
        }
        if ($this->isFfSeeSetting !== null) {
            $result['is_ff_see_setting'] = $this->isFfSeeSetting;
        }
        if ($this->materialStatusFirst !== null) {
            $result['material_status_first'] = $this->materialStatusFirst;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
        }
        if ($this->musicUrl !== null) {
            $result['music_url'] = $this->musicUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['image_uri'] ?? null) !== null && is_array($v)) {
            $obj->imageUri = $v;
        }
        if (($v = $data['is_ff_see_setting'] ?? null) !== null) {
            $obj->isFfSeeSetting = (string) $v;
        }
        if (($v = $data['material_status_first'] ?? null) !== null) {
            $obj->materialStatusFirst = (int) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialStatusSecond = $v;
        }
        if (($v = $data['music_url'] ?? null) !== null) {
            $obj->musicUrl = (string) $v;
        }
        return $obj;
    }
}
