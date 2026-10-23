<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestBrandInfo implements \JsonSerializable
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
     * 云图品牌名称
     * @var string
     */
    protected ?string $cdpBrandName = null;

    /**
     * 电商品牌id
     * @var int
     */
    protected ?int $ecomBrandId = null;

    /**
     * 子品牌id
     * @var string[]
     */
    protected ?array $subBrandNameIds = null;

    /**
     * 子品牌名称
     * @var string[]
     */
    protected ?array $subBrandNames = null;

    /**
     * 品牌分类id
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
     * 云图品牌名称
     * @return string
     */
    public function getCdpBrandName(): ?string
    {
        return $this->cdpBrandName;
    }

    /**
     * 云图品牌名称
     * @param string $cdpBrandName
     * @return self
     */
    public function setCdpBrandName(?string $cdpBrandName): self
    {
        $this->cdpBrandName = $cdpBrandName;
        return $this;
    }

    /**
     * 电商品牌id
     * @return int
     */
    public function getEcomBrandId(): ?int
    {
        return $this->ecomBrandId;
    }

    /**
     * 电商品牌id
     * @param int $ecomBrandId
     * @return self
     */
    public function setEcomBrandId(?int $ecomBrandId): self
    {
        $this->ecomBrandId = $ecomBrandId;
        return $this;
    }

    /**
     * 子品牌id
     * @return string[]
     */
    public function getSubBrandNameIds(): ?array
    {
        return $this->subBrandNameIds;
    }

    /**
     * 子品牌id
     * @param string[] $subBrandNameIds
     * @return self
     */
    public function setSubBrandNameIds(?array $subBrandNameIds): self
    {
        $this->subBrandNameIds = $subBrandNameIds;
        return $this;
    }

    /**
     * 子品牌名称
     * @return string[]
     */
    public function getSubBrandNames(): ?array
    {
        return $this->subBrandNames;
    }

    /**
     * 子品牌名称
     * @param string[] $subBrandNames
     * @return self
     */
    public function setSubBrandNames(?array $subBrandNames): self
    {
        $this->subBrandNames = $subBrandNames;
        return $this;
    }

    /**
     * 品牌分类id
     * @return int
     */
    public function getYuntuCategoryId(): ?int
    {
        return $this->yuntuCategoryId;
    }

    /**
     * 品牌分类id
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
        if ($this->subBrandNameIds !== null) {
            $result['sub_brand_name_ids'] = $this->subBrandNameIds;
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
        if (($v = $data['sub_brand_name_ids'] ?? null) !== null && is_array($v)) {
            $obj->subBrandNameIds = $v;
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
