<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportSearchWordGetV10Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var bool
     */
    protected ?bool $keywordMerge = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange
     */
    protected ?\Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange $range = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringWordType
     */
    protected ?string $wordType = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCampaignIds(): ?array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return self
     */
    public function setCampaignIds(?array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getKeywordMerge(): ?bool
    {
        return $this->keywordMerge;
    }

    /**
     * @param bool $keywordMerge
     * @return self
     */
    public function setKeywordMerge(?bool $keywordMerge): self
    {
        $this->keywordMerge = $keywordMerge;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange
     */
    public function getRange(): ?\Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange
    {
        return $this->range;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange $range
     * @return self
     */
    public function setRange(?\Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange $range): self
    {
        $this->range = $range;
        return $this;
    }

    /**
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringWordType
     */
    public function getWordType(): ?string
    {
        return $this->wordType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringWordType $wordType
     * @return self
     */
    public function setWordType(?string $wordType): self
    {
        $this->wordType = $wordType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->keywordMerge !== null) {
            $result['keyword_merge'] = $this->keywordMerge;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->range !== null) {
            $result['range'] = $this->range;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
        }
        if ($this->wordType !== null) {
            $result['word_type'] = $this->wordType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['keyword_merge'] ?? null) !== null) {
            $obj->keywordMerge = (bool) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['range'] ?? null) !== null && is_array($v)) {
            $obj->range = \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRange::fromArray($v);
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        if (($v = $data['word_type'] ?? null) !== null) {
            $obj->wordType = (string) $v;
        }
        return $obj;
    }
}
