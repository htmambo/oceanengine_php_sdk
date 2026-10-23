<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdKeywordsGetV10ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 页码
     * @var int
     */
    protected ?int $page = null;

    /**
     * 每页数目
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 关键词总数
     * @var int
     */
    protected ?int $totalNum = null;

    /**
     * 页面总数
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
     * 每页数目
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 每页数目
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 关键词总数
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * 关键词总数
     * @param int $totalNum
     * @return self
     */
    public function setTotalNum(?int $totalNum): self
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * 页面总数
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * 页面总数
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
