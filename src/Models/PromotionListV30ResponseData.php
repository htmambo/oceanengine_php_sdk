<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataCursorInfo $cursorInfo = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\PromotionListV30ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\PromotionListV30ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\PromotionListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\PromotionListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->cursorInfo !== null) {
            $result['cursor_info'] = $this->cursorInfo;
        }
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
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\PromotionListV30ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\PromotionListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
