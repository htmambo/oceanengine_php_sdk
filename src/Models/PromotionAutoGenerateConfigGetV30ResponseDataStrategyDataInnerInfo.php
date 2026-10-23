<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo implements \JsonSerializable
{
    /**
     * 样例视频封面url
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 样例视频vid
     * @var string
     */
    protected ?string $vid = null;

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
     * 样例视频vid
     * @return string
     */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
     * 样例视频vid
     * @param string $vid
     * @return self
     */
    public function setVid(?string $vid): self
    {
        $this->vid = $vid;
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
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
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
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
