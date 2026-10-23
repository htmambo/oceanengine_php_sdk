<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bidRatio = null;

    /**
     * @var \Oceanengine\Models\ToolsKeywordsBidRatioGetV30DataListDimension
     */
    protected ?string $dimension = null;

    /**
     * @var int
     */
    protected ?int $projectNum = null;

    /**
     * @var string
     */
    protected ?string $promotionWordId = null;

    /**
     * @var string
     */
    protected ?string $word = null;

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
     * @return \Oceanengine\Models\ToolsKeywordsBidRatioGetV30DataListDimension
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param \Oceanengine\Models\ToolsKeywordsBidRatioGetV30DataListDimension $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectNum(): ?int
    {
        return $this->projectNum;
    }

    /**
     * @param int $projectNum
     * @return self
     */
    public function setProjectNum(?int $projectNum): self
    {
        $this->projectNum = $projectNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionWordId(): ?string
    {
        return $this->promotionWordId;
    }

    /**
     * @param string $promotionWordId
     * @return self
     */
    public function setPromotionWordId(?string $promotionWordId): self
    {
        $this->promotionWordId = $promotionWordId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidRatio !== null) {
            $result['bid_ratio'] = $this->bidRatio;
        }
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
        }
        if ($this->projectNum !== null) {
            $result['project_num'] = $this->projectNum;
        }
        if ($this->promotionWordId !== null) {
            $result['promotion_word_id'] = $this->promotionWordId;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_ratio'] ?? null) !== null) {
            $obj->bidRatio = (float) $v;
        }
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['project_num'] ?? null) !== null) {
            $obj->projectNum = (int) $v;
        }
        if (($v = $data['promotion_word_id'] ?? null) !== null) {
            $obj->promotionWordId = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        return $obj;
    }
}
