<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignListV30ResponseDataCampaignsInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $advertiserName = null;

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
     * @var \Oceanengine\Models\BrandCampaignListV30DataCampaignsCampaignStatus
     */
    protected ?string $campaignStatus = null;

    /**
     * 排期ID
     * @var int
     */
    protected ?int $cartId = null;

    /**
     * 广告组创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 投放结束时间 \"2020-03-01\"
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 合同ID
     * @var string
     */
    protected ?string $mainContractId = null;

    /**
     * 广告组修改时间
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 投放开始时间 \"2020-03-01\"
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 总金额 单位元
     * @var string
     */
    protected ?string $totalSellPrice = null;

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
     * 广告主名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
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
     * @return \Oceanengine\Models\BrandCampaignListV30DataCampaignsCampaignStatus
     */
    public function getCampaignStatus(): ?string
    {
        return $this->campaignStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignListV30DataCampaignsCampaignStatus $campaignStatus
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
     * 广告组创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 广告组创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 投放结束时间 \"2020-03-01\"
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间 \"2020-03-01\"
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 合同ID
     * @return string
     */
    public function getMainContractId(): ?string
    {
        return $this->mainContractId;
    }

    /**
     * 合同ID
     * @param string $mainContractId
     * @return self
     */
    public function setMainContractId(?string $mainContractId): self
    {
        $this->mainContractId = $mainContractId;
        return $this;
    }

    /**
     * 广告组修改时间
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 广告组修改时间
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 投放开始时间 \"2020-03-01\"
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放开始时间 \"2020-03-01\"
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 总金额 单位元
     * @return string
     */
    public function getTotalSellPrice(): ?string
    {
        return $this->totalSellPrice;
    }

    /**
     * 总金额 单位元
     * @param string $totalSellPrice
     * @return self
     */
    public function setTotalSellPrice(?string $totalSellPrice): self
    {
        $this->totalSellPrice = $totalSellPrice;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->mainContractId !== null) {
            $result['main_contract_id'] = $this->mainContractId;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->totalSellPrice !== null) {
            $result['total_sell_price'] = $this->totalSellPrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['main_contract_id'] ?? null) !== null) {
            $obj->mainContractId = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['total_sell_price'] ?? null) !== null) {
            $obj->totalSellPrice = (string) $v;
        }
        return $obj;
    }
}
