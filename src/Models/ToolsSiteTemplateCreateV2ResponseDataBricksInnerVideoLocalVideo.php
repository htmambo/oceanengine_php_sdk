<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo implements \JsonSerializable
{
    /**
     * 用户自行上传的图片url，当`local_video`不为空时，有值
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * 视频ID，本地视频上传后得到的视频云id，对应的是[【获取视频素材】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710601820172）接口获取的视频ID，当`local_video`不为空时，有值
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 用户自行上传的图片url，当`local_video`不为空时，有值
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * 用户自行上传的图片url，当`local_video`不为空时，有值
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * 视频ID，本地视频上传后得到的视频云id，对应的是[【获取视频素材】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710601820172）接口获取的视频ID，当`local_video`不为空时，有值
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID，本地视频上传后得到的视频云id，对应的是[【获取视频素材】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710601820172）接口获取的视频ID，当`local_video`不为空时，有值
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->posterUrl !== null) {
            $result['poster_url'] = $this->posterUrl;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['poster_url'] ?? null) !== null) {
            $obj->posterUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
