<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAgentGetV2V2ResponseDataCursorInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * @var int
     */
    protected ?int $cursorSize = null;

    /**
     * @var int
     */
    protected ?int $hasMore = null;

    /**
     * @var int
     */
    protected ?int $totalNumber = null;

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
     * @return int
     */
    public function getCursorSize(): ?int
    {
        return $this->cursorSize;
    }

    /**
     * @param int $cursorSize
     * @return self
     */
    public function setCursorSize(?int $cursorSize): self
    {
        $this->cursorSize = $cursorSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getHasMore(): ?int
    {
        return $this->hasMore;
    }

    /**
     * @param int $hasMore
     * @return self
     */
    public function setHasMore(?int $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumber(): ?int
    {
        return $this->totalNumber;
    }

    /**
     * @param int $totalNumber
     * @return self
     */
    public function setTotalNumber(?int $totalNumber): self
    {
        $this->totalNumber = $totalNumber;
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
        if ($this->cursorSize !== null) {
            $result['cursor_size'] = $this->cursorSize;
        }
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
        if ($this->totalNumber !== null) {
            $result['total_number'] = $this->totalNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (int) $v;
        }
        if (($v = $data['cursor_size'] ?? null) !== null) {
            $obj->cursorSize = (int) $v;
        }
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (int) $v;
        }
        if (($v = $data['total_number'] ?? null) !== null) {
            $obj->totalNumber = (int) $v;
        }
        return $obj;
    }
}
