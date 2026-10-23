<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLogSearchV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsLogSearchV2ResponseDataLogsInner[]
     */
    protected ?array $logs = null;

    /**
     * @var \Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsLogSearchV2ResponseDataLogsInner[]
     */
    public function getLogs(): ?array
    {
        return $this->logs;
    }

    /**
     * @param \Oceanengine\Models\ToolsLogSearchV2ResponseDataLogsInner[] $logs
     * @return self
     */
    public function setLogs(?array $logs): self
    {
        $this->logs = $logs;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->logs !== null) {
            $result['logs'] = $this->logs;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['logs'] ?? null) !== null && is_array($v)) {
            $obj->logs = array_map(fn ($vv) => \Oceanengine\Models\ToolsLogSearchV2ResponseDataLogsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsLogSearchV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
