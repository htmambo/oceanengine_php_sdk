<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic implements \JsonSerializable
{
    /**
     * 音乐id
     * @var string
     */
    protected ?string $musicId = null;

    /**
     * 音乐播放url
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * 音乐vid
     * @var string
     */
    protected ?string $musicVid = null;

    /**
     * 音乐id
     * @return string
     */
    public function getMusicId(): ?string
    {
        return $this->musicId;
    }

    /**
     * 音乐id
     * @param string $musicId
     * @return self
     */
    public function setMusicId(?string $musicId): self
    {
        $this->musicId = $musicId;
        return $this;
    }

    /**
     * 音乐播放url
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * 音乐播放url
     * @param string $musicUrl
     * @return self
     */
    public function setMusicUrl(?string $musicUrl): self
    {
        $this->musicUrl = $musicUrl;
        return $this;
    }

    /**
     * 音乐vid
     * @return string
     */
    public function getMusicVid(): ?string
    {
        return $this->musicVid;
    }

    /**
     * 音乐vid
     * @param string $musicVid
     * @return self
     */
    public function setMusicVid(?string $musicVid): self
    {
        $this->musicVid = $musicVid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->musicId !== null) {
            $result['music_id'] = $this->musicId;
        }
        if ($this->musicUrl !== null) {
            $result['music_url'] = $this->musicUrl;
        }
        if ($this->musicVid !== null) {
            $result['music_vid'] = $this->musicVid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['music_id'] ?? null) !== null) {
            $obj->musicId = (string) $v;
        }
        if (($v = $data['music_url'] ?? null) !== null) {
            $obj->musicUrl = (string) $v;
        }
        if (($v = $data['music_vid'] ?? null) !== null) {
            $obj->musicVid = (string) $v;
        }
        return $obj;
    }
}
