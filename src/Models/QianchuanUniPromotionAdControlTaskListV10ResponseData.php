<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskListV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 调控任务列表
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 调控任务列表
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * 调控任务列表
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInner[] $taskList
     * @return self
     */
    public function setTaskList(?array $taskList): self
    {
        $this->taskList = $taskList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->taskList !== null) {
            $result['task_list'] = $this->taskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
