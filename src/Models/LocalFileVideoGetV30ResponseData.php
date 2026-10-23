<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoGetV30ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoGetV30ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoGetV30ResponseDataVideoListInner[] $videoList
     * @return self
     */
    public function setVideoList(?array $videoList): self
    {
        $this->videoList = $videoList;
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
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalFileVideoGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\LocalFileVideoGetV30ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
