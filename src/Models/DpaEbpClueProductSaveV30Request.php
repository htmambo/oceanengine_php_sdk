<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductSaveV30Request implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct $product = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct
     */
    public function getProduct(): ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct
    {
        return $this->product;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct $product
     * @return self
     */
    public function setProduct(?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct $product): self
    {
        $this->product = $product;
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
        if ($this->product !== null) {
            $result['product'] = $this->product;
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
        if (($v = $data['product'] ?? null) !== null && is_array($v)) {
            $obj->product = \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProduct::fromArray($v);
        }
        return $obj;
    }
}
