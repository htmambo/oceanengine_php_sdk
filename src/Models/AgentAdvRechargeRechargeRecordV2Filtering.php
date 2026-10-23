<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvRechargeRechargeRecordV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringAccountType
     */
    protected ?string $accountType = null;

    /**
     * 广告主id列表
     * @var int[]
     */
    protected ?array $advIds = null;

    /**
     * @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringRechargeType
     */
    protected ?string $rechargeType = null;

    /**
     * @return \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 广告主id列表
     * @return int[]
     */
    public function getAdvIds(): ?array
    {
        return $this->advIds;
    }

    /**
     * 广告主id列表
     * @param int[] $advIds
     * @return self
     */
    public function setAdvIds(?array $advIds): self
    {
        $this->advIds = $advIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringRechargeType
     */
    public function getRechargeType(): ?string
    {
        return $this->rechargeType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2FilteringRechargeType $rechargeType
     * @return self
     */
    public function setRechargeType(?string $rechargeType): self
    {
        $this->rechargeType = $rechargeType;
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
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->rechargeType !== null) {
            $result['recharge_type'] = $this->rechargeType;
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
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['recharge_type'] ?? null) !== null) {
            $obj->rechargeType = (string) $v;
        }
        return $obj;
    }
}
