<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerBrandInfo implements \JsonSerializable
{
    /**
     * 云图品牌id
     * @var int
     */
    protected ?int $brandNameId = null;

    /**
     * cdp品牌id
     * @var int
     */
    protected ?int $cdpBrandId = null;

    /**
     * @var string
     */
    protected ?string $cdpBrandName = null;

    /**
     * 电商品牌ID
     * @var int
     */
    protected ?int $ecomBrandId = null;

    /**
     * 子品牌信息id
     * @var string[]
     */
    protected ?array $subBrandIds = null;

    /**
     * 子品牌信息名称
     * @var string[]
     */
    protected ?array $subBrandNames = null;

    /**
     * 云图分类ID
     * @var int
     */
    protected ?int $yuntuCategoryId = null;

    /**
     * 云图品牌id
     * @return int
     */
    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }

    /**
     * 云图品牌id
     * @param int $brandNameId
     * @return self
     */
    public function setBrandNameId(?int $brandNameId): self
    {
        $this->brandNameId = $brandNameId;
        return $this;
    }

    /**
     * cdp品牌id
     * @return int
     */
    public function getCdpBrandId(): ?int
    {
        return $this->cdpBrandId;
    }

    /**
     * cdp品牌id
     * @param int $cdpBrandId
     * @return self
     */
    public function setCdpBrandId(?int $cdpBrandId): self
    {
        $this->cdpBrandId = $cdpBrandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCdpBrandName(): ?string
    {
        return $this->cdpBrandName;
    }

    /**
     * @param string $cdpBrandName
     * @return self
     */
    public function setCdpBrandName(?string $cdpBrandName): self
    {
        $this->cdpBrandName = $cdpBrandName;
        return $this;
    }

    /**
     * 电商品牌ID
     * @return int
     */
    public function getEcomBrandId(): ?int
    {
        return $this->ecomBrandId;
    }

    /**
     * 电商品牌ID
     * @param int $ecomBrandId
     * @return self
     */
    public function setEcomBrandId(?int $ecomBrandId): self
    {
        $this->ecomBrandId = $ecomBrandId;
        return $this;
    }

    /**
     * 子品牌信息id
     * @return string[]
     */
    public function getSubBrandIds(): ?array
    {
        return $this->subBrandIds;
    }

    /**
     * 子品牌信息id
     * @param string[] $subBrandIds
     * @return self
     */
    public function setSubBrandIds(?array $subBrandIds): self
    {
        $this->subBrandIds = $subBrandIds;
        return $this;
    }

    /**
     * 子品牌信息名称
     * @return string[]
     */
    public function getSubBrandNames(): ?array
    {
        return $this->subBrandNames;
    }

    /**
     * 子品牌信息名称
     * @param string[] $subBrandNames
     * @return self
     */
    public function setSubBrandNames(?array $subBrandNames): self
    {
        $this->subBrandNames = $subBrandNames;
        return $this;
    }

    /**
     * 云图分类ID
     * @return int
     */
    public function getYuntuCategoryId(): ?int
    {
        return $this->yuntuCategoryId;
    }

    /**
     * 云图分类ID
     * @param int $yuntuCategoryId
     * @return self
     */
    public function setYuntuCategoryId(?int $yuntuCategoryId): self
    {
        $this->yuntuCategoryId = $yuntuCategoryId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandNameId !== null) {
            $result['brand_name_id'] = $this->brandNameId;
        }
        if ($this->cdpBrandId !== null) {
            $result['cdp_brand_id'] = $this->cdpBrandId;
        }
        if ($this->cdpBrandName !== null) {
            $result['cdp_brand_name'] = $this->cdpBrandName;
        }
        if ($this->ecomBrandId !== null) {
            $result['ecom_brand_id'] = $this->ecomBrandId;
        }
        if ($this->subBrandIds !== null) {
            $result['sub_brand_ids'] = $this->subBrandIds;
        }
        if ($this->subBrandNames !== null) {
            $result['sub_brand_names'] = $this->subBrandNames;
        }
        if ($this->yuntuCategoryId !== null) {
            $result['yuntu_category_id'] = $this->yuntuCategoryId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name_id'] ?? null) !== null) {
            $obj->brandNameId = (int) $v;
        }
        if (($v = $data['cdp_brand_id'] ?? null) !== null) {
            $obj->cdpBrandId = (int) $v;
        }
        if (($v = $data['cdp_brand_name'] ?? null) !== null) {
            $obj->cdpBrandName = (string) $v;
        }
        if (($v = $data['ecom_brand_id'] ?? null) !== null) {
            $obj->ecomBrandId = (int) $v;
        }
        if (($v = $data['sub_brand_ids'] ?? null) !== null && is_array($v)) {
            $obj->subBrandIds = $v;
        }
        if (($v = $data['sub_brand_names'] ?? null) !== null && is_array($v)) {
            $obj->subBrandNames = $v;
        }
        if (($v = $data['yuntu_category_id'] ?? null) !== null) {
            $obj->yuntuCategoryId = (int) $v;
        }
        return $obj;
    }
}
