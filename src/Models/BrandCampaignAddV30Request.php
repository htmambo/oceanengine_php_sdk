<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignAddV30Request implements \JsonSerializable
{
    /**
     * 广告主
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * 合同ID
     * @var string
     */
    protected ?string $mainContractId = null;

    /**
     * 代理商员工ID
     * @var int
     */
    protected ?int $staffId = null;

    /**
     * 广告主
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
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
     * 代理商员工ID
     * @return int
     */
    public function getStaffId(): ?int
    {
        return $this->staffId;
    }

    /**
     * 代理商员工ID
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
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->mainContractId !== null) {
            $result['main_contract_id'] = $this->mainContractId;
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
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['main_contract_id'] ?? null) !== null) {
            $obj->mainContractId = (string) $v;
        }
        if (($v = $data['staff_id'] ?? null) !== null) {
            $obj->staffId = (int) $v;
        }
        return $obj;
    }
}
