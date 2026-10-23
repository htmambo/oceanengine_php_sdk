<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage $image = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo $video = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * 标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoImage::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoHorizontalImageVideoVideo::fromArray($v);
        }
        return $obj;
    }
}
