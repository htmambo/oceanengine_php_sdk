<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCreativeGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportCreativeGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportCreativeGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
