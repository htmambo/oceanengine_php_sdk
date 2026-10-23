<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPhraseWordsInner[]
     */
    protected ?array $failPhraseWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPreciseWordsInner[]
     */
    protected ?array $failPreciseWords = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPhraseWordsInner[]
     */
    public function getFailPhraseWords(): ?array
    {
        return $this->failPhraseWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPhraseWordsInner[] $failPhraseWords
     * @return self
     */
    public function setFailPhraseWords(?array $failPhraseWords): self
    {
        $this->failPhraseWords = $failPhraseWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPreciseWordsInner[]
     */
    public function getFailPreciseWords(): ?array
    {
        return $this->failPreciseWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPreciseWordsInner[] $failPreciseWords
     * @return self
     */
    public function setFailPreciseWords(?array $failPreciseWords): self
    {
        $this->failPreciseWords = $failPreciseWords;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
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
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        if ($this->failPhraseWords !== null) {
            $result['fail_phrase_words'] = $this->failPhraseWords;
        }
        if ($this->failPreciseWords !== null) {
            $result['fail_precise_words'] = $this->failPreciseWords;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['fail_phrase_words'] ?? null) !== null && is_array($v)) {
            $obj->failPhraseWords = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPhraseWordsInner::fromArray($vv), $v);
        }
        if (($v = $data['fail_precise_words'] ?? null) !== null && is_array($v)) {
            $obj->failPreciseWords = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30ResponseDataErrorListInnerFailPreciseWordsInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
