<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataInstantPlayMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * @var string
     */
    protected ?string $coverUri = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusFrist
     */
    protected ?string $materialStatusFrist = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusSecond[]
     */
    protected ?array $materialStatusSecond = null;

    /**
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverUri(): ?string
    {
        return $this->coverUri;
    }

    /**
     * @param string $coverUri
     * @return self
     */
    public function setCoverUri(?string $coverUri): self
    {
        $this->coverUri = $coverUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusFrist
     */
    public function getMaterialStatusFrist(): ?string
    {
        return $this->materialStatusFrist;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusFrist $materialStatusFrist
     * @return self
     */
    public function setMaterialStatusFrist(?string $materialStatusFrist): self
    {
        $this->materialStatusFrist = $materialStatusFrist;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusSecond[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataInstantPlayMaterialListMaterialStatusSecond[] $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?array $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appPlayUri !== null) {
            $result['app_play_uri'] = $this->appPlayUri;
        }
        if ($this->coverUri !== null) {
            $result['cover_uri'] = $this->coverUri;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialStatusFrist !== null) {
            $result['material_status_frist'] = $this->materialStatusFrist;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
        }
        if (($v = $data['cover_uri'] ?? null) !== null) {
            $obj->coverUri = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_status_frist'] ?? null) !== null) {
            $obj->materialStatusFrist = (string) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialStatusSecond = $v;
        }
        return $obj;
    }
}
