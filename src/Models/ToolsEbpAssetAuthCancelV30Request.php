<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthCancelV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthCancelV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 授权记录主键，上限200
     * @var int[]
     */
    protected ?array $optIds = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthCancelV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthCancelV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 授权记录主键，上限200
     * @return int[]
     */
    public function getOptIds(): ?array
    {
        return $this->optIds;
    }

    /**
     * 授权记录主键，上限200
     * @param int[] $optIds
     * @return self
     */
    public function setOptIds(?array $optIds): self
    {
        $this->optIds = $optIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->optIds !== null) {
            $result['opt_ids'] = $this->optIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['opt_ids'] ?? null) !== null && is_array($v)) {
            $obj->optIds = $v;
        }
        return $obj;
    }
}
