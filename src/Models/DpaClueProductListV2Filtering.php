<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductListV2Filtering implements \JsonSerializable
{
    /**
     * 商品审核状态
     * @var \Oceanengine\Models\DpaClueProductListV2FilteringAuditStatus[]
     */
    protected ?array $auditStatus = null;

    /**
     * 类目id，会级联查询所有叶子类目
     * @var int[]
     */
    protected ?array $categoryIds = null;

    /**
     * 类目名称，支持模糊搜索
     * @var string
     */
    protected ?string $categoryName = null;

    /**
     * 商品必填字段完整性
     * @var \Oceanengine\Models\DpaClueProductListV2FilteringCompletionStatus[]
     */
    protected ?array $completionStatus = null;

    /**
     * 商品ID或商品名称查询
     * @var string
     */
    protected ?string $productIdOrNameSearch = null;

    /**
     * 商品ID精确搜索
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 商品名称模糊搜索
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品权限关系过滤
     * @var \Oceanengine\Models\DpaClueProductListV2FilteringRels[]
     */
    protected ?array $rels = null;

    /**
     * 可投状态过滤
     * @var \Oceanengine\Models\DpaClueProductListV2FilteringStatuses[]
     */
    protected ?array $statuses = null;

    /**
     * 商品审核状态
     * @return \Oceanengine\Models\DpaClueProductListV2FilteringAuditStatus[]
     */
    public function getAuditStatus(): ?array
    {
        return $this->auditStatus;
    }

    /**
     * 商品审核状态
     * @param \Oceanengine\Models\DpaClueProductListV2FilteringAuditStatus[] $auditStatus
     * @return self
     */
    public function setAuditStatus(?array $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 类目id，会级联查询所有叶子类目
     * @return int[]
     */
    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    /**
     * 类目id，会级联查询所有叶子类目
     * @param int[] $categoryIds
     * @return self
     */
    public function setCategoryIds(?array $categoryIds): self
    {
        $this->categoryIds = $categoryIds;
        return $this;
    }

    /**
     * 类目名称，支持模糊搜索
     * @return string
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * 类目名称，支持模糊搜索
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * 商品必填字段完整性
     * @return \Oceanengine\Models\DpaClueProductListV2FilteringCompletionStatus[]
     */
    public function getCompletionStatus(): ?array
    {
        return $this->completionStatus;
    }

    /**
     * 商品必填字段完整性
     * @param \Oceanengine\Models\DpaClueProductListV2FilteringCompletionStatus[] $completionStatus
     * @return self
     */
    public function setCompletionStatus(?array $completionStatus): self
    {
        $this->completionStatus = $completionStatus;
        return $this;
    }

    /**
     * 商品ID或商品名称查询
     * @return string
     */
    public function getProductIdOrNameSearch(): ?string
    {
        return $this->productIdOrNameSearch;
    }

    /**
     * 商品ID或商品名称查询
     * @param string $productIdOrNameSearch
     * @return self
     */
    public function setProductIdOrNameSearch(?string $productIdOrNameSearch): self
    {
        $this->productIdOrNameSearch = $productIdOrNameSearch;
        return $this;
    }

    /**
     * 商品ID精确搜索
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 商品ID精确搜索
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * 商品名称模糊搜索
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称模糊搜索
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品权限关系过滤
     * @return \Oceanengine\Models\DpaClueProductListV2FilteringRels[]
     */
    public function getRels(): ?array
    {
        return $this->rels;
    }

    /**
     * 商品权限关系过滤
     * @param \Oceanengine\Models\DpaClueProductListV2FilteringRels[] $rels
     * @return self
     */
    public function setRels(?array $rels): self
    {
        $this->rels = $rels;
        return $this;
    }

    /**
     * 可投状态过滤
     * @return \Oceanengine\Models\DpaClueProductListV2FilteringStatuses[]
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }

    /**
     * 可投状态过滤
     * @param \Oceanengine\Models\DpaClueProductListV2FilteringStatuses[] $statuses
     * @return self
     */
    public function setStatuses(?array $statuses): self
    {
        $this->statuses = $statuses;
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
        if ($this->categoryIds !== null) {
            $result['category_ids'] = $this->categoryIds;
        }
        if ($this->categoryName !== null) {
            $result['category_name'] = $this->categoryName;
        }
        if ($this->completionStatus !== null) {
            $result['completion_status'] = $this->completionStatus;
        }
        if ($this->productIdOrNameSearch !== null) {
            $result['product_id_or_name_search'] = $this->productIdOrNameSearch;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->rels !== null) {
            $result['rels'] = $this->rels;
        }
        if ($this->statuses !== null) {
            $result['statuses'] = $this->statuses;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null && is_array($v)) {
            $obj->auditStatus = $v;
        }
        if (($v = $data['category_ids'] ?? null) !== null && is_array($v)) {
            $obj->categoryIds = $v;
        }
        if (($v = $data['category_name'] ?? null) !== null) {
            $obj->categoryName = (string) $v;
        }
        if (($v = $data['completion_status'] ?? null) !== null && is_array($v)) {
            $obj->completionStatus = $v;
        }
        if (($v = $data['product_id_or_name_search'] ?? null) !== null) {
            $obj->productIdOrNameSearch = (string) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['rels'] ?? null) !== null && is_array($v)) {
            $obj->rels = $v;
        }
        if (($v = $data['statuses'] ?? null) !== null && is_array($v)) {
            $obj->statuses = $v;
        }
        return $obj;
    }
}
