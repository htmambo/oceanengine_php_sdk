<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo implements \JsonSerializable
{
    /**
     * 视频原始地址，例如https://v.youku.com/v_show/id_xxx.html，当前仅支持优酷视频，当`online_video`不为空时，必填
     * @var string
     */
    protected ?string $originUrl = null;

    /**
     * 用户自行上传的图片url，选填，不填充该字段时，会读取线上视频原封面
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * 视频原始地址，例如https://v.youku.com/v_show/id_xxx.html，当前仅支持优酷视频，当`online_video`不为空时，必填
     * @return string
     */
    public function getOriginUrl(): ?string
    {
        return $this->originUrl;
    }

    /**
     * 视频原始地址，例如https://v.youku.com/v_show/id_xxx.html，当前仅支持优酷视频，当`online_video`不为空时，必填
     * @param string $originUrl
     * @return self
     */
    public function setOriginUrl(?string $originUrl): self
    {
        $this->originUrl = $originUrl;
        return $this;
    }

    /**
     * 用户自行上传的图片url，选填，不填充该字段时，会读取线上视频原封面
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * 用户自行上传的图片url，选填，不填充该字段时，会读取线上视频原封面
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->originUrl !== null) {
            $result['origin_url'] = $this->originUrl;
        }
        if ($this->posterUrl !== null) {
            $result['poster_url'] = $this->posterUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['origin_url'] ?? null) !== null) {
            $obj->originUrl = (string) $v;
        }
        if (($v = $data['poster_url'] ?? null) !== null) {
            $obj->posterUrl = (string) $v;
        }
        return $obj;
    }
}
