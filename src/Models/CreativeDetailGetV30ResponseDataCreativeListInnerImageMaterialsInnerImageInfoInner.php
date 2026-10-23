<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerImageInfoInner implements \JsonSerializable
{
    /**
     * 图片ID
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * 图片描述，搜索创意素材类型为橱窗素材时返回
     * @var string
     */
    protected ?string $name = null;

    /**
     * 图片ID
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * 图片ID
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * 图片描述，搜索创意素材类型为橱窗素材时返回
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 图片描述，搜索创意素材类型为橱窗素材时返回
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
