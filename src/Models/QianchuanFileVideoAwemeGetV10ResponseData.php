<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoAwemeGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataVideoListInner[] $videoList
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
            $obj->pageInfo = \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanFileVideoAwemeGetV10ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
