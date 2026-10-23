<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMixcutTaskSaveV30RequestVideosInner implements \JsonSerializable
{
    /**
     * 视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频名称（支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50，不传入默认以原视频的名称保存）
     * @var string
     */
    protected ?string $videoName = null;

    /**
     * 视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频id
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频名称（支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50，不传入默认以原视频的名称保存）
     * @return string
     */
    public function getVideoName(): ?string
    {
        return $this->videoName;
    }

    /**
     * 视频名称（支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50，不传入默认以原视频的名称保存）
     * @param string $videoName
     * @return self
     */
    public function setVideoName(?string $videoName): self
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoName !== null) {
            $result['video_name'] = $this->videoName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_name'] ?? null) !== null) {
            $obj->videoName = (string) $v;
        }
        return $obj;
    }
}
