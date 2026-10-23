<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnMixListGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInner[]
     */
    protected ?array $mixList = null;

    /**
     * @var \Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo
     */
    protected ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo $taskInfo = null;

    /**
     * @return \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInner[]
     */
    public function getMixList(): ?array
    {
        return $this->mixList;
    }

    /**
     * @param \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInner[] $mixList
     * @return self
     */
    public function setMixList(?array $mixList): self
    {
        $this->mixList = $mixList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo
     */
    public function getTaskInfo(): ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo
    {
        return $this->taskInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo $taskInfo
     * @return self
     */
    public function setTaskInfo(?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo $taskInfo): self
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
        if ($this->mixList !== null) {
            $result['mix_list'] = $this->mixList;
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
        if (($v = $data['mix_list'] ?? null) !== null && is_array($v)) {
            $obj->mixList = array_map(fn ($vv) => \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarMcnMixListGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_info'] ?? null) !== null && is_array($v)) {
            $obj->taskInfo = \Oceanengine\Models\StarMcnMixListGetV2ResponseDataTaskInfo::fromArray($v);
        }
        return $obj;
    }
}
