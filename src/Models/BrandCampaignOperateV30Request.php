<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignOperateV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignOperateV30Operate
     */
    protected ?string $operate = null;

    /**
     * 通知的staffId
     * @var int
     */
    protected ?int $staffId = null;

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
     * @return \Oceanengine\Models\BrandCampaignOperateV30Operate
     */
    public function getOperate(): ?string
    {
        return $this->operate;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignOperateV30Operate $operate
     * @return self
     */
    public function setOperate(?string $operate): self
    {
        $this->operate = $operate;
        return $this;
    }

    /**
     * 通知的staffId
     * @return int
     */
    public function getStaffId(): ?int
    {
        return $this->staffId;
    }

    /**
     * 通知的staffId
     * @param int $staffId
     * @return self
     */
    public function setStaffId(?int $staffId): self
    {
        $this->staffId = $staffId;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->operate !== null) {
            $result['operate'] = $this->operate;
        }
        if ($this->staffId !== null) {
            $result['staff_id'] = $this->staffId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['operate'] ?? null) !== null) {
            $obj->operate = (string) $v;
        }
        if (($v = $data['staff_id'] ?? null) !== null) {
            $obj->staffId = (int) $v;
        }
        return $obj;
    }
}
