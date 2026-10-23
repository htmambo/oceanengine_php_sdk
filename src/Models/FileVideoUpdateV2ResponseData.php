<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 视频列表
     * @var \Oceanengine\Models\FileVideoUpdateV2ResponseDataVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * 视频列表
     * @return \Oceanengine\Models\FileVideoUpdateV2ResponseDataVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * 视频列表
     * @param \Oceanengine\Models\FileVideoUpdateV2ResponseDataVideosInner[] $videos
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
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\FileVideoUpdateV2ResponseDataVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
