<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductUpdateV30Request implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo
     */
    protected ?\Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo $productInfo = null;

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
     * @return \Oceanengine\Models\DpaEbpProductUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
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
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
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
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\DpaEbpProductUpdateV30RequestProductInfo::fromArray($v);
        }
        return $obj;
    }
}
