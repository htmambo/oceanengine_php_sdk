<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordCampaignUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var string[]
     */
    protected ?array $phraseWords = null;

    /**
     * @var string[]
     */
    protected ?array $preciseWords = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

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
     * @return string[]
     */
    public function getPhraseWords(): ?array
    {
        return $this->phraseWords;
    }

    /**
     * @param string[] $phraseWords
     * @return self
     */
    public function setPhraseWords(?array $phraseWords): self
    {
        $this->phraseWords = $phraseWords;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPreciseWords(): ?array
    {
        return $this->preciseWords;
    }

    /**
     * @param string[] $preciseWords
     * @return self
     */
    public function setPreciseWords(?array $preciseWords): self
    {
        $this->preciseWords = $preciseWords;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->phraseWords !== null) {
            $result['phrase_words'] = $this->phraseWords;
        }
        if ($this->preciseWords !== null) {
            $result['precise_words'] = $this->preciseWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['phrase_words'] ?? null) !== null && is_array($v)) {
            $obj->phraseWords = $v;
        }
        if (($v = $data['precise_words'] ?? null) !== null && is_array($v)) {
            $obj->preciseWords = $v;
        }
        return $obj;
    }
}
