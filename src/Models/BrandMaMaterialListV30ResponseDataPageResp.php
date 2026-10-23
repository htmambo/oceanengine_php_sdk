<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseDataPageResp implements \JsonSerializable
{
    /**
     * 当前页面
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
    protected ?int $total = null;

    /**
     * 当前页面
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 当前页面
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
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总数
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
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
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
