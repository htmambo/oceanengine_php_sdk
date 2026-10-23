<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage $image = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo $video = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage $image): self
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
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo $video): self
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
            $obj->image = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoImage::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalImageVideoVideo::fromArray($v);
        }
        return $obj;
    }
}
