<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAwemeGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo $cursorInfo = null;

    /**
     * 抖音视频列表
     * @var \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * 抖音视频列表
     * @return \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 抖音视频列表
     * @param \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo $pageInfo): self
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
            $obj->cursorInfo = \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\FileVideoAwemeGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
