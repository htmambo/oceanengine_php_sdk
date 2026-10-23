<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordCreateV30RequestKeywords implements \JsonSerializable
{
    /**
     * 蓝海关键词
     * @var int[]
     */
    protected ?array $blueFlowKeywordId = null;

    /**
     * 自定义关键词
     * @var int[]
     */
    protected ?array $wordId = null;

    /**
     * 蓝海关键词
     * @return int[]
     */
    public function getBlueFlowKeywordId(): ?array
    {
        return $this->blueFlowKeywordId;
    }

    /**
     * 蓝海关键词
     * @param int[] $blueFlowKeywordId
     * @return self
     */
    public function setBlueFlowKeywordId(?array $blueFlowKeywordId): self
    {
        $this->blueFlowKeywordId = $blueFlowKeywordId;
        return $this;
    }

    /**
     * 自定义关键词
     * @return int[]
     */
    public function getWordId(): ?array
    {
        return $this->wordId;
    }

    /**
     * 自定义关键词
     * @param int[] $wordId
     * @return self
     */
    public function setWordId(?array $wordId): self
    {
        $this->wordId = $wordId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowKeywordId !== null) {
            $result['blue_flow_keyword_id'] = $this->blueFlowKeywordId;
        }
        if ($this->wordId !== null) {
            $result['word_id'] = $this->wordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword_id'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordId = $v;
        }
        if (($v = $data['word_id'] ?? null) !== null && is_array($v)) {
            $obj->wordId = $v;
        }
        return $obj;
    }
}
