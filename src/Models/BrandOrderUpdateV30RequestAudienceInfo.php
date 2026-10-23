<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderUpdateV30RequestAudienceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAc
     */
    protected ?string $ac = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAges[]
     */
    protected ?array $ages = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo
     */
    protected ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo $districtInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo
     */
    protected ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo $retargetingInfo = null;

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAges[]
     */
    public function getAges(): ?array
    {
        return $this->ages;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoAges[] $ages
     * @return self
     */
    public function setAges(?array $ages): self
    {
        $this->ages = $ages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo
     */
    public function getDistrictInfo(): ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo
    {
        return $this->districtInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo $districtInfo
     * @return self
     */
    public function setDistrictInfo(?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo $districtInfo): self
    {
        $this->districtInfo = $districtInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo
     */
    public function getRetargetingInfo(): ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo
    {
        return $this->retargetingInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo $retargetingInfo
     * @return self
     */
    public function setRetargetingInfo(?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo $retargetingInfo): self
    {
        $this->retargetingInfo = $retargetingInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ac !== null) {
            $result['ac'] = $this->ac;
        }
        if ($this->ages !== null) {
            $result['ages'] = $this->ages;
        }
        if ($this->districtInfo !== null) {
            $result['district_info'] = $this->districtInfo;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->retargetingInfo !== null) {
            $result['retargeting_info'] = $this->retargetingInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null) {
            $obj->ac = (string) $v;
        }
        if (($v = $data['ages'] ?? null) !== null && is_array($v)) {
            $obj->ages = $v;
        }
        if (($v = $data['district_info'] ?? null) !== null && is_array($v)) {
            $obj->districtInfo = \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoDistrictInfo::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['retargeting_info'] ?? null) !== null && is_array($v)) {
            $obj->retargetingInfo = \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo::fromArray($v);
        }
        return $obj;
    }
}
