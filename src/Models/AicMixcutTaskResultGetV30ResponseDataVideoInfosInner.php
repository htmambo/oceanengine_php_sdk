<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMixcutTaskResultGetV30ResponseDataVideoInfosInner implements \JsonSerializable
{
    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频名称
     * @var string
     */
    protected ?string $videoName = null;

    /**
     * 视频使用的脚本内容
     * @var string
     */
    protected ?string $videoScript = null;

    /**
     * 视频预览链接，可利用此链接批量下载视频
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频名称
     * @return string
     */
    public function getVideoName(): ?string
    {
        return $this->videoName;
    }

    /**
     * 视频名称
     * @param string $videoName
     * @return self
     */
    public function setVideoName(?string $videoName): self
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * 视频使用的脚本内容
     * @return string
     */
    public function getVideoScript(): ?string
    {
        return $this->videoScript;
    }

    /**
     * 视频使用的脚本内容
     * @param string $videoScript
     * @return self
     */
    public function setVideoScript(?string $videoScript): self
    {
        $this->videoScript = $videoScript;
        return $this;
    }

    /**
     * 视频预览链接，可利用此链接批量下载视频
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频预览链接，可利用此链接批量下载视频
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
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoName !== null) {
            $result['video_name'] = $this->videoName;
        }
        if ($this->videoScript !== null) {
            $result['video_script'] = $this->videoScript;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
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
        if (($v = $data['video_script'] ?? null) !== null) {
            $obj->videoScript = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
