<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialGetV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 素材名称
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * @var \Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo
     */
    protected ?\Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo $videoInfo = null;

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
     * 素材名称
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * 素材名称
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
