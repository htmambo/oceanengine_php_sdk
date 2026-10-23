<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataTrialPlayMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * @var string
     */
    protected ?string $appPlayVersion = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist
     */
    protected ?string $materialStatusFrist = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusSecond[]
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
    public function getAppPlayVersion(): ?string
    {
        return $this->appPlayVersion;
    }

    /**
     * @param string $appPlayVersion
     * @return self
     */
    public function setAppPlayVersion(?string $appPlayVersion): self
    {
        $this->appPlayVersion = $appPlayVersion;
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
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode $imageMode
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
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist
     */
    public function getMaterialStatusFrist(): ?string
    {
        return $this->materialStatusFrist;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist $materialStatusFrist
     * @return self
     */
    public function setMaterialStatusFrist(?string $materialStatusFrist): self
    {
        $this->materialStatusFrist = $materialStatusFrist;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusSecond[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusSecond[] $materialStatusSecond
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
        if ($this->appPlayVersion !== null) {
            $result['app_play_version'] = $this->appPlayVersion;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
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
        if (($v = $data['app_play_version'] ?? null) !== null) {
            $obj->appPlayVersion = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
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
