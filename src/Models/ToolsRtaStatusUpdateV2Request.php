<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaStatusUpdateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsRtaStatusUpdateV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 广告账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 预期设置的rta策略id
     * @var int[]
     */
    protected ?array $rtaIds = null;

    /**
     * @var \Oceanengine\Models\ToolsRtaStatusUpdateV2Status
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsRtaStatusUpdateV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaStatusUpdateV2AccountType $accountType
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
     * @return int[]
     */
    public function getRtaIds(): ?array
    {
        return $this->rtaIds;
    }

    /**
     * 预期设置的rta策略id
     * @param int[] $rtaIds
     * @return self
     */
    public function setRtaIds(?array $rtaIds): self
    {
        $this->rtaIds = $rtaIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsRtaStatusUpdateV2Status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaStatusUpdateV2Status $status
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->rtaIds !== null) {
            $result['rta_ids'] = $this->rtaIds;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
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
        if (($v = $data['rta_ids'] ?? null) !== null && is_array($v)) {
            $obj->rtaIds = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
