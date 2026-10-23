<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentMid2itemIdV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsCommentMid2itemIdV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
