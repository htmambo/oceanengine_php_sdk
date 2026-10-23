<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getPageInfo(): ?array
    {
        return $this->pageInfo;
    }

    /**
     * @param array<string,mixed> $pageInfo
     * @return self
     */
    public function setPageInfo(?array $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomAsyncTaskGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = $v;
        }
        return $obj;
    }
}
