<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdGetV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adCreateTime = null;

    /**
     * @var string
     */
    protected ?string $adModifyTime = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var string[]
     */
    protected ?array $pricingList = null;

    /**
     * @var \Oceanengine\Models\AdGetV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAdCreateTime(): ?string
    {
        return $this->adCreateTime;
    }

    /**
     * @param string $adCreateTime
     * @return self
     */
    public function setAdCreateTime(?string $adCreateTime): self
    {
        $this->adCreateTime = $adCreateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdModifyTime(): ?string
    {
        return $this->adModifyTime;
    }

    /**
     * @param string $adModifyTime
     * @return self
     */
    public function setAdModifyTime(?string $adModifyTime): self
    {
        $this->adModifyTime = $adModifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPricingList(): ?array
    {
        return $this->pricingList;
    }

    /**
     * @param string[] $pricingList
     * @return self
     */
    public function setPricingList(?array $pricingList): self
    {
        $this->pricingList = $pricingList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2FilteringStatus $status
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
        if ($this->adCreateTime !== null) {
            $result['ad_create_time'] = $this->adCreateTime;
        }
        if ($this->adModifyTime !== null) {
            $result['ad_modify_time'] = $this->adModifyTime;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->pricingList !== null) {
            $result['pricing_list'] = $this->pricingList;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_create_time'] ?? null) !== null) {
            $obj->adCreateTime = (string) $v;
        }
        if (($v = $data['ad_modify_time'] ?? null) !== null) {
            $obj->adModifyTime = (string) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['pricing_list'] ?? null) !== null && is_array($v)) {
            $obj->pricingList = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
