<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImage implements \JsonSerializable
{
    /**
     * 图片
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImageImageInner[]
     */
    protected ?array $image = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 图片
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImageImageInner[]
     */
    public function getImage(): ?array
    {
        return $this->image;
    }

    /**
     * 图片
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImageImageInner[] $image
     * @return self
     */
    public function setImage(?array $image): self
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
            $obj->image = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfoGroupImageImageInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
