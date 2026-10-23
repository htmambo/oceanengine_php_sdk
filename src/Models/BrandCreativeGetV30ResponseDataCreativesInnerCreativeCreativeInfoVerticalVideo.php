<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideo implements \JsonSerializable
{
    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo $video = null;

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
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo $video): self
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
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoVerticalVideoVideo::fromArray($v);
        }
        return $obj;
    }
}
