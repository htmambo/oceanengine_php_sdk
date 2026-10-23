<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo implements \JsonSerializable
{
    /**
     * 样例视频封面url
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 样例视频url
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 样例视频封面url
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 样例视频封面url
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 样例视频url
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 样例视频url
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
