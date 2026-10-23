<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfoProductImagesInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $imageUri = null;

    /**
     * @return string
     */
    public function getImageUri(): ?string
    {
        return $this->imageUri;
    }

    /**
     * @param string $imageUri
     * @return self
     */
    public function setImageUri(?string $imageUri): self
    {
        $this->imageUri = $imageUri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageUri !== null) {
            $result['image_uri'] = $this->imageUri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_uri'] ?? null) !== null) {
            $obj->imageUri = (string) $v;
        }
        return $obj;
    }
}
