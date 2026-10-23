<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImage implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage $image = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage $image): self
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoSmallImageImage::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
