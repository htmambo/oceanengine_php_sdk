<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskDataV2ResponseData implements \JsonSerializable
{
    /**
     * 作品数据
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInner[]
     */
    protected ?array $itemList = null;

    /**
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo
     */
    protected ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo $taskInfo = null;

    /**
     * 作品数据
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInner[]
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * 作品数据
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInner[] $itemList
     * @return self
     */
    public function setItemList(?array $itemList): self
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo
     */
    public function getTaskInfo(): ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo
    {
        return $this->taskInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo $taskInfo
     * @return self
     */
    public function setTaskInfo(?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo $taskInfo): self
    {
        $this->taskInfo = $taskInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemList !== null) {
            $result['item_list'] = $this->itemList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->taskInfo !== null) {
            $result['task_info'] = $this->taskInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_list'] ?? null) !== null && is_array($v)) {
            $obj->itemList = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_info'] ?? null) !== null && is_array($v)) {
            $obj->taskInfo = \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo::fromArray($v);
        }
        return $obj;
    }
}
