<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10Filter implements \JsonSerializable
{
    /**
     * 是否过滤掉无授权的抖音号，对应页面“只看可投抖音号”
     * @var bool
     */
    protected ?bool $filterCanApply = null;

    /**
     * 多号场景下，过滤授权类型使用，不传表示全都要
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes[]
     */
    protected ?array $multiAwemeAuthTypes = null;

    /**
     * 需要根据商品id过滤可投的抖音号
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 检索词，支持抖音号Id/抖音号名搜索
     * @var string
     */
    protected ?string $searchKeyWords = null;

    /**
     * 多号场景下，过滤授权状态使用，不传表示全都要
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10FilterUniPromAuthStatuses[]
     */
    protected ?array $uniPromAuthStatuses = null;

    /**
     * 多号计划编辑场景下，需要传入正在编辑的计划id，用来计算互斥（跟自己互斥的情况认为没互斥）
     * @var int
     */
    protected ?int $updateAdId = null;

    /**
     * 是否过滤掉无授权的抖音号，对应页面“只看可投抖音号”
     * @return bool
     */
    public function getFilterCanApply(): ?bool
    {
        return $this->filterCanApply;
    }

    /**
     * 是否过滤掉无授权的抖音号，对应页面“只看可投抖音号”
     * @param bool $filterCanApply
     * @return self
     */
    public function setFilterCanApply(?bool $filterCanApply): self
    {
        $this->filterCanApply = $filterCanApply;
        return $this;
    }

    /**
     * 多号场景下，过滤授权类型使用，不传表示全都要
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes[]
     */
    public function getMultiAwemeAuthTypes(): ?array
    {
        return $this->multiAwemeAuthTypes;
    }

    /**
     * 多号场景下，过滤授权类型使用，不传表示全都要
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10FilterMultiAwemeAuthTypes[] $multiAwemeAuthTypes
     * @return self
     */
    public function setMultiAwemeAuthTypes(?array $multiAwemeAuthTypes): self
    {
        $this->multiAwemeAuthTypes = $multiAwemeAuthTypes;
        return $this;
    }

    /**
     * 需要根据商品id过滤可投的抖音号
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 需要根据商品id过滤可投的抖音号
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 检索词，支持抖音号Id/抖音号名搜索
     * @return string
     */
    public function getSearchKeyWords(): ?string
    {
        return $this->searchKeyWords;
    }

    /**
     * 检索词，支持抖音号Id/抖音号名搜索
     * @param string $searchKeyWords
     * @return self
     */
    public function setSearchKeyWords(?string $searchKeyWords): self
    {
        $this->searchKeyWords = $searchKeyWords;
        return $this;
    }

    /**
     * 多号场景下，过滤授权状态使用，不传表示全都要
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10FilterUniPromAuthStatuses[]
     */
    public function getUniPromAuthStatuses(): ?array
    {
        return $this->uniPromAuthStatuses;
    }

    /**
     * 多号场景下，过滤授权状态使用，不传表示全都要
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10FilterUniPromAuthStatuses[] $uniPromAuthStatuses
     * @return self
     */
    public function setUniPromAuthStatuses(?array $uniPromAuthStatuses): self
    {
        $this->uniPromAuthStatuses = $uniPromAuthStatuses;
        return $this;
    }

    /**
     * 多号计划编辑场景下，需要传入正在编辑的计划id，用来计算互斥（跟自己互斥的情况认为没互斥）
     * @return int
     */
    public function getUpdateAdId(): ?int
    {
        return $this->updateAdId;
    }

    /**
     * 多号计划编辑场景下，需要传入正在编辑的计划id，用来计算互斥（跟自己互斥的情况认为没互斥）
     * @param int $updateAdId
     * @return self
     */
    public function setUpdateAdId(?int $updateAdId): self
    {
        $this->updateAdId = $updateAdId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->filterCanApply !== null) {
            $result['filter_can_apply'] = $this->filterCanApply;
        }
        if ($this->multiAwemeAuthTypes !== null) {
            $result['multi_aweme_auth_types'] = $this->multiAwemeAuthTypes;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->searchKeyWords !== null) {
            $result['search_key_words'] = $this->searchKeyWords;
        }
        if ($this->uniPromAuthStatuses !== null) {
            $result['uni_prom_auth_statuses'] = $this->uniPromAuthStatuses;
        }
        if ($this->updateAdId !== null) {
            $result['update_ad_id'] = $this->updateAdId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['filter_can_apply'] ?? null) !== null) {
            $obj->filterCanApply = (bool) $v;
        }
        if (($v = $data['multi_aweme_auth_types'] ?? null) !== null && is_array($v)) {
            $obj->multiAwemeAuthTypes = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['search_key_words'] ?? null) !== null) {
            $obj->searchKeyWords = (string) $v;
        }
        if (($v = $data['uni_prom_auth_statuses'] ?? null) !== null && is_array($v)) {
            $obj->uniPromAuthStatuses = $v;
        }
        if (($v = $data['update_ad_id'] ?? null) !== null) {
            $obj->updateAdId = (int) $v;
        }
        return $obj;
    }
}
