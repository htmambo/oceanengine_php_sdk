<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpVideoUpdateV30ResponseDataVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpVideoUpdateV30ResponseDataVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpVideoUpdateV30ResponseDataVideosInner[] $videos
     * @return self
     */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->videos !== null) {
            $result['videos'] = $this->videos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpVideoUpdateV30ResponseDataVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
