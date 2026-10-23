<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOptionalItemsListV30ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var bool
     */
    protected ?bool $isHardSell = null;

    /**
     * @var bool
     */
    protected ?bool $isImg = null;

    /**
     * @var string
     */
    protected ?string $itemId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string[]
     */
    protected ?array $url = null;

    /**
     * @var string[]
     */
    protected ?array $videoCoverUrl = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsHardSell(): ?bool
    {
        return $this->isHardSell;
    }

    /**
     * @param bool $isHardSell
     * @return self
     */
    public function setIsHardSell(?bool $isHardSell): self
    {
        $this->isHardSell = $isHardSell;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsImg(): ?bool
    {
        return $this->isImg;
    }

    /**
     * @param bool $isImg
     * @return self
     */
    public function setIsImg(?bool $isImg): self
    {
        $this->isImg = $isImg;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
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
     * @return string[]
     */
    public function getUrl(): ?array
    {
        return $this->url;
    }

    /**
     * @param string[] $url
     * @return self
     */
    public function setUrl(?array $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoCoverUrl(): ?array
    {
        return $this->videoCoverUrl;
    }

    /**
     * @param string[] $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?array $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->isHardSell !== null) {
            $result['is_hard_sell'] = $this->isHardSell;
        }
        if ($this->isImg !== null) {
            $result['is_img'] = $this->isImg;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['is_hard_sell'] ?? null) !== null) {
            $obj->isHardSell = (bool) $v;
        }
        if (($v = $data['is_img'] ?? null) !== null) {
            $obj->isImg = (bool) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null && is_array($v)) {
            $obj->url = $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null && is_array($v)) {
            $obj->videoCoverUrl = $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
