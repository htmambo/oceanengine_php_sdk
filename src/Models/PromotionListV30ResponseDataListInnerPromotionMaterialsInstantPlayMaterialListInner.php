<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsInstantPlayMaterialListInner implements \JsonSerializable
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
    protected ?string $coverUri = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus
     */
    protected ?string $materialOptStatus = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialStatus
     */
    protected ?string $materialStatus = null;

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
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListImageMode $imageMode
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
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus
     */
    public function getMaterialOptStatus(): ?string
    {
        return $this->materialOptStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialOptStatus $materialOptStatus
     * @return self
     */
    public function setMaterialOptStatus(?string $materialOptStatus): self
    {
        $this->materialOptStatus = $materialOptStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsInstantPlayMaterialListMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
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
        if ($this->materialOptStatus !== null) {
            $result['material_opt_status'] = $this->materialOptStatus;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
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
        if (($v = $data['material_opt_status'] ?? null) !== null) {
            $obj->materialOptStatus = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        return $obj;
    }
}
