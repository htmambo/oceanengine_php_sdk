<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordDeleteV2V2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $keywordIds = null;

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
     * @return int[]
     */
    public function getKeywordIds(): ?array
    {
        return $this->keywordIds;
    }

    /**
     * @param int[] $keywordIds
     * @return self
     */
    public function setKeywordIds(?array $keywordIds): self
    {
        $this->keywordIds = $keywordIds;
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
        if ($this->keywordIds !== null) {
            $result['keyword_ids'] = $this->keywordIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['keyword_ids'] ?? null) !== null && is_array($v)) {
            $obj->keywordIds = $v;
        }
        return $obj;
    }
}
