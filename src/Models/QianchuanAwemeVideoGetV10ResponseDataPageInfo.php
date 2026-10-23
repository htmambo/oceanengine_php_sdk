<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeVideoGetV10ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 下一次分页拉取的游标值
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeVideoGetV10DataPageInfoHasMore
     */
    protected ?string $hasMore = null;

    /**
     * 下一次分页拉取的游标值
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 下一次分页拉取的游标值
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeVideoGetV10DataPageInfoHasMore
     */
    public function getHasMore(): ?string
    {
        return $this->hasMore;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeVideoGetV10DataPageInfoHasMore $hasMore
     * @return self
     */
    public function setHasMore(?string $hasMore): self
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
            $obj->hasMore = (string) $v;
        }
        return $obj;
    }
}
