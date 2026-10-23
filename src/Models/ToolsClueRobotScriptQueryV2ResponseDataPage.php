<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotScriptQueryV2ResponseDataPage implements \JsonSerializable
{
    /**
     * 页面编号
     * @var int
     */
    protected ?int $pageNumber = null;

    /**
     * 页面大小
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 总页数
     * @var int
     */
    protected ?int $pageTotal = null;

    /**
     * 数据总数
     * @var int
     */
    protected ?int $total = null;

    /**
     * 页面编号
     * @return int
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    /**
     * 页面编号
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber(?int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;
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
     * 总页数
     * @return int
     */
    public function getPageTotal(): ?int
    {
        return $this->pageTotal;
    }

    /**
     * 总页数
     * @param int $pageTotal
     * @return self
     */
    public function setPageTotal(?int $pageTotal): self
    {
        $this->pageTotal = $pageTotal;
        return $this;
    }

    /**
     * 数据总数
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 数据总数
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
        if ($this->pageNumber !== null) {
            $result['page_number'] = $this->pageNumber;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->pageTotal !== null) {
            $result['page_total'] = $this->pageTotal;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_number'] ?? null) !== null) {
            $obj->pageNumber = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['page_total'] ?? null) !== null) {
            $obj->pageTotal = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
