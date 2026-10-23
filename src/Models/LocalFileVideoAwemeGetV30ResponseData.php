<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoAwemeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataVideoListInner[] $videoList
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
            $obj->pageInfo = \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\LocalFileVideoAwemeGetV30ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
