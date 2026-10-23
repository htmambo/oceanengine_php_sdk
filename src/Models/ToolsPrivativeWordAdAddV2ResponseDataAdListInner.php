<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordAdAddV2ResponseDataAdListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords $duplicateWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords $exceedLengthWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords $exceedLimitWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords $hasEmojiWords = null;

    /**
     * @var string
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords $successWords = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords
     */
    public function getDuplicateWords(): ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords
    {
        return $this->duplicateWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords $duplicateWords
     * @return self
     */
    public function setDuplicateWords(?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords $duplicateWords): self
    {
        $this->duplicateWords = $duplicateWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords
     */
    public function getExceedLengthWords(): ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords
    {
        return $this->exceedLengthWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords $exceedLengthWords
     * @return self
     */
    public function setExceedLengthWords(?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords $exceedLengthWords): self
    {
        $this->exceedLengthWords = $exceedLengthWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords
     */
    public function getExceedLimitWords(): ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords
    {
        return $this->exceedLimitWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords $exceedLimitWords
     * @return self
     */
    public function setExceedLimitWords(?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords $exceedLimitWords): self
    {
        $this->exceedLimitWords = $exceedLimitWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords
     */
    public function getHasEmojiWords(): ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords
    {
        return $this->hasEmojiWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords $hasEmojiWords
     * @return self
     */
    public function setHasEmojiWords(?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords $hasEmojiWords): self
    {
        $this->hasEmojiWords = $hasEmojiWords;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords
     */
    public function getSuccessWords(): ?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords
    {
        return $this->successWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords $successWords
     * @return self
     */
    public function setSuccessWords(?\Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords $successWords): self
    {
        $this->successWords = $successWords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->duplicateWords !== null) {
            $result['duplicate_words'] = $this->duplicateWords;
        }
        if ($this->exceedLengthWords !== null) {
            $result['exceed_length_words'] = $this->exceedLengthWords;
        }
        if ($this->exceedLimitWords !== null) {
            $result['exceed_limit_words'] = $this->exceedLimitWords;
        }
        if ($this->hasEmojiWords !== null) {
            $result['has_emoji_words'] = $this->hasEmojiWords;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->successWords !== null) {
            $result['success_words'] = $this->successWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['duplicate_words'] ?? null) !== null && is_array($v)) {
            $obj->duplicateWords = \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerDuplicateWords::fromArray($v);
        }
        if (($v = $data['exceed_length_words'] ?? null) !== null && is_array($v)) {
            $obj->exceedLengthWords = \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLengthWords::fromArray($v);
        }
        if (($v = $data['exceed_limit_words'] ?? null) !== null && is_array($v)) {
            $obj->exceedLimitWords = \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerExceedLimitWords::fromArray($v);
        }
        if (($v = $data['has_emoji_words'] ?? null) !== null && is_array($v)) {
            $obj->hasEmojiWords = \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerHasEmojiWords::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['success_words'] ?? null) !== null && is_array($v)) {
            $obj->successWords = \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInnerSuccessWords::fromArray($v);
        }
        return $obj;
    }
}
