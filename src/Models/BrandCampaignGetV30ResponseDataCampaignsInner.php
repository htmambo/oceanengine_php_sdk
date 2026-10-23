<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseDataCampaignsInner implements \JsonSerializable
{
    /**
     * 广告组总金额 该金额乘以10的5次方  避免出现小数
     * @var int
     */
    protected ?int $adsBudget = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo
     */
    protected ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo $authenticationInfo = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignCategory
     */
    protected ?string $campaignCategory = null;

    /**
     * 广告组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 广告组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignStatus
     */
    protected ?string $campaignStatus = null;

    /**
     * 排期ID
     * @var int
     */
    protected ?int $cartId = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30DataCampaignsContractType
     */
    protected ?string $contractType = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 广告组投放截止时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignGetV30DataCampaignsMarketingPurpose
     */
    protected ?string $marketingPurpose = null;

    /**
     * 修改时间
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 广告组投放起始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 广告组总金额 该金额乘以10的5次方  避免出现小数
     * @return int
     */
    public function getAdsBudget(): ?int
    {
        return $this->adsBudget;
    }

    /**
     * 广告组总金额 该金额乘以10的5次方  避免出现小数
     * @param int $adsBudget
     * @return self
     */
    public function setAdsBudget(?int $adsBudget): self
    {
        $this->adsBudget = $adsBudget;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo
     */
    public function getAuthenticationInfo(): ?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo
    {
        return $this->authenticationInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo $authenticationInfo
     * @return self
     */
    public function setAuthenticationInfo(?\Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo $authenticationInfo): self
    {
        $this->authenticationInfo = $authenticationInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignCategory
     */
    public function getCampaignCategory(): ?string
    {
        return $this->campaignCategory;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignCategory $campaignCategory
     * @return self
     */
    public function setCampaignCategory(?string $campaignCategory): self
    {
        $this->campaignCategory = $campaignCategory;
        return $this;
    }

    /**
     * 广告组ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 广告组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 广告组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignStatus
     */
    public function getCampaignStatus(): ?string
    {
        return $this->campaignStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30DataCampaignsCampaignStatus $campaignStatus
     * @return self
     */
    public function setCampaignStatus(?string $campaignStatus): self
    {
        $this->campaignStatus = $campaignStatus;
        return $this;
    }

    /**
     * 排期ID
     * @return int
     */
    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    /**
     * 排期ID
     * @param int $cartId
     * @return self
     */
    public function setCartId(?int $cartId): self
    {
        $this->cartId = $cartId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30DataCampaignsContractType
     */
    public function getContractType(): ?string
    {
        return $this->contractType;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30DataCampaignsContractType $contractType
     * @return self
     */
    public function setContractType(?string $contractType): self
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 广告组投放截止时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 广告组投放截止时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignGetV30DataCampaignsMarketingPurpose
     */
    public function getMarketingPurpose(): ?string
    {
        return $this->marketingPurpose;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignGetV30DataCampaignsMarketingPurpose $marketingPurpose
     * @return self
     */
    public function setMarketingPurpose(?string $marketingPurpose): self
    {
        $this->marketingPurpose = $marketingPurpose;
        return $this;
    }

    /**
     * 修改时间
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 修改时间
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 广告组投放起始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 广告组投放起始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adsBudget !== null) {
            $result['ads_budget'] = $this->adsBudget;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->authenticationInfo !== null) {
            $result['authentication_info'] = $this->authenticationInfo;
        }
        if ($this->campaignCategory !== null) {
            $result['campaign_category'] = $this->campaignCategory;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->campaignStatus !== null) {
            $result['campaign_status'] = $this->campaignStatus;
        }
        if ($this->cartId !== null) {
            $result['cart_id'] = $this->cartId;
        }
        if ($this->contractType !== null) {
            $result['contract_type'] = $this->contractType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->marketingPurpose !== null) {
            $result['marketing_purpose'] = $this->marketingPurpose;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ads_budget'] ?? null) !== null) {
            $obj->adsBudget = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['authentication_info'] ?? null) !== null && is_array($v)) {
            $obj->authenticationInfo = \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfo::fromArray($v);
        }
        if (($v = $data['campaign_category'] ?? null) !== null) {
            $obj->campaignCategory = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['campaign_status'] ?? null) !== null) {
            $obj->campaignStatus = (string) $v;
        }
        if (($v = $data['cart_id'] ?? null) !== null) {
            $obj->cartId = (int) $v;
        }
        if (($v = $data['contract_type'] ?? null) !== null) {
            $obj->contractType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['marketing_purpose'] ?? null) !== null) {
            $obj->marketingPurpose = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
