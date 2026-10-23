<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsLogSearchV10ResponseData implements \JsonSerializable
{
    /**
     * 日志详情
     * @var \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInner[]
     */
    protected ?array $logs = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 日志详情
     * @return \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInner[]
     */
    public function getLogs(): ?array
    {
        return $this->logs;
    }

    /**
     * 日志详情
     * @param \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInner[] $logs
     * @return self
     */
    public function setLogs(?array $logs): self
    {
        $this->logs = $logs;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo $pageInfo): self
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
            $obj->logs = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataLogsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanToolsLogSearchV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
