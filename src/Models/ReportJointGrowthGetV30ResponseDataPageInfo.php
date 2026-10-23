<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportJointGrowthGetV30ResponseDataPageInfo implements \JsonSerializable
{
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
     * 总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * @var int
     */
    protected ?int $totalPage = null;

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
     * 总数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 总数
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
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
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        if ($this->totalPage !== null) {
            $result['total_page'] = $this->totalPage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        if (($v = $data['total_page'] ?? null) !== null) {
            $obj->totalPage = (int) $v;
        }
        return $obj;
    }
}
