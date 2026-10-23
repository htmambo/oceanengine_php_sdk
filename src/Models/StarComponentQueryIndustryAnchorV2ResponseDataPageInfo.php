<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryIndustryAnchorV2ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 数量
     * @var int
     */
    protected ?int $limit = null;

    /**
     * 页码
     * @var int
     */
    protected ?int $page = null;

    /**
     * 总量
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 数量
     * @return int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * 数量
     * @param int $limit
     * @return self
     */
    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;
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
     * 总量
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 总量
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['limit'] ?? null) !== null) {
            $obj->limit = (int) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
