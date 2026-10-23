<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
     */
    public function getRoomMaterial(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
    {
        return $this->roomMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial
     * @return self
     */
    public function setRoomMaterial(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial): self
    {
        $this->roomMaterial = $roomMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->roomMaterial !== null) {
            $result['room_material'] = $this->roomMaterial;
        }
        if ($this->titleMaterial !== null) {
            $result['title_material'] = $this->titleMaterial;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial::fromArray($v);
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['room_material'] ?? null) !== null && is_array($v)) {
            $obj->roomMaterial = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
