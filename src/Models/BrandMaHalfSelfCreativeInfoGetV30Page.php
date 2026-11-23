<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30Page implements \JsonSerializable
{
    /**
     * 页码，不传默认1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 每页数量，不传默认10
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 页码，不传默认1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页码，不传默认1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页数量，不传默认10
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 每页数量，不传默认10
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
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        return $obj;
    }
}
