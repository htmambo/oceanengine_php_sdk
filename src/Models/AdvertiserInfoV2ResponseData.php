<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $address = null;

    /**
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * @var string
     */
    protected ?string $brand = null;

    /**
     * @var string
     */
    protected ?string $company = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $industry = null;

    /**
     * @var string
     */
    protected ?string $licenseCity = null;

    /**
     * @var string
     */
    protected ?string $licenseNo = null;

    /**
     * @var string
     */
    protected ?string $licenseProvince = null;

    /**
     * @var string
     */
    protected ?string $licenseUrl = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $note = null;

    /**
     * @var string
     */
    protected ?string $promotionArea = null;

    /**
     * @var string
     */
    protected ?string $promotionCenterCity = null;

    /**
     * @var string
     */
    protected ?string $promotionCenterProvince = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserInfoV2DataRole
     */
    protected ?string $role = null;

    /**
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * @var \Oceanengine\Models\AdvertiserInfoV2DataStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstIndustryName(): ?string
    {
        return $this->firstIndustryName;
    }

    /**
     * @param string $firstIndustryName
     * @return self
     */
    public function setFirstIndustryName(?string $firstIndustryName): self
    {
        $this->firstIndustryName = $firstIndustryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    /**
     * @param string $industry
     * @return self
     */
    public function setIndustry(?string $industry): self
    {
        $this->industry = $industry;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseCity(): ?string
    {
        return $this->licenseCity;
    }

    /**
     * @param string $licenseCity
     * @return self
     */
    public function setLicenseCity(?string $licenseCity): self
    {
        $this->licenseCity = $licenseCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNo(): ?string
    {
        return $this->licenseNo;
    }

    /**
     * @param string $licenseNo
     * @return self
     */
    public function setLicenseNo(?string $licenseNo): self
    {
        $this->licenseNo = $licenseNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseProvince(): ?string
    {
        return $this->licenseProvince;
    }

    /**
     * @param string $licenseProvince
     * @return self
     */
    public function setLicenseProvince(?string $licenseProvince): self
    {
        $this->licenseProvince = $licenseProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseUrl(): ?string
    {
        return $this->licenseUrl;
    }

    /**
     * @param string $licenseUrl
     * @return self
     */
    public function setLicenseUrl(?string $licenseUrl): self
    {
        $this->licenseUrl = $licenseUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionArea(): ?string
    {
        return $this->promotionArea;
    }

    /**
     * @param string $promotionArea
     * @return self
     */
    public function setPromotionArea(?string $promotionArea): self
    {
        $this->promotionArea = $promotionArea;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCenterCity(): ?string
    {
        return $this->promotionCenterCity;
    }

    /**
     * @param string $promotionCenterCity
     * @return self
     */
    public function setPromotionCenterCity(?string $promotionCenterCity): self
    {
        $this->promotionCenterCity = $promotionCenterCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCenterProvince(): ?string
    {
        return $this->promotionCenterProvince;
    }

    /**
     * @param string $promotionCenterProvince
     * @return self
     */
    public function setPromotionCenterProvince(?string $promotionCenterProvince): self
    {
        $this->promotionCenterProvince = $promotionCenterProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserInfoV2DataRole
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserInfoV2DataRole $role
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserInfoV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserInfoV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->agentName !== null) {
            $result['agent_name'] = $this->agentName;
        }
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->company !== null) {
            $result['company'] = $this->company;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->industry !== null) {
            $result['industry'] = $this->industry;
        }
        if ($this->licenseCity !== null) {
            $result['license_city'] = $this->licenseCity;
        }
        if ($this->licenseNo !== null) {
            $result['license_no'] = $this->licenseNo;
        }
        if ($this->licenseProvince !== null) {
            $result['license_province'] = $this->licenseProvince;
        }
        if ($this->licenseUrl !== null) {
            $result['license_url'] = $this->licenseUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->note !== null) {
            $result['note'] = $this->note;
        }
        if ($this->promotionArea !== null) {
            $result['promotion_area'] = $this->promotionArea;
        }
        if ($this->promotionCenterCity !== null) {
            $result['promotion_center_city'] = $this->promotionCenterCity;
        }
        if ($this->promotionCenterProvince !== null) {
            $result['promotion_center_province'] = $this->promotionCenterProvince;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['agent_name'] ?? null) !== null) {
            $obj->agentName = (string) $v;
        }
        if (($v = $data['brand'] ?? null) !== null) {
            $obj->brand = (string) $v;
        }
        if (($v = $data['company'] ?? null) !== null) {
            $obj->company = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['industry'] ?? null) !== null) {
            $obj->industry = (string) $v;
        }
        if (($v = $data['license_city'] ?? null) !== null) {
            $obj->licenseCity = (string) $v;
        }
        if (($v = $data['license_no'] ?? null) !== null) {
            $obj->licenseNo = (string) $v;
        }
        if (($v = $data['license_province'] ?? null) !== null) {
            $obj->licenseProvince = (string) $v;
        }
        if (($v = $data['license_url'] ?? null) !== null) {
            $obj->licenseUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['note'] ?? null) !== null) {
            $obj->note = (string) $v;
        }
        if (($v = $data['promotion_area'] ?? null) !== null) {
            $obj->promotionArea = (string) $v;
        }
        if (($v = $data['promotion_center_city'] ?? null) !== null) {
            $obj->promotionCenterCity = (string) $v;
        }
        if (($v = $data['promotion_center_province'] ?? null) !== null) {
            $obj->promotionCenterProvince = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['role'] ?? null) !== null) {
            $obj->role = (string) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
