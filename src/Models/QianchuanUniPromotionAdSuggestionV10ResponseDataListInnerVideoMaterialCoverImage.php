<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterialCoverImage implements \JsonSerializable
{
    /**
     * 图片ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 图片链接
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * 图片ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 图片ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 图片链接
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 图片链接
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        return $obj;
    }
}
