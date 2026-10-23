<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo $cursorInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInner[]
     */
    protected ?array $validAuthorSubmittedVideos = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInner[]
     */
    public function getValidAuthorSubmittedVideos(): ?array
    {
        return $this->validAuthorSubmittedVideos;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInner[] $validAuthorSubmittedVideos
     * @return self
     */
    public function setValidAuthorSubmittedVideos(?array $validAuthorSubmittedVideos): self
    {
        $this->validAuthorSubmittedVideos = $validAuthorSubmittedVideos;
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
        if ($this->validAuthorSubmittedVideos !== null) {
            $result['valid_author_submitted_videos'] = $this->validAuthorSubmittedVideos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['valid_author_submitted_videos'] ?? null) !== null && is_array($v)) {
            $obj->validAuthorSubmittedVideos = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
