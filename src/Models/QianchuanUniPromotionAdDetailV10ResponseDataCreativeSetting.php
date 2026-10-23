<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataCreativeSetting implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $creativeCombineType = null;

    /**
     * @var bool
     */
    protected ?bool $creativeCombineTypelive = null;

    /**
     * @var bool
     */
    protected ?bool $hideInAweme = null;

    /**
     * @var bool
     */
    protected ?bool $smartSelectMaterial = null;

    /**
     * @return bool
     */
    public function getCreativeCombineType(): ?bool
    {
        return $this->creativeCombineType;
    }

    /**
     * @param bool $creativeCombineType
     * @return self
     */
    public function setCreativeCombineType(?bool $creativeCombineType): self
    {
        $this->creativeCombineType = $creativeCombineType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreativeCombineTypelive(): ?bool
    {
        return $this->creativeCombineTypelive;
    }

    /**
     * @param bool $creativeCombineTypelive
     * @return self
     */
    public function setCreativeCombineTypelive(?bool $creativeCombineTypelive): self
    {
        $this->creativeCombineTypelive = $creativeCombineTypelive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideInAweme(): ?bool
    {
        return $this->hideInAweme;
    }

    /**
     * @param bool $hideInAweme
     * @return self
     */
    public function setHideInAweme(?bool $hideInAweme): self
    {
        $this->hideInAweme = $hideInAweme;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSmartSelectMaterial(): ?bool
    {
        return $this->smartSelectMaterial;
    }

    /**
     * @param bool $smartSelectMaterial
     * @return self
     */
    public function setSmartSelectMaterial(?bool $smartSelectMaterial): self
    {
        $this->smartSelectMaterial = $smartSelectMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeCombineType !== null) {
            $result['creative_combine_type'] = $this->creativeCombineType;
        }
        if ($this->creativeCombineTypelive !== null) {
            $result['creative_combine_typelive'] = $this->creativeCombineTypelive;
        }
        if ($this->hideInAweme !== null) {
            $result['hide_in_aweme'] = $this->hideInAweme;
        }
        if ($this->smartSelectMaterial !== null) {
            $result['smart_select_material'] = $this->smartSelectMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_combine_type'] ?? null) !== null) {
            $obj->creativeCombineType = (bool) $v;
        }
        if (($v = $data['creative_combine_typelive'] ?? null) !== null) {
            $obj->creativeCombineTypelive = (bool) $v;
        }
        if (($v = $data['hide_in_aweme'] ?? null) !== null) {
            $obj->hideInAweme = (bool) $v;
        }
        if (($v = $data['smart_select_material'] ?? null) !== null) {
            $obj->smartSelectMaterial = (bool) $v;
        }
        return $obj;
    }
}
