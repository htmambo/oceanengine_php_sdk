<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInnerQualTypesInner implements \JsonSerializable
{
    /**
     * 资质类型id
     * @var int
     */
    protected ?int $qualType = null;

    /**
     * 资质类型名称
     * @var string
     */
    protected ?string $qualTypeName = null;

    /**
     * 资质类型id
     * @return int
     */
    public function getQualType(): ?int
    {
        return $this->qualType;
    }

    /**
     * 资质类型id
     * @param int $qualType
     * @return self
     */
    public function setQualType(?int $qualType): self
    {
        $this->qualType = $qualType;
        return $this;
    }

    /**
     * 资质类型名称
     * @return string
     */
    public function getQualTypeName(): ?string
    {
        return $this->qualTypeName;
    }

    /**
     * 资质类型名称
     * @param string $qualTypeName
     * @return self
     */
    public function setQualTypeName(?string $qualTypeName): self
    {
        $this->qualTypeName = $qualTypeName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->qualType !== null) {
            $result['qual_type'] = $this->qualType;
        }
        if ($this->qualTypeName !== null) {
            $result['qual_type_name'] = $this->qualTypeName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['qual_type'] ?? null) !== null) {
            $obj->qualType = (int) $v;
        }
        if (($v = $data['qual_type_name'] ?? null) !== null) {
            $obj->qualTypeName = (string) $v;
        }
        return $obj;
    }
}
