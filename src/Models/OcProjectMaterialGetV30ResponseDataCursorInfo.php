<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataCursorInfo implements \JsonSerializable
{
    /**
     * 本次游标分页请求的数据量。
     * @var int
     */
    protected ?int $count = null;

    /**
     * 下一次分页拉取使用的游标值。
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * 是否还有下一页。
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * 本次游标分页请求的数据量。
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * 本次游标分页请求的数据量。
     * @param int $count
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 下一次分页拉取使用的游标值。
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 下一次分页拉取使用的游标值。
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 是否还有下一页。
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * 是否还有下一页。
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
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
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
        if (($v = $data['count'] ?? null) !== null) {
            $obj->count = (int) $v;
        }
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (int) $v;
        }
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        return $obj;
    }
}
