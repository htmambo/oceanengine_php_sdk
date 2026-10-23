<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferListV30PageInfo implements \JsonSerializable
{
    /**
     * 页码，从1开始，仅支持page_size * page_num < 1w的深度分页
     * @var int
     */
    protected ?int $pageNum = null;

    /**
     * 分页大小，范围：1-100
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 页码，从1开始，仅支持page_size * page_num < 1w的深度分页
     * @return int
     */
    public function getPageNum(): ?int
    {
        return $this->pageNum;
    }

    /**
     * 页码，从1开始，仅支持page_size * page_num < 1w的深度分页
     * @param int $pageNum
     * @return self
     */
    public function setPageNum(?int $pageNum): self
    {
        $this->pageNum = $pageNum;
        return $this;
    }

    /**
     * 分页大小，范围：1-100
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 分页大小，范围：1-100
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
        if ($this->pageNum !== null) {
            $result['page_num'] = $this->pageNum;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_num'] ?? null) !== null) {
            $obj->pageNum = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        return $obj;
    }
}
