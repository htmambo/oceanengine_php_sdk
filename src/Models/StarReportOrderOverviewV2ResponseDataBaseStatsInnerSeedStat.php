<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution $emotionDistribution = null;

    /**
     * 热词分类
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInner[]
     */
    protected ?array $hotKeywords = null;

    /**
     * 搜索指数
     * @var int
     */
    protected ?int $searchIndex = null;

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution
     */
    public function getEmotionDistribution(): ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution
    {
        return $this->emotionDistribution;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution $emotionDistribution
     * @return self
     */
    public function setEmotionDistribution(?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution $emotionDistribution): self
    {
        $this->emotionDistribution = $emotionDistribution;
        return $this;
    }

    /**
     * 热词分类
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInner[]
     */
    public function getHotKeywords(): ?array
    {
        return $this->hotKeywords;
    }

    /**
     * 热词分类
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInner[] $hotKeywords
     * @return self
     */
    public function setHotKeywords(?array $hotKeywords): self
    {
        $this->hotKeywords = $hotKeywords;
        return $this;
    }

    /**
     * 搜索指数
     * @return int
     */
    public function getSearchIndex(): ?int
    {
        return $this->searchIndex;
    }

    /**
     * 搜索指数
     * @param int $searchIndex
     * @return self
     */
    public function setSearchIndex(?int $searchIndex): self
    {
        $this->searchIndex = $searchIndex;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->emotionDistribution !== null) {
            $result['emotion_distribution'] = $this->emotionDistribution;
        }
        if ($this->hotKeywords !== null) {
            $result['hot_keywords'] = $this->hotKeywords;
        }
        if ($this->searchIndex !== null) {
            $result['search_index'] = $this->searchIndex;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['emotion_distribution'] ?? null) !== null && is_array($v)) {
            $obj->emotionDistribution = \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution::fromArray($v);
        }
        if (($v = $data['hot_keywords'] ?? null) !== null && is_array($v)) {
            $obj->hotKeywords = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['search_index'] ?? null) !== null) {
            $obj->searchIndex = (int) $v;
        }
        return $obj;
    }
}
