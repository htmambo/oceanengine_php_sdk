<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeUpdateV2RequestCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerAbstractMaterialsInner[]
     */
    protected ?array $abstractMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerComponentMaterialsInner[]
     */
    protected ?array $componentMaterials = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial $decorationMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid
     */
    protected ?string $derivePosterCid = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInner[]
     */
    protected ?array $imageMaterials = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial $interactiveMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial $playableMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial $subTitleMaterial = null;

    /**
     * @var string
     */
    protected ?string $thirdPartyId = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerAbstractMaterialsInner[]
     */
    public function getAbstractMaterials(): ?array
    {
        return $this->abstractMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerAbstractMaterialsInner[] $abstractMaterials
     * @return self
     */
    public function setAbstractMaterials(?array $abstractMaterials): self
    {
        $this->abstractMaterials = $abstractMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerComponentMaterialsInner[]
     */
    public function getComponentMaterials(): ?array
    {
        return $this->componentMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerComponentMaterialsInner[] $componentMaterials
     * @return self
     */
    public function setComponentMaterials(?array $componentMaterials): self
    {
        $this->componentMaterials = $componentMaterials;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial
     */
    public function getDecorationMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial
    {
        return $this->decorationMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial $decorationMaterial
     * @return self
     */
    public function setDecorationMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial $decorationMaterial): self
    {
        $this->decorationMaterial = $decorationMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid
     */
    public function getDerivePosterCid(): ?string
    {
        return $this->derivePosterCid;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid $derivePosterCid
     * @return self
     */
    public function setDerivePosterCid(?string $derivePosterCid): self
    {
        $this->derivePosterCid = $derivePosterCid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInner[]
     */
    public function getImageMaterials(): ?array
    {
        return $this->imageMaterials;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInner[] $imageMaterials
     * @return self
     */
    public function setImageMaterials(?array $imageMaterials): self
    {
        $this->imageMaterials = $imageMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial
     */
    public function getInteractiveMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial
    {
        return $this->interactiveMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial $interactiveMaterial
     * @return self
     */
    public function setInteractiveMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial $interactiveMaterial): self
    {
        $this->interactiveMaterial = $interactiveMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial
     */
    public function getPlayableMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial
    {
        return $this->playableMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial $playableMaterial
     * @return self
     */
    public function setPlayableMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial $playableMaterial): self
    {
        $this->playableMaterial = $playableMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial
     */
    public function getSubTitleMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial
    {
        return $this->subTitleMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial $subTitleMaterial
     * @return self
     */
    public function setSubTitleMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial $subTitleMaterial): self
    {
        $this->subTitleMaterial = $subTitleMaterial;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyId(): ?string
    {
        return $this->thirdPartyId;
    }

    /**
     * @param string $thirdPartyId
     * @return self
     */
    public function setThirdPartyId(?string $thirdPartyId): self
    {
        $this->thirdPartyId = $thirdPartyId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial $videoMaterial): self
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
        if ($this->componentMaterials !== null) {
            $result['component_materials'] = $this->componentMaterials;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->decorationMaterial !== null) {
            $result['decoration_material'] = $this->decorationMaterial;
        }
        if ($this->derivePosterCid !== null) {
            $result['derive_poster_cid'] = $this->derivePosterCid;
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
        if ($this->subTitleMaterial !== null) {
            $result['sub_title_material'] = $this->subTitleMaterial;
        }
        if ($this->thirdPartyId !== null) {
            $result['third_party_id'] = $this->thirdPartyId;
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
            $obj->abstractMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerAbstractMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['component_materials'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerComponentMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['decoration_material'] ?? null) !== null && is_array($v)) {
            $obj->decorationMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerDecorationMaterial::fromArray($v);
        }
        if (($v = $data['derive_poster_cid'] ?? null) !== null) {
            $obj->derivePosterCid = (string) $v;
        }
        if (($v = $data['image_materials'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterials = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['interactive_material'] ?? null) !== null && is_array($v)) {
            $obj->interactiveMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerInteractiveMaterial::fromArray($v);
        }
        if (($v = $data['playable_material'] ?? null) !== null && is_array($v)) {
            $obj->playableMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerPlayableMaterial::fromArray($v);
        }
        if (($v = $data['sub_title_material'] ?? null) !== null && is_array($v)) {
            $obj->subTitleMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerSubTitleMaterial::fromArray($v);
        }
        if (($v = $data['third_party_id'] ?? null) !== null) {
            $obj->thirdPartyId = (string) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
