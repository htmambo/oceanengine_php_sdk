<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DecorationCouponGetV30ResponseDataData implements \JsonSerializable
{
    /**
     * 卡券列表
     * @var \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo
     */
    protected ?\Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo $pageInfo = null;

    /**
     * 卡券列表
     * @return \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 卡券列表
     * @param \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DecorationCouponGetV30ResponseDataDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
