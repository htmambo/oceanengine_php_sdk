<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreViolationEventGetV30ResponseData implements \JsonSerializable
{
    /**
     * 分页信息
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataAdvScoreEventInner[]
     */
    protected ?array $advScoreEvent = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 分页信息
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataAdvScoreEventInner[]
     */
    public function getAdvScoreEvent(): ?array
    {
        return $this->advScoreEvent;
    }

    /**
     * 分页信息
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataAdvScoreEventInner[] $advScoreEvent
     * @return self
     */
    public function setAdvScoreEvent(?array $advScoreEvent): self
    {
        $this->advScoreEvent = $advScoreEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->advScoreEvent !== null) {
            $result['adv_score_event'] = $this->advScoreEvent;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_score_event'] ?? null) !== null && is_array($v)) {
            $obj->advScoreEvent = array_map(fn ($vv) => \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataAdvScoreEventInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SecurityScoreViolationEventGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
