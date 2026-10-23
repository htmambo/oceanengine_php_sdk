<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInner implements \JsonSerializable
{
    /**
     * 素材是否是ai生成，true为是
     * @var bool
     */
    protected ?bool $creativeIsAigc = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30MaterialListCreativeTemplate
     */
    protected ?string $creativeTemplate = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent $materialComponent = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 创意名称
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * 素材是否是ai生成，true为是
     * @return bool
     */
    public function getCreativeIsAigc(): ?bool
    {
        return $this->creativeIsAigc;
    }

    /**
     * 素材是否是ai生成，true为是
     * @param bool $creativeIsAigc
     * @return self
     */
    public function setCreativeIsAigc(?bool $creativeIsAigc): self
    {
        $this->creativeIsAigc = $creativeIsAigc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30MaterialListCreativeTemplate
     */
    public function getCreativeTemplate(): ?string
    {
        return $this->creativeTemplate;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30MaterialListCreativeTemplate $creativeTemplate
     * @return self
     */
    public function setCreativeTemplate(?string $creativeTemplate): self
    {
        $this->creativeTemplate = $creativeTemplate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent
     */
    public function getMaterialComponent(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent
    {
        return $this->materialComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent $materialComponent
     * @return self
     */
    public function setMaterialComponent(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent $materialComponent): self
    {
        $this->materialComponent = $materialComponent;
        return $this;
    }

    /**
     * 创意ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 创意ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 创意名称
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * 创意名称
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeIsAigc !== null) {
            $result['creative_is_aigc'] = $this->creativeIsAigc;
        }
        if ($this->creativeTemplate !== null) {
            $result['creative_template'] = $this->creativeTemplate;
        }
        if ($this->materialComponent !== null) {
            $result['material_component'] = $this->materialComponent;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_is_aigc'] ?? null) !== null) {
            $obj->creativeIsAigc = (bool) $v;
        }
        if (($v = $data['creative_template'] ?? null) !== null) {
            $obj->creativeTemplate = (string) $v;
        }
        if (($v = $data['material_component'] ?? null) !== null && is_array($v)) {
            $obj->materialComponent = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent::fromArray($v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
        }
        return $obj;
    }
}
