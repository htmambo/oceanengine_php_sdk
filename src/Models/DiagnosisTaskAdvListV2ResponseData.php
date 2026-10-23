<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAdvListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataTaskListInner[] $taskList
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
            $obj->pageInfo = \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\DiagnosisTaskAdvListV2ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
