<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryStockV30AudienceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoAc
     */
    protected ?string $ac = null;

    /**
     * 年龄定向，支持的枚举值：<br> BETWEEN18_23：18～23岁<br> BETWEEN24_30：24～30岁<br> BETWEEN31_40：31～40岁<br> BETWEEN41_49：41～49岁<br> ABOVE50：50岁及以上 UNLIMITED：不限
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoAges[]
     */
    protected ?array $ages = null;

    /**
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo
     */
    protected ?\Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo $districtInfo = null;

    /**
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo
     */
    protected ?\Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo $retargetingInfo = null;

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * 年龄定向，支持的枚举值：<br> BETWEEN18_23：18～23岁<br> BETWEEN24_30：24～30岁<br> BETWEEN31_40：31～40岁<br> BETWEEN41_49：41～49岁<br> ABOVE50：50岁及以上 UNLIMITED：不限
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoAges[]
     */
    public function getAges(): ?array
    {
        return $this->ages;
    }

    /**
     * 年龄定向，支持的枚举值：<br> BETWEEN18_23：18～23岁<br> BETWEEN24_30：24～30岁<br> BETWEEN31_40：31～40岁<br> BETWEEN41_49：41～49岁<br> ABOVE50：50岁及以上 UNLIMITED：不限
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoAges[] $ages
     * @return self
     */
    public function setAges(?array $ages): self
    {
        $this->ages = $ages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo
     */
    public function getDistrictInfo(): ?\Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo
    {
        return $this->districtInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo $districtInfo
     * @return self
     */
    public function setDistrictInfo(?\Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo $districtInfo): self
    {
        $this->districtInfo = $districtInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo
     */
    public function getRetargetingInfo(): ?\Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo
    {
        return $this->retargetingInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo $retargetingInfo
     * @return self
     */
    public function setRetargetingInfo(?\Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo $retargetingInfo): self
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
            $obj->districtInfo = \Oceanengine\Models\BrandQueryStockV30AudienceInfoDistrictInfo::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['retargeting_info'] ?? null) !== null && is_array($v)) {
            $obj->retargetingInfo = \Oceanengine\Models\BrandQueryStockV30AudienceInfoRetargetingInfo::fromArray($v);
        }
        return $obj;
    }
}
