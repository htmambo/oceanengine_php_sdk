<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerMaterialAdjustInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $falseReason = null;

    /**
     * @var bool
     */
    protected ?bool $ifMaterial = null;

    /**
     * @var \Oceanengine\Models\OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType
     */
    protected ?string $materialAdjustType = null;

    /**
     * @var int
     */
    protected ?int $quota = null;

    /**
     * @return string
     */
    public function getFalseReason(): ?string
    {
        return $this->falseReason;
    }

    /**
     * @param string $falseReason
     * @return self
     */
    public function setFalseReason(?string $falseReason): self
    {
        $this->falseReason = $falseReason;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIfMaterial(): ?bool
    {
        return $this->ifMaterial;
    }

    /**
     * @param bool $ifMaterial
     * @return self
     */
    public function setIfMaterial(?bool $ifMaterial): self
    {
        $this->ifMaterial = $ifMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType
     */
    public function getMaterialAdjustType(): ?string
    {
        return $this->materialAdjustType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType $materialAdjustType
     * @return self
     */
    public function setMaterialAdjustType(?string $materialAdjustType): self
    {
        $this->materialAdjustType = $materialAdjustType;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return self
     */
    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->falseReason !== null) {
            $result['false_reason'] = $this->falseReason;
        }
        if ($this->ifMaterial !== null) {
            $result['if_material'] = $this->ifMaterial;
        }
        if ($this->materialAdjustType !== null) {
            $result['material_adjust_type'] = $this->materialAdjustType;
        }
        if ($this->quota !== null) {
            $result['quota'] = $this->quota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['false_reason'] ?? null) !== null) {
            $obj->falseReason = (string) $v;
        }
        if (($v = $data['if_material'] ?? null) !== null) {
            $obj->ifMaterial = (bool) $v;
        }
        if (($v = $data['material_adjust_type'] ?? null) !== null) {
            $obj->materialAdjustType = (string) $v;
        }
        if (($v = $data['quota'] ?? null) !== null) {
            $obj->quota = (int) $v;
        }
        return $obj;
    }
}
