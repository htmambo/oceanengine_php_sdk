<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 页码
     * @var int
     */
    protected ?int $page = null;

    /**
     * 每页数量
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * total字段
     * @var int
     */
    protected ?int $total = null;

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
     * 每页数量
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 每页数量
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * total字段
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * total字段
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
