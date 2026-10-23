<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAccountOfflineListV30Filter implements \JsonSerializable
{
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
     * @var \Oceanengine\Models\CustomerCenterAccountOfflineListV30FilterAccountType
     */
    protected ?string $accountType = null;

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
     * @return \Oceanengine\Models\CustomerCenterAccountOfflineListV30FilterAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\CustomerCenterAccountOfflineListV30FilterAccountType $accountType
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
