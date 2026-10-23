<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductDeleteV30Request implements \JsonSerializable
{
    /**
     * 账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductDeleteV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 通过巨量商品ID删除
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId $storeIdAndOuterId = null;

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
     * @return \Oceanengine\Models\DpaEbpClueProductDeleteV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductDeleteV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 通过巨量商品ID删除
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 通过巨量商品ID删除
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId
     */
    public function getStoreIdAndOuterId(): ?\Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId
    {
        return $this->storeIdAndOuterId;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId $storeIdAndOuterId
     * @return self
     */
    public function setStoreIdAndOuterId(?\Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId $storeIdAndOuterId): self
    {
        $this->storeIdAndOuterId = $storeIdAndOuterId;
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
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->storeIdAndOuterId !== null) {
            $result['store_id_and_outer_id'] = $this->storeIdAndOuterId;
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
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['store_id_and_outer_id'] ?? null) !== null && is_array($v)) {
            $obj->storeIdAndOuterId = \Oceanengine\Models\DpaEbpClueProductDeleteV30RequestStoreIdAndOuterId::fromArray($v);
        }
        return $obj;
    }
}
