<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * 是否为派生创意标识，1：是，0：不是
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 是否为派生创意标识，1：是，0：不是
     * @return int
     */
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * 是否为派生创意标识，1：是，0：不是
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
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
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
