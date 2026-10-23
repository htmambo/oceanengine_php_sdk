<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRecommendKeywordsGetV10Filtering implements \JsonSerializable
{
    /**
     * 抖音id，与计划创建时设置的抖音ID一致 注：PC侧创建「直播带货」搜索广告时，默认根据aweme_id获取推荐关键
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * 商品ID，此参数用于获取与商品更为相关的关键词推荐 注：PC侧创建「短视频带货」搜索广告时，默认根据product_id获取推荐关键
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 词根
     * @var string
     */
    protected ?string $searchWord = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason
     */
    protected ?string $suggestReason = null;

    /**
     * 抖音id，与计划创建时设置的抖音ID一致 注：PC侧创建「直播带货」搜索广告时，默认根据aweme_id获取推荐关键
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音id，与计划创建时设置的抖音ID一致 注：PC侧创建「直播带货」搜索广告时，默认根据aweme_id获取推荐关键
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 商品ID，此参数用于获取与商品更为相关的关键词推荐 注：PC侧创建「短视频带货」搜索广告时，默认根据product_id获取推荐关键
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID，此参数用于获取与商品更为相关的关键词推荐 注：PC侧创建「短视频带货」搜索广告时，默认根据product_id获取推荐关键
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 词根
     * @return string
     */
    public function getSearchWord(): ?string
    {
        return $this->searchWord;
    }

    /**
     * 词根
     * @param string $searchWord
     * @return self
     */
    public function setSearchWord(?string $searchWord): self
    {
        $this->searchWord = $searchWord;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason
     */
    public function getSuggestReason(): ?string
    {
        return $this->suggestReason;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason $suggestReason
     * @return self
     */
    public function setSuggestReason(?string $suggestReason): self
    {
        $this->suggestReason = $suggestReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->searchWord !== null) {
            $result['search_word'] = $this->searchWord;
        }
        if ($this->suggestReason !== null) {
            $result['suggest_reason'] = $this->suggestReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['search_word'] ?? null) !== null) {
            $obj->searchWord = (string) $v;
        }
        if (($v = $data['suggest_reason'] ?? null) !== null) {
            $obj->suggestReason = (string) $v;
        }
        return $obj;
    }
}
