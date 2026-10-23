<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListVideoMaterialInner[] $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?array $videoMaterial): self
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
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
