<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 音频 id，可以同过音频上传接口获取（优先使用 audio_id）
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * 千川图文素材描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var \Oceanengine\Models\CarouselCreateV2RequestImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 音频 id，可以同过音频上传接口获取（优先使用 audio_id）
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * 音频 id，可以同过音频上传接口获取（优先使用 audio_id）
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * 千川图文素材描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 千川图文素材描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselCreateV2RequestImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\CarouselCreateV2RequestImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\CarouselCreateV2RequestImagesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
