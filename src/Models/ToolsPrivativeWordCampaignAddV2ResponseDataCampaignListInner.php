<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords $duplicateWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords $exceedLengthWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords $exceedLimitWords = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords $hasEmojiWords = null;

    /**
     * @var string
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords
     */
    protected ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords $successWords = null;

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords
     */
    public function getDuplicateWords(): ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords
    {
        return $this->duplicateWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords $duplicateWords
     * @return self
     */
    public function setDuplicateWords(?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords $duplicateWords): self
    {
        $this->duplicateWords = $duplicateWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords
     */
    public function getExceedLengthWords(): ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords
    {
        return $this->exceedLengthWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords $exceedLengthWords
     * @return self
     */
    public function setExceedLengthWords(?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords $exceedLengthWords): self
    {
        $this->exceedLengthWords = $exceedLengthWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords
     */
    public function getExceedLimitWords(): ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords
    {
        return $this->exceedLimitWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords $exceedLimitWords
     * @return self
     */
    public function setExceedLimitWords(?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords $exceedLimitWords): self
    {
        $this->exceedLimitWords = $exceedLimitWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords
     */
    public function getHasEmojiWords(): ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords
    {
        return $this->hasEmojiWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords $hasEmojiWords
     * @return self
     */
    public function setHasEmojiWords(?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords $hasEmojiWords): self
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
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords
     */
    public function getSuccessWords(): ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords
    {
        return $this->successWords;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords $successWords
     * @return self
     */
    public function setSuccessWords(?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords $successWords): self
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
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
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['duplicate_words'] ?? null) !== null && is_array($v)) {
            $obj->duplicateWords = \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerDuplicateWords::fromArray($v);
        }
        if (($v = $data['exceed_length_words'] ?? null) !== null && is_array($v)) {
            $obj->exceedLengthWords = \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLengthWords::fromArray($v);
        }
        if (($v = $data['exceed_limit_words'] ?? null) !== null && is_array($v)) {
            $obj->exceedLimitWords = \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerExceedLimitWords::fromArray($v);
        }
        if (($v = $data['has_emoji_words'] ?? null) !== null && is_array($v)) {
            $obj->hasEmojiWords = \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['success_words'] ?? null) !== null && is_array($v)) {
            $obj->successWords = \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerSuccessWords::fromArray($v);
        }
        return $obj;
    }
}
