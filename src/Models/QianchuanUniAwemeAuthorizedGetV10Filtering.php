<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAuthorizedGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringScene
     */
    protected ?string $scene = null;

    /**
     * 检索词，支持抖音号show_Id/抖音号名搜索
     * @var string
     */
    protected ?string $searchKeyWords = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringScene
     */
    public function getScene(): ?string
    {
        return $this->scene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10FilteringScene $scene
     * @return self
     */
    public function setScene(?string $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * 检索词，支持抖音号show_Id/抖音号名搜索
     * @return string
     */
    public function getSearchKeyWords(): ?string
    {
        return $this->searchKeyWords;
    }

    /**
     * 检索词，支持抖音号show_Id/抖音号名搜索
     * @param string $searchKeyWords
     * @return self
     */
    public function setSearchKeyWords(?string $searchKeyWords): self
    {
        $this->searchKeyWords = $searchKeyWords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->scene !== null) {
            $result['scene'] = $this->scene;
        }
        if ($this->searchKeyWords !== null) {
            $result['search_key_words'] = $this->searchKeyWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['scene'] ?? null) !== null) {
            $obj->scene = (string) $v;
        }
        if (($v = $data['search_key_words'] ?? null) !== null) {
            $obj->searchKeyWords = (string) $v;
        }
        return $obj;
    }
}
