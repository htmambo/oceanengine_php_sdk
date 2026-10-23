<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselAdGetV2ResponseDataCarouselsInnerAudio implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * @var string
     */
    protected ?string $audioUrl = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    /**
     * @param string $audioUrl
     * @return self
     */
    public function setAudioUrl(?string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
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
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->audioUrl !== null) {
            $result['audio_url'] = $this->audioUrl;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['audio_url'] ?? null) !== null) {
            $obj->audioUrl = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
