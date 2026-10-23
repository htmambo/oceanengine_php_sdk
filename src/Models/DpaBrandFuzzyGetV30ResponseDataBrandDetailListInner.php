<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandFuzzyGetV30ResponseDataBrandDetailListInner implements \JsonSerializable
{
    /**
     * 品牌全称
     * @var string
     */
    protected ?string $brandFullName = null;

    /**
     * 品牌id
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * 品牌中文名
     * @var string
     */
    protected ?string $brandNameCn = null;

    /**
     * 品牌英文名
     * @var string
     */
    protected ?string $brandNameEn = null;

    /**
     * 商标信息
     * @var \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInnerBrandTrademarkListInner[]
     */
    protected ?array $brandTrademarkList = null;

    /**
     * @var \Oceanengine\Models\DpaBrandFuzzyGetV30DataBrandDetailListBrandType
     */
    protected ?string $brandType = null;

    /**
     * 品牌全称
     * @return string
     */
    public function getBrandFullName(): ?string
    {
        return $this->brandFullName;
    }

    /**
     * 品牌全称
     * @param string $brandFullName
     * @return self
     */
    public function setBrandFullName(?string $brandFullName): self
    {
        $this->brandFullName = $brandFullName;
        return $this;
    }

    /**
     * 品牌id
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * 品牌id
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * 品牌中文名
     * @return string
     */
    public function getBrandNameCn(): ?string
    {
        return $this->brandNameCn;
    }

    /**
     * 品牌中文名
     * @param string $brandNameCn
     * @return self
     */
    public function setBrandNameCn(?string $brandNameCn): self
    {
        $this->brandNameCn = $brandNameCn;
        return $this;
    }

    /**
     * 品牌英文名
     * @return string
     */
    public function getBrandNameEn(): ?string
    {
        return $this->brandNameEn;
    }

    /**
     * 品牌英文名
     * @param string $brandNameEn
     * @return self
     */
    public function setBrandNameEn(?string $brandNameEn): self
    {
        $this->brandNameEn = $brandNameEn;
        return $this;
    }

    /**
     * 商标信息
     * @return \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInnerBrandTrademarkListInner[]
     */
    public function getBrandTrademarkList(): ?array
    {
        return $this->brandTrademarkList;
    }

    /**
     * 商标信息
     * @param \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInnerBrandTrademarkListInner[] $brandTrademarkList
     * @return self
     */
    public function setBrandTrademarkList(?array $brandTrademarkList): self
    {
        $this->brandTrademarkList = $brandTrademarkList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaBrandFuzzyGetV30DataBrandDetailListBrandType
     */
    public function getBrandType(): ?string
    {
        return $this->brandType;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandFuzzyGetV30DataBrandDetailListBrandType $brandType
     * @return self
     */
    public function setBrandType(?string $brandType): self
    {
        $this->brandType = $brandType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandFullName !== null) {
            $result['brand_full_name'] = $this->brandFullName;
        }
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandNameCn !== null) {
            $result['brand_name_cn'] = $this->brandNameCn;
        }
        if ($this->brandNameEn !== null) {
            $result['brand_name_en'] = $this->brandNameEn;
        }
        if ($this->brandTrademarkList !== null) {
            $result['brand_trademark_list'] = $this->brandTrademarkList;
        }
        if ($this->brandType !== null) {
            $result['brand_type'] = $this->brandType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_full_name'] ?? null) !== null) {
            $obj->brandFullName = (string) $v;
        }
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['brand_name_cn'] ?? null) !== null) {
            $obj->brandNameCn = (string) $v;
        }
        if (($v = $data['brand_name_en'] ?? null) !== null) {
            $obj->brandNameEn = (string) $v;
        }
        if (($v = $data['brand_trademark_list'] ?? null) !== null && is_array($v)) {
            $obj->brandTrademarkList = array_map(fn ($vv) => \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInnerBrandTrademarkListInner::fromArray($vv), $v);
        }
        if (($v = $data['brand_type'] ?? null) !== null) {
            $obj->brandType = (string) $v;
        }
        return $obj;
    }
}
