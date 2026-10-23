<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseDataPagination implements \JsonSerializable
{
    /**
     * 下拉列表使用，游标
     * @var int
     */
    protected ?int $cursor = null;

    /**
     * 下拉列表使用，是否还有数据
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * 分页模式
     * @var int
     */
    protected ?int $mode = null;

    /**
     * @var int
     */
    protected ?int $page = null;

    /**
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * @var int
     */
    protected ?int $totalNum = null;

    /**
     * @var int
     */
    protected ?int $totalPage = null;

    /**
     * 下拉列表使用，游标
     * @return int
     */
    public function getCursor(): ?int
    {
        return $this->cursor;
    }

    /**
     * 下拉列表使用，游标
     * @param int $cursor
     * @return self
     */
    public function setCursor(?int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 下拉列表使用，是否还有数据
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * 下拉列表使用，是否还有数据
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * 分页模式
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * 分页模式
     * @param int $mode
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * @param int $totalNum
     * @return self
     */
    public function setTotalNum(?int $totalNum): self
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * @param int $totalPage
     * @return self
     */
    public function setTotalPage(?int $totalPage): self
    {
        $this->totalPage = $totalPage;
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
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->totalNum !== null) {
            $result['total_num'] = $this->totalNum;
        }
        if ($this->totalPage !== null) {
            $result['total_page'] = $this->totalPage;
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
        if (($v = $data['mode'] ?? null) !== null) {
            $obj->mode = (int) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['total_num'] ?? null) !== null) {
            $obj->totalNum = (int) $v;
        }
        if (($v = $data['total_page'] ?? null) !== null) {
            $obj->totalPage = (int) $v;
        }
        return $obj;
    }
}
