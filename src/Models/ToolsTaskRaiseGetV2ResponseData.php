<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataReportsInner[]
     */
    protected ?array $reports = null;

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataReportsInner[]
     */
    public function getReports(): ?array
    {
        return $this->reports;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataReportsInner[] $reports
     * @return self
     */
    public function setReports(?array $reports): self
    {
        $this->reports = $reports;
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
        if ($this->reports !== null) {
            $result['reports'] = $this->reports;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['reports'] ?? null) !== null && is_array($v)) {
            $obj->reports = array_map(fn ($vv) => \Oceanengine\Models\ToolsTaskRaiseGetV2ResponseDataReportsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
