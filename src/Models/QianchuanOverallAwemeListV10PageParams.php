<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10PageParams implements \JsonSerializable
{
    /**
     * 页码, 从 1 开始；  -1表示不分页取全量
     * @var int
     */
    protected ?int $page = null;

    /**
     * 每页数目, 约定<=500 (不同服务和接口限制可能不同)
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 页码, 从 1 开始；  -1表示不分页取全量
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页码, 从 1 开始；  -1表示不分页取全量
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页数目, 约定<=500 (不同服务和接口限制可能不同)
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 每页数目, 约定<=500 (不同服务和接口限制可能不同)
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
