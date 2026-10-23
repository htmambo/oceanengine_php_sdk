<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileCarouselAwemeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInner[]
     */
    protected ?array $awemeCarouselList = null;

    /**
     * @var \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo $cursorInfo = null;

    /**
     * @return \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInner[]
     */
    public function getAwemeCarouselList(): ?array
    {
        return $this->awemeCarouselList;
    }

    /**
     * @param \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInner[] $awemeCarouselList
     * @return self
     */
    public function setAwemeCarouselList(?array $awemeCarouselList): self
    {
        $this->awemeCarouselList = $awemeCarouselList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeCarouselList !== null) {
            $result['aweme_carousel_list'] = $this->awemeCarouselList;
        }
        if ($this->cursorInfo !== null) {
            $result['cursor_info'] = $this->cursorInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_carousel_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeCarouselList = array_map(fn ($vv) => \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataAwemeCarouselListInner::fromArray($vv), $v);
        }
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\FileCarouselAwemeGetV30ResponseDataCursorInfo::fromArray($v);
        }
        return $obj;
    }
}
