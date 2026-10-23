<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var int[]
     */
    protected ?array $dpaCategories = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30FilteringIsRecommend
     */
    protected ?string $isRecommend = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var string
     */
    protected ?string $spuId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDpaCategories(): ?array
    {
        return $this->dpaCategories;
    }

    /**
     * @param int[] $dpaCategories
     * @return self
     */
    public function setDpaCategories(?array $dpaCategories): self
    {
        $this->dpaCategories = $dpaCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30FilteringIsRecommend
     */
    public function getIsRecommend(): ?string
    {
        return $this->isRecommend;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30FilteringIsRecommend $isRecommend
     * @return self
     */
    public function setIsRecommend(?string $isRecommend): self
    {
        $this->isRecommend = $isRecommend;
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
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpuId(): ?string
    {
        return $this->spuId;
    }

    /**
     * @param string $spuId
     * @return self
     */
    public function setSpuId(?string $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30FilteringStatus $status
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
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->dpaCategories !== null) {
            $result['dpa_categories'] = $this->dpaCategories;
        }
        if ($this->isRecommend !== null) {
            $result['is_recommend'] = $this->isRecommend;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['dpa_categories'] ?? null) !== null && is_array($v)) {
            $obj->dpaCategories = $v;
        }
        if (($v = $data['is_recommend'] ?? null) !== null) {
            $obj->isRecommend = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
