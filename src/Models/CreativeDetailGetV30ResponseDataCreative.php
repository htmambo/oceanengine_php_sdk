<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreative implements \JsonSerializable
{
    /**
     * 摘要素材
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInner[]
     */
    protected ?array $abstractMaterials = null;

    /**
     * 组件信息
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeComponentMaterialsInner[]
     */
    protected ?array $componentMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial $decorationMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInner[]
     */
    protected ?array $imageMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial $subTitleMaterial = null;

    /**
     * 创意标题素材
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInner[]
     */
    protected ?array $titleMaterials = null;

    /**
     * 视频素材信息
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInner[]
     */
    protected ?array $videoMaterials = null;

    /**
     * 摘要素材
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInner[]
     */
    public function getAbstractMaterials(): ?array
    {
        return $this->abstractMaterials;
    }

    /**
     * 摘要素材
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInner[] $abstractMaterials
     * @return self
     */
    public function setAbstractMaterials(?array $abstractMaterials): self
    {
        $this->abstractMaterials = $abstractMaterials;
        return $this;
    }

    /**
     * 组件信息
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeComponentMaterialsInner[]
     */
    public function getComponentMaterials(): ?array
    {
        return $this->componentMaterials;
    }

    /**
     * 组件信息
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeComponentMaterialsInner[] $componentMaterials
     * @return self
     */
    public function setComponentMaterials(?array $componentMaterials): self
    {
        $this->componentMaterials = $componentMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial
     */
    public function getDecorationMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial
    {
        return $this->decorationMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial $decorationMaterial
     * @return self
     */
    public function setDecorationMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial $decorationMaterial): self
    {
        $this->decorationMaterial = $decorationMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInner[]
     */
    public function getImageMaterials(): ?array
    {
        return $this->imageMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInner[] $imageMaterials
     * @return self
     */
    public function setImageMaterials(?array $imageMaterials): self
    {
        $this->imageMaterials = $imageMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial
     */
    public function getSubTitleMaterial(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial
    {
        return $this->subTitleMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial $subTitleMaterial
     * @return self
     */
    public function setSubTitleMaterial(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial $subTitleMaterial): self
    {
        $this->subTitleMaterial = $subTitleMaterial;
        return $this;
    }

    /**
     * 创意标题素材
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInner[]
     */
    public function getTitleMaterials(): ?array
    {
        return $this->titleMaterials;
    }

    /**
     * 创意标题素材
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInner[] $titleMaterials
     * @return self
     */
    public function setTitleMaterials(?array $titleMaterials): self
    {
        $this->titleMaterials = $titleMaterials;
        return $this;
    }

    /**
     * 视频素材信息
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInner[]
     */
    public function getVideoMaterials(): ?array
    {
        return $this->videoMaterials;
    }

    /**
     * 视频素材信息
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInner[] $videoMaterials
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
            $obj->abstractMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['component_materials'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeComponentMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['decoration_material'] ?? null) !== null && is_array($v)) {
            $obj->decorationMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeDecorationMaterial::fromArray($v);
        }
        if (($v = $data['image_materials'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['sub_title_material'] ?? null) !== null && is_array($v)) {
            $obj->subTitleMaterial = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeSubTitleMaterial::fromArray($v);
        }
        if (($v = $data['title_materials'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['video_materials'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
