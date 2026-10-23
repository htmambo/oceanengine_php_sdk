<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeSuggestBidV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $suggestBid = null;

    /**
     * @return float
     */
    public function getSuggestBid(): ?float
    {
        return $this->suggestBid;
    }

    /**
     * @param float $suggestBid
     * @return self
     */
    public function setSuggestBid(?float $suggestBid): self
    {
        $this->suggestBid = $suggestBid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestBid !== null) {
            $result['suggest_bid'] = $this->suggestBid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggest_bid'] ?? null) !== null) {
            $obj->suggestBid = (float) $v;
        }
        return $obj;
    }
}
