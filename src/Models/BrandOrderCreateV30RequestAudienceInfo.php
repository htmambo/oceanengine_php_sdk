<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderCreateV30RequestAudienceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAc
     */
    protected ?string $ac = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAges[]
     */
    protected ?array $ages = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo
     */
    protected ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo $districtInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30AudienceInfoGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30AudienceInfoPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo
     */
    protected ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo $retargetingInfo = null;

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAges[]
     */
    public function getAges(): ?array
    {
        return $this->ages;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\BrandOrderCreateV30AudienceInfoAges[] $ages
     * @return self
     */
    public function setAges(?array $ages): self
    {
        $this->ages = $ages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo
     */
    public function getDistrictInfo(): ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo
    {
        return $this->districtInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo $districtInfo
     * @return self
     */
    public function setDistrictInfo(?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo $districtInfo): self
    {
        $this->districtInfo = $districtInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30AudienceInfoGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30AudienceInfoGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30AudienceInfoPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30AudienceInfoPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo
     */
    public function getRetargetingInfo(): ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo
    {
        return $this->retargetingInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo $retargetingInfo
     * @return self
     */
    public function setRetargetingInfo(?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo $retargetingInfo): self
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
            $obj->districtInfo = \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoDistrictInfo::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['retargeting_info'] ?? null) !== null && is_array($v)) {
            $obj->retargetingInfo = \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfoRetargetingInfo::fromArray($v);
        }
        return $obj;
    }
}
