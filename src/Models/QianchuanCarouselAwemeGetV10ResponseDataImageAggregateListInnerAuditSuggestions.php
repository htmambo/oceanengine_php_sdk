<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $ad = null;

    /**
     * @var string[]
     */
    protected ?array $content = null;

    /**
     * @return string[]
     */
    public function getAd(): ?array
    {
        return $this->ad;
    }

    /**
     * @param string[] $ad
     * @return self
     */
    public function setAd(?array $ad): self
    {
        $this->ad = $ad;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * @param string[] $content
     * @return self
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ad !== null) {
            $result['ad'] = $this->ad;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad'] ?? null) !== null && is_array($v)) {
            $obj->ad = $v;
        }
        if (($v = $data['content'] ?? null) !== null && is_array($v)) {
            $obj->content = $v;
        }
        return $obj;
    }
}
