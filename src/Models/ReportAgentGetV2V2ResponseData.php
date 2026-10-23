<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAgentGetV2V2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo $cursorInfo = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo $pageInfo): self
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
            $obj->cursorInfo = \Oceanengine\Models\ReportAgentGetV2V2ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportAgentGetV2V2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportAgentGetV2V2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
