<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRecommendKeywordsGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 竞争程度
     * @var int
     */
    protected ?int $degree = null;

    /**
     * 关键词
     * @var string
     */
    protected ?string $keyword = null;

    /**
     * 月搜索量
     * @var int
     */
    protected ?int $searchSum = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10DataListSuggestReason
     */
    protected ?string $suggestReason = null;

    /**
     * 竞争程度
     * @return int
     */
    public function getDegree(): ?int
    {
        return $this->degree;
    }

    /**
     * 竞争程度
     * @param int $degree
     * @return self
     */
    public function setDegree(?int $degree): self
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * 关键词
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * 关键词
     * @param string $keyword
     * @return self
     */
    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * 月搜索量
     * @return int
     */
    public function getSearchSum(): ?int
    {
        return $this->searchSum;
    }

    /**
     * 月搜索量
     * @param int $searchSum
     * @return self
     */
    public function setSearchSum(?int $searchSum): self
    {
        $this->searchSum = $searchSum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10DataListSuggestReason
     */
    public function getSuggestReason(): ?string
    {
        return $this->suggestReason;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10DataListSuggestReason $suggestReason
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
        if ($this->degree !== null) {
            $result['degree'] = $this->degree;
        }
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->searchSum !== null) {
            $result['search_sum'] = $this->searchSum;
        }
        if ($this->suggestReason !== null) {
            $result['suggest_reason'] = $this->suggestReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['degree'] ?? null) !== null) {
            $obj->degree = (int) $v;
        }
        if (($v = $data['keyword'] ?? null) !== null) {
            $obj->keyword = (string) $v;
        }
        if (($v = $data['search_sum'] ?? null) !== null) {
            $obj->searchSum = (int) $v;
        }
        if (($v = $data['suggest_reason'] ?? null) !== null) {
            $obj->suggestReason = (string) $v;
        }
        return $obj;
    }
}
