<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInnerHasEmojiWords implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $phraseWords = null;

    /**
     * @var string[]
     */
    protected ?array $preciseWords = null;

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
        if (($v = $data['phrase_words'] ?? null) !== null && is_array($v)) {
            $obj->phraseWords = $v;
        }
        if (($v = $data['precise_words'] ?? null) !== null && is_array($v)) {
            $obj->preciseWords = $v;
        }
        return $obj;
    }
}
