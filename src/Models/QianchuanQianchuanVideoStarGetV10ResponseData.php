<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanQianchuanVideoStarGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataVideoListInner[] $videoList
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
            $obj->pageInfo = \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
