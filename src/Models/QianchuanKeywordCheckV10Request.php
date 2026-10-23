<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordCheckV10Request implements \JsonSerializable
{
    /**
     * 格式: int64
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 关键词列表
     * @var string[]
     */
    protected ?array $keywords = null;

    /**
     * 格式: int64
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 格式: int64
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 关键词列表
     * @return string[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * 关键词列表
     * @param string[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
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
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = $v;
        }
        return $obj;
    }
}
