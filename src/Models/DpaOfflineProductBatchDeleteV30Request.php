<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaOfflineProductBatchDeleteV30Request implements \JsonSerializable
{
    /**
     * 账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\DpaOfflineProductBatchDeleteV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 批量删除商品数量限制
     * @var int
     */
    protected ?int $deleteProductLimit = null;

    /**
     * 商品修改日期
     * @var string
     */
    protected ?string $lastModifyTime = null;

    /**
     * 商品库id
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * 账户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaOfflineProductBatchDeleteV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\DpaOfflineProductBatchDeleteV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 批量删除商品数量限制
     * @return int
     */
    public function getDeleteProductLimit(): ?int
    {
        return $this->deleteProductLimit;
    }

    /**
     * 批量删除商品数量限制
     * @param int $deleteProductLimit
     * @return self
     */
    public function setDeleteProductLimit(?int $deleteProductLimit): self
    {
        $this->deleteProductLimit = $deleteProductLimit;
        return $this;
    }

    /**
     * 商品修改日期
     * @return string
     */
    public function getLastModifyTime(): ?string
    {
        return $this->lastModifyTime;
    }

    /**
     * 商品修改日期
     * @param string $lastModifyTime
     * @return self
     */
    public function setLastModifyTime(?string $lastModifyTime): self
    {
        $this->lastModifyTime = $lastModifyTime;
        return $this;
    }

    /**
     * 商品库id
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * 商品库id
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
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
        if ($this->deleteProductLimit !== null) {
            $result['delete_product_limit'] = $this->deleteProductLimit;
        }
        if ($this->lastModifyTime !== null) {
            $result['last_modify_time'] = $this->lastModifyTime;
        }
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
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
        if (($v = $data['delete_product_limit'] ?? null) !== null) {
            $obj->deleteProductLimit = (int) $v;
        }
        if (($v = $data['last_modify_time'] ?? null) !== null) {
            $obj->lastModifyTime = (string) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        return $obj;
    }
}
