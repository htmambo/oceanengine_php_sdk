<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorSingleProductInfoInner implements \JsonSerializable
{
    /**
     * 服务描述，0/10
     * @var string
     */
    protected ?string $singleProductDetail = null;

    /**
     * 单项服务名称，0/15
     * @var string
     */
    protected ?string $singleProductName = null;

    /**
     * 服务描述，0/10
     * @return string
     */
    public function getSingleProductDetail(): ?string
    {
        return $this->singleProductDetail;
    }

    /**
     * 服务描述，0/10
     * @param string $singleProductDetail
     * @return self
     */
    public function setSingleProductDetail(?string $singleProductDetail): self
    {
        $this->singleProductDetail = $singleProductDetail;
        return $this;
    }

    /**
     * 单项服务名称，0/15
     * @return string
     */
    public function getSingleProductName(): ?string
    {
        return $this->singleProductName;
    }

    /**
     * 单项服务名称，0/15
     * @param string $singleProductName
     * @return self
     */
    public function setSingleProductName(?string $singleProductName): self
    {
        $this->singleProductName = $singleProductName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->singleProductDetail !== null) {
            $result['single_product_detail'] = $this->singleProductDetail;
        }
        if ($this->singleProductName !== null) {
            $result['single_product_name'] = $this->singleProductName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['single_product_detail'] ?? null) !== null) {
            $obj->singleProductDetail = (string) $v;
        }
        if (($v = $data['single_product_name'] ?? null) !== null) {
            $obj->singleProductName = (string) $v;
        }
        return $obj;
    }
}
