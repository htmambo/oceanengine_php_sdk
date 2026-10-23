<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterialVideoMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $coverWebUri = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
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
    protected ?string $videoId = null;

    /**
     * @return string
     */
    public function getCoverWebUri(): ?string
    {
        return $this->coverWebUri;
    }

    /**
     * @param string $coverWebUri
     * @return self
     */
    public function setCoverWebUri(?string $coverWebUri): self
    {
        $this->coverWebUri = $coverWebUri;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
     */
    public function getIsFfSeeSetting(): ?string
    {
        return $this->isFfSeeSetting;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting $isFfSeeSetting
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
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverWebUri !== null) {
            $result['cover_web_uri'] = $this->coverWebUri;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
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
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_web_uri'] ?? null) !== null) {
            $obj->coverWebUri = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
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
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
