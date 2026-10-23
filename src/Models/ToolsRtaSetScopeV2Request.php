<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaSetScopeV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsRtaSetScopeV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 广告账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 预期设置的rta策略id
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * 生效ID列表，当target_type = CAMPAIGN 或 PROJECT 有效
     * @var int[]
     */
    protected ?array $targetIds = null;

    /**
     * @var \Oceanengine\Models\ToolsRtaSetScopeV2TargetType
     */
    protected ?string $targetType = null;

    /**
     * @return \Oceanengine\Models\ToolsRtaSetScopeV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaSetScopeV2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 广告账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 预期设置的rta策略id
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * 预期设置的rta策略id
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * 生效ID列表，当target_type = CAMPAIGN 或 PROJECT 有效
     * @return int[]
     */
    public function getTargetIds(): ?array
    {
        return $this->targetIds;
    }

    /**
     * 生效ID列表，当target_type = CAMPAIGN 或 PROJECT 有效
     * @param int[] $targetIds
     * @return self
     */
    public function setTargetIds(?array $targetIds): self
    {
        $this->targetIds = $targetIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsRtaSetScopeV2TargetType
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaSetScopeV2TargetType $targetType
     * @return self
     */
    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        if ($this->targetIds !== null) {
            $result['target_ids'] = $this->targetIds;
        }
        if ($this->targetType !== null) {
            $result['target_type'] = $this->targetType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
        }
        if (($v = $data['target_ids'] ?? null) !== null && is_array($v)) {
            $obj->targetIds = $v;
        }
        if (($v = $data['target_type'] ?? null) !== null) {
            $obj->targetType = (string) $v;
        }
        return $obj;
    }
}
