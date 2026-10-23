<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileCarouselAwemeGetV30ResponseDataCursorInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cursor = null;

    /**
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * @return string
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * @param string $cursor
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
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
            $obj->cursor = (string) $v;
        }
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        return $obj;
    }
}
