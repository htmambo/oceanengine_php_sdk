<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOptionalItemsListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo $cursorInfo = null;

    /**
     * @var \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataVideoListInner[] $videoList
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
        if ($this->cursorInfo !== null) {
            $result['cursor_info'] = $this->cursorInfo;
        }
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\DouplusOptionalItemsListV30ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
