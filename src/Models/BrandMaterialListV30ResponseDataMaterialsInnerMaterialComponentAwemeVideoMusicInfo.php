<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $musicId = null;

    /**
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $vid = null;

    /**
     * @return string
     */
    public function getMusicId(): ?string
    {
        return $this->musicId;
    }

    /**
     * @param string $musicId
     * @return self
     */
    public function setMusicId(?string $musicId): self
    {
        $this->musicId = $musicId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * @param string $musicUrl
     * @return self
     */
    public function setMusicUrl(?string $musicUrl): self
    {
        $this->musicUrl = $musicUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
     * @param string $vid
     * @return self
     */
    public function setVid(?string $vid): self
    {
        $this->vid = $vid;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
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
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (string) $v;
        }
        return $obj;
    }
}
