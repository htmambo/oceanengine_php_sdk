<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupOptionsV2ResponseDataDistrictInnerSubRegionInnerSubRegionInner implements \JsonSerializable
{
    /**
     * 地域代码
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType
     */
    protected ?string $districtType = null;

    /**
     * 地域名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 地域代码
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 地域代码
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType
     */
    public function getDistrictType(): ?string
    {
        return $this->districtType;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType $districtType
     * @return self
     */
    public function setDistrictType(?string $districtType): self
    {
        $this->districtType = $districtType;
        return $this;
    }

    /**
     * 地域名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 地域名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->districtType !== null) {
            $result['district_type'] = $this->districtType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['district_type'] ?? null) !== null) {
            $obj->districtType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
