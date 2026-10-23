<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeUpdateV2RequestCreative implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInner[]
     */
    protected ?array $abstractMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeComponentMaterialsInner[]
     */
    protected ?array $componentMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial $decorationMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeImageMaterialsInner[]
     */
    protected ?array $imageMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial $subTitleMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeTitleMaterialsInner[]
     */
    protected ?array $titleMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeVideoMaterialsInner[]
     */
    protected ?array $videoMaterials = null;

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInner[]
     */
    public function getAbstractMaterials(): ?array
    {
        return $this->abstractMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInner[] $abstractMaterials
     * @return self
     */
    public function setAbstractMaterials(?array $abstractMaterials): self
    {
        $this->abstractMaterials = $abstractMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeComponentMaterialsInner[]
     */
    public function getComponentMaterials(): ?array
    {
        return $this->componentMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeComponentMaterialsInner[] $componentMaterials
     * @return self
     */
    public function setComponentMaterials(?array $componentMaterials): self
    {
        $this->componentMaterials = $componentMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial
     */
    public function getDecorationMaterial(): ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial
    {
        return $this->decorationMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial $decorationMaterial
     * @return self
     */
    public function setDecorationMaterial(?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial $decorationMaterial): self
    {
        $this->decorationMaterial = $decorationMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeImageMaterialsInner[]
     */
    public function getImageMaterials(): ?array
    {
        return $this->imageMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeImageMaterialsInner[] $imageMaterials
     * @return self
     */
    public function setImageMaterials(?array $imageMaterials): self
    {
        $this->imageMaterials = $imageMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial
     */
    public function getSubTitleMaterial(): ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial
    {
        return $this->subTitleMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial $subTitleMaterial
     * @return self
     */
    public function setSubTitleMaterial(?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial $subTitleMaterial): self
    {
        $this->subTitleMaterial = $subTitleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeTitleMaterialsInner[]
     */
    public function getTitleMaterials(): ?array
    {
        return $this->titleMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeTitleMaterialsInner[] $titleMaterials
     * @return self
     */
    public function setTitleMaterials(?array $titleMaterials): self
    {
        $this->titleMaterials = $titleMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeVideoMaterialsInner[]
     */
    public function getVideoMaterials(): ?array
    {
        return $this->videoMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeVideoMaterialsInner[] $videoMaterials
     * @return self
     */
    public function setVideoMaterials(?array $videoMaterials): self
    {
        $this->videoMaterials = $videoMaterials;
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
        if ($this->componentMaterials !== null) {
            $result['component_materials'] = $this->componentMaterials;
        }
        if ($this->decorationMaterial !== null) {
            $result['decoration_material'] = $this->decorationMaterial;
        }
        if ($this->imageMaterials !== null) {
            $result['image_materials'] = $this->imageMaterials;
        }
        if ($this->subTitleMaterial !== null) {
            $result['sub_title_material'] = $this->subTitleMaterial;
        }
        if ($this->titleMaterials !== null) {
            $result['title_materials'] = $this->titleMaterials;
        }
        if ($this->videoMaterials !== null) {
            $result['video_materials'] = $this->videoMaterials;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abstract_materials'] ?? null) !== null && is_array($v)) {
            $obj->abstractMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['component_materials'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeComponentMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['decoration_material'] ?? null) !== null && is_array($v)) {
            $obj->decorationMaterial = \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeDecorationMaterial::fromArray($v);
        }
        if (($v = $data['image_materials'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeImageMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['sub_title_material'] ?? null) !== null && is_array($v)) {
            $obj->subTitleMaterial = \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeSubTitleMaterial::fromArray($v);
        }
        if (($v = $data['title_materials'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeTitleMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['video_materials'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeVideoMaterialsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
