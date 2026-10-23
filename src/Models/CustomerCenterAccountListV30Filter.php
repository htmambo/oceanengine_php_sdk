<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAccountListV30Filter implements \JsonSerializable
{
    /**
     * 根据账户ID筛选
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * 根据账户名称过滤
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 根据账户备注筛选
     * @var string
     */
    protected ?string $accountTag = null;

    /**
     * @var \Oceanengine\Models\CustomerCenterAccountListV30FilterAccountType
     */
    protected ?string $accountType = null;

    /**
     * 根据账户ID筛选
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 根据账户ID筛选
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * 根据账户名称过滤
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 根据账户名称过滤
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 根据账户备注筛选
     * @return string
     */
    public function getAccountTag(): ?string
    {
        return $this->accountTag;
    }

    /**
     * 根据账户备注筛选
     * @param string $accountTag
     * @return self
     */
    public function setAccountTag(?string $accountTag): self
    {
        $this->accountTag = $accountTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CustomerCenterAccountListV30FilterAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\CustomerCenterAccountListV30FilterAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->accountTag !== null) {
            $result['account_tag'] = $this->accountTag;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['account_tag'] ?? null) !== null) {
            $obj->accountTag = (string) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        return $obj;
    }
}
