<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioCreateV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $bidRatio = null;

    /**
     * @var \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Dimension
     */
    protected ?string $dimension = null;

    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 优词列表
     * @var string[]
     */
    protected ?array $wordList = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidRatio(): ?float
    {
        return $this->bidRatio;
    }

    /**
     * @param float $bidRatio
     * @return self
     */
    public function setBidRatio(?float $bidRatio): self
    {
        $this->bidRatio = $bidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Dimension
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Dimension $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * 优词列表
     * @return string[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 优词列表
     * @param string[] $wordList
     * @return self
     */
    public function setWordList(?array $wordList): self
    {
        $this->wordList = $wordList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->bidRatio !== null) {
            $result['bid_ratio'] = $this->bidRatio;
        }
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->wordList !== null) {
            $result['word_list'] = $this->wordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['bid_ratio'] ?? null) !== null) {
            $obj->bidRatio = (float) $v;
        }
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = $v;
        }
        return $obj;
    }
}
