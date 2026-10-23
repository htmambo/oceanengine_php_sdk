<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoAwemeGetV10ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $count = null;

    /**
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * @var \Oceanengine\Models\QianchuanFileVideoAwemeGetV10DataPageInfoHasMore
     */
    protected ?string $hasMore = null;

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanFileVideoAwemeGetV10DataPageInfoHasMore
     */
    public function getHasMore(): ?string
    {
        return $this->hasMore;
    }

    /**
     * @param \Oceanengine\Models\QianchuanFileVideoAwemeGetV10DataPageInfoHasMore $hasMore
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
            $obj->hasMore = (string) $v;
        }
        return $obj;
    }
}
