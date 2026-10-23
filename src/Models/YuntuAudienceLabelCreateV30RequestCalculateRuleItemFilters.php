<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters implements \JsonSerializable
{
    /**
     * 内容类别列表。创建商品人群标签时必传，其他人群标签勿传。其中商品人群标签下场景为不限时，需传入 3、4、5 三个元素。含义详见枚举包。
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList[]
     */
    protected ?array $contentTypeList = null;

    /**
     * 商品类目列表。字符串数组，每个元素为由英文逗号分隔拼接的、一级类目ID至四级类目ID字符串。
     * @var string[]
     */
    protected ?array $ecomCategories = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersMatchType
     */
    protected ?string $matchType = null;

    /**
     * 商品价格最大值。区间为 [0.02, 9999999.00]。min_price < max_price。
     * @var float
     */
    protected ?float $maxPrice = null;

    /**
     * 商品价格最小值。区间为 [0.01, 9999999.00)
     * @var float
     */
    protected ?float $minPrice = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersOnlySelfBrand
     */
    protected ?string $onlySelfBrand = null;

    /**
     * 内容类别列表。创建商品人群标签时必传，其他人群标签勿传。其中商品人群标签下场景为不限时，需传入 3、4、5 三个元素。含义详见枚举包。
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList[]
     */
    public function getContentTypeList(): ?array
    {
        return $this->contentTypeList;
    }

    /**
     * 内容类别列表。创建商品人群标签时必传，其他人群标签勿传。其中商品人群标签下场景为不限时，需传入 3、4、5 三个元素。含义详见枚举包。
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList[] $contentTypeList
     * @return self
     */
    public function setContentTypeList(?array $contentTypeList): self
    {
        $this->contentTypeList = $contentTypeList;
        return $this;
    }

    /**
     * 商品类目列表。字符串数组，每个元素为由英文逗号分隔拼接的、一级类目ID至四级类目ID字符串。
     * @return string[]
     */
    public function getEcomCategories(): ?array
    {
        return $this->ecomCategories;
    }

    /**
     * 商品类目列表。字符串数组，每个元素为由英文逗号分隔拼接的、一级类目ID至四级类目ID字符串。
     * @param string[] $ecomCategories
     * @return self
     */
    public function setEcomCategories(?array $ecomCategories): self
    {
        $this->ecomCategories = $ecomCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * 商品价格最大值。区间为 [0.02, 9999999.00]。min_price < max_price。
     * @return float
     */
    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }

    /**
     * 商品价格最大值。区间为 [0.02, 9999999.00]。min_price < max_price。
     * @param float $maxPrice
     * @return self
     */
    public function setMaxPrice(?float $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * 商品价格最小值。区间为 [0.01, 9999999.00)
     * @return float
     */
    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    /**
     * 商品价格最小值。区间为 [0.01, 9999999.00)
     * @param float $minPrice
     * @return self
     */
    public function setMinPrice(?float $minPrice): self
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersOnlySelfBrand
     */
    public function getOnlySelfBrand(): ?string
    {
        return $this->onlySelfBrand;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleItemFiltersOnlySelfBrand $onlySelfBrand
     * @return self
     */
    public function setOnlySelfBrand(?string $onlySelfBrand): self
    {
        $this->onlySelfBrand = $onlySelfBrand;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contentTypeList !== null) {
            $result['content_type_list'] = $this->contentTypeList;
        }
        if ($this->ecomCategories !== null) {
            $result['ecom_categories'] = $this->ecomCategories;
        }
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        if ($this->maxPrice !== null) {
            $result['max_price'] = $this->maxPrice;
        }
        if ($this->minPrice !== null) {
            $result['min_price'] = $this->minPrice;
        }
        if ($this->onlySelfBrand !== null) {
            $result['only_self_brand'] = $this->onlySelfBrand;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content_type_list'] ?? null) !== null && is_array($v)) {
            $obj->contentTypeList = $v;
        }
        if (($v = $data['ecom_categories'] ?? null) !== null && is_array($v)) {
            $obj->ecomCategories = $v;
        }
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        if (($v = $data['max_price'] ?? null) !== null) {
            $obj->maxPrice = (float) $v;
        }
        if (($v = $data['min_price'] ?? null) !== null) {
            $obj->minPrice = (float) $v;
        }
        if (($v = $data['only_self_brand'] ?? null) !== null) {
            $obj->onlySelfBrand = (string) $v;
        }
        return $obj;
    }
}
