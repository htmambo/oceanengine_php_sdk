<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudiencePushV10Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAudiencePushV10AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int[]
     */
    protected ?array $advIds = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $audienceId = null;

    /**
     * @var int
     */
    protected ?int $isForBrand = null;

    /**
     * @return \Oceanengine\Models\QianchuanAudiencePushV10AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudiencePushV10AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAdvIds(): ?array
    {
        return $this->advIds;
    }

    /**
     * @param int[] $advIds
     * @return self
     */
    public function setAdvIds(?array $advIds): self
    {
        $this->advIds = $advIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAudienceId(): ?int
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     * @return self
     */
    public function setAudienceId(?int $audienceId): self
    {
        $this->audienceId = $audienceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsForBrand(): ?int
    {
        return $this->isForBrand;
    }

    /**
     * @param int $isForBrand
     * @return self
     */
    public function setIsForBrand(?int $isForBrand): self
    {
        $this->isForBrand = $isForBrand;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advIds !== null) {
            $result['adv_ids'] = $this->advIds;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audienceId !== null) {
            $result['audience_id'] = $this->audienceId;
        }
        if ($this->isForBrand !== null) {
            $result['is_for_brand'] = $this->isForBrand;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['adv_ids'] ?? null) !== null && is_array($v)) {
            $obj->advIds = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience_id'] ?? null) !== null) {
            $obj->audienceId = (int) $v;
        }
        if (($v = $data['is_for_brand'] ?? null) !== null) {
            $obj->isForBrand = (int) $v;
        }
        return $obj;
    }
}
