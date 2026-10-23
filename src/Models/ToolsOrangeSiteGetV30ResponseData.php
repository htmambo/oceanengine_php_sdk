<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsOrangeSiteGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal
     */
    protected ?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal $optimizeGoal = null;

    /**
     * @var \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal
     */
    public function getOptimizeGoal(): ?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal
    {
        return $this->optimizeGoal;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal $optimizeGoal
     * @return self
     */
    public function setOptimizeGoal(?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal $optimizeGoal): self
    {
        $this->optimizeGoal = $optimizeGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->optimizeGoal !== null) {
            $result['optimize_goal'] = $this->optimizeGoal;
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['optimize_goal'] ?? null) !== null && is_array($v)) {
            $obj->optimizeGoal = \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataOptimizeGoal::fromArray($v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsOrangeSiteGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
