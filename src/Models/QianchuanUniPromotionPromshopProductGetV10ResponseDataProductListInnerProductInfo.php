<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionPromshopProductGetV10ResponseDataProductListInnerProductInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 商品预览图
     * @var string
     */
    protected ?string $productImage = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品标签
     * @var string[]
     */
    protected ?array $productTag = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 商品id
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品id
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品预览图
     * @return string
     */
    public function getProductImage(): ?string
    {
        return $this->productImage;
    }

    /**
     * 商品预览图
     * @param string $productImage
     * @return self
     */
    public function setProductImage(?string $productImage): self
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品标签
     * @return string[]
     */
    public function getProductTag(): ?array
    {
        return $this->productTag;
    }

    /**
     * 商品标签
     * @param string[] $productTag
     * @return self
     */
    public function setProductTag(?array $productTag): self
    {
        $this->productTag = $productTag;
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
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productImage !== null) {
            $result['product_image'] = $this->productImage;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productTag !== null) {
            $result['product_tag'] = $this->productTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_image'] ?? null) !== null) {
            $obj->productImage = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_tag'] ?? null) !== null && is_array($v)) {
            $obj->productTag = $v;
        }
        return $obj;
    }
}
