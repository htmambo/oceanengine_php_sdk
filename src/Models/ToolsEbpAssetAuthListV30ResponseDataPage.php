<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthListV30ResponseDataPage implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * 页码
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页面大小
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * 总数
     * @var int
     */
    protected ?int $totalNumber = null;

    /**
     * 总页数
     * @var int
     */
    protected ?int $totalPage = null;

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
     * 页码
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页码
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页面大小
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
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * 总数
     * @return int
     */
    public function getTotalNumber(): ?int
    {
        return $this->totalNumber;
    }

    /**
     * 总数
     * @param int $totalNumber
     * @return self
     */
    public function setTotalNumber(?int $totalNumber): self
    {
        $this->totalNumber = $totalNumber;
        return $this;
    }

    /**
     * 总页数
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * 总页数
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
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->totalNumber !== null) {
            $result['total_number'] = $this->totalNumber;
        }
        if ($this->totalPage !== null) {
            $result['total_page'] = $this->totalPage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        if (($v = $data['total_number'] ?? null) !== null) {
            $obj->totalNumber = (int) $v;
        }
        if (($v = $data['total_page'] ?? null) !== null) {
            $obj->totalPage = (int) $v;
        }
        return $obj;
    }
}
