<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
     */
    public function getRoomMaterial(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial
    {
        return $this->roomMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial
     * @return self
     */
    public function setRoomMaterial(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial $roomMaterial): self
    {
        $this->roomMaterial = $roomMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial $videoMaterial): self
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
            $obj->imageMaterial = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoImageMaterial::fromArray($v);
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['room_material'] ?? null) !== null && is_array($v)) {
            $obj->roomMaterial = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoRoomMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
