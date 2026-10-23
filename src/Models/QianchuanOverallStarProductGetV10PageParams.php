<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10PageParams implements \JsonSerializable
{
    /**
     * 游标
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * 页数
     * @var int
     */
    protected ?int $page = null;

    /**
     * 分页大小，建议10，不超过50
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 游标
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 游标
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页数
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页数
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 分页大小，建议10，不超过50
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 分页大小，建议10，不超过50
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (int) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        return $obj;
    }
}
