<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AsyncTaskGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,mixed>[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return array<string,mixed>[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param array<string,mixed>[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo $pageInfo): self
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
            $obj->list = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AsyncTaskGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
