<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueWechatInstanceListV2ResponseDataItemsInner[]
     */
    protected ?array $items = null;

    /**
     * 总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 总页数
     * @var int
     */
    protected ?int $totalPage = null;

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceListV2ResponseDataItemsInner[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceListV2ResponseDataItemsInner[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
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
     * 总页数
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * 总页数
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
        if ($this->items !== null) {
            $result['items'] = $this->items;
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
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = array_map(fn ($vv) => \Oceanengine\Models\ClueWechatInstanceListV2ResponseDataItemsInner::fromArray($vv), $v);
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
