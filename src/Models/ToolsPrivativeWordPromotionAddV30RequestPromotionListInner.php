<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordPromotionAddV30RequestPromotionListInner implements \JsonSerializable
{
    /**
     * 短语否定词列表
     * @var string[]
     */
    protected ?array $phraseWords = null;

    /**
     * 精确否定词列表
     * @var string[]
     */
    protected ?array $preciseWords = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 短语否定词列表
     * @return string[]
     */
    public function getPhraseWords(): ?array
    {
        return $this->phraseWords;
    }

    /**
     * 短语否定词列表
     * @param string[] $phraseWords
     * @return self
     */
    public function setPhraseWords(?array $phraseWords): self
    {
        $this->phraseWords = $phraseWords;
        return $this;
    }

    /**
     * 精确否定词列表
     * @return string[]
     */
    public function getPreciseWords(): ?array
    {
        return $this->preciseWords;
    }

    /**
     * 精确否定词列表
     * @param string[] $preciseWords
     * @return self
     */
    public function setPreciseWords(?array $preciseWords): self
    {
        $this->preciseWords = $preciseWords;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 项目id
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->phraseWords !== null) {
            $result['phrase_words'] = $this->phraseWords;
        }
        if ($this->preciseWords !== null) {
            $result['precise_words'] = $this->preciseWords;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['phrase_words'] ?? null) !== null && is_array($v)) {
            $obj->phraseWords = $v;
        }
        if (($v = $data['precise_words'] ?? null) !== null && is_array($v)) {
            $obj->preciseWords = $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
