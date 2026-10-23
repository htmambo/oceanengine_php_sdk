<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAvatarUploadV2ResponseData implements \JsonSerializable
{
    /**
     * 账户头像图片ID
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * 账户头像图片ID
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * 账户头像图片ID
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        return $obj;
    }
}
