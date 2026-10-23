<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryStockBalanceV30AudienceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAc
     */
    protected ?string $ac = null;

    /**
     * 兴趣
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAges[]
     */
    protected ?array $ages = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo
     */
    protected ?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo $districtInfo = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo
     */
    protected ?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo $retargetingInfo = null;

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * 兴趣
     * @return int[]
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * 兴趣
     * @param int[] $actionCategories
     * @return self
     */
    public function setActionCategories(?array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAges[]
     */
    public function getAges(): ?array
    {
        return $this->ages;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoAges[] $ages
     * @return self
     */
    public function setAges(?array $ages): self
    {
        $this->ages = $ages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo
     */
    public function getDistrictInfo(): ?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo
    {
        return $this->districtInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo $districtInfo
     * @return self
     */
    public function setDistrictInfo(?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo $districtInfo): self
    {
        $this->districtInfo = $districtInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo
     */
    public function getRetargetingInfo(): ?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo
    {
        return $this->retargetingInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo $retargetingInfo
     * @return self
     */
    public function setRetargetingInfo(?\Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo $retargetingInfo): self
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
        if ($this->actionCategories !== null) {
            $result['action_categories'] = $this->actionCategories;
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
        if (($v = $data['action_categories'] ?? null) !== null && is_array($v)) {
            $obj->actionCategories = $v;
        }
        if (($v = $data['ages'] ?? null) !== null && is_array($v)) {
            $obj->ages = $v;
        }
        if (($v = $data['district_info'] ?? null) !== null && is_array($v)) {
            $obj->districtInfo = \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoDistrictInfo::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['retargeting_info'] ?? null) !== null && is_array($v)) {
            $obj->retargetingInfo = \Oceanengine\Models\BrandToolQueryStockBalanceV30AudienceInfoRetargetingInfo::fromArray($v);
        }
        return $obj;
    }
}
