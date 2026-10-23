<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionProductAwemeGetV10ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 页码游标值
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * 是否有下一页
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * 页码游标值
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 页码游标值
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 是否有下一页
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * 是否有下一页
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cursor !== null) {
            $result['cursor'] = $this->cursor;
        }
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (int) $v;
        }
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        return $obj;
    }
}
