<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInner implements \JsonSerializable
{
    /**
     * 摘要素材
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInner[]
     */
    protected ?array $abstractMaterials = null;

    /**
     * 创意id
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial $decorationMaterial = null;

    /**
     * 创意图片素材
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInner[]
     */
    protected ?array $imageMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial $interactiveMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial $playableMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial $videoMaterial = null;

    /**
     * 摘要素材
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInner[]
     */
    public function getAbstractMaterials(): ?array
    {
        return $this->abstractMaterials;
    }

    /**
     * 摘要素材
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInner[] $abstractMaterials
     * @return self
     */
    public function setAbstractMaterials(?array $abstractMaterials): self
    {
        $this->abstractMaterials = $abstractMaterials;
        return $this;
    }

    /**
     * 创意id
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意id
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial
     */
    public function getDecorationMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial
    {
        return $this->decorationMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial $decorationMaterial
     * @return self
     */
    public function setDecorationMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial $decorationMaterial): self
    {
        $this->decorationMaterial = $decorationMaterial;
        return $this;
    }

    /**
     * 创意图片素材
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInner[]
     */
    public function getImageMaterials(): ?array
    {
        return $this->imageMaterials;
    }

    /**
     * 创意图片素材
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInner[] $imageMaterials
     * @return self
     */
    public function setImageMaterials(?array $imageMaterials): self
    {
        $this->imageMaterials = $imageMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial
     */
    public function getInteractiveMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial
    {
        return $this->interactiveMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial $interactiveMaterial
     * @return self
     */
    public function setInteractiveMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial $interactiveMaterial): self
    {
        $this->interactiveMaterial = $interactiveMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial
     */
    public function getPlayableMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial
    {
        return $this->playableMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial $playableMaterial
     * @return self
     */
    public function setPlayableMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial $playableMaterial): self
    {
        $this->playableMaterial = $playableMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial $videoMaterial): self
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
        if ($this->abstractMaterials !== null) {
            $result['abstract_materials'] = $this->abstractMaterials;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->decorationMaterial !== null) {
            $result['decoration_material'] = $this->decorationMaterial;
        }
        if ($this->imageMaterials !== null) {
            $result['image_materials'] = $this->imageMaterials;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->interactiveMaterial !== null) {
            $result['interactive_material'] = $this->interactiveMaterial;
        }
        if ($this->playableMaterial !== null) {
            $result['playable_material'] = $this->playableMaterial;
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
        if (($v = $data['abstract_materials'] ?? null) !== null && is_array($v)) {
            $obj->abstractMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['decoration_material'] ?? null) !== null && is_array($v)) {
            $obj->decorationMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial::fromArray($v);
        }
        if (($v = $data['image_materials'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['interactive_material'] ?? null) !== null && is_array($v)) {
            $obj->interactiveMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerInteractiveMaterial::fromArray($v);
        }
        if (($v = $data['playable_material'] ?? null) !== null && is_array($v)) {
            $obj->playableMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerPlayableMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
