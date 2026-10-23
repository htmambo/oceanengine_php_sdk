<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileEbpVideoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 视频素材列表
     * @var \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 视频素材列表
     * @return \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 视频素材列表
     * @param \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\FileEbpVideoGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
