<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupListV2ResponseDataPagination implements \JsonSerializable
{
    /**
     * 是否还有下一页
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * 页内数量
     * @var int
     */
    protected ?int $limit = null;

    /**
     * 页码
     * @var int
     */
    protected ?int $page = null;

    /**
     * 总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 是否还有下一页
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * 是否还有下一页
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * 页内数量
     * @return int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * 页内数量
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
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
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
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
