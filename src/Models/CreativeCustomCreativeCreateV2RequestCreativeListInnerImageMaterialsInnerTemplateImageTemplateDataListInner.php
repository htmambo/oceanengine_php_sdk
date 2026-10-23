<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImageTemplateDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $backgroundImageId = null;

    /**
     * @return string
     */
    public function getBackgroundImageId(): ?string
    {
        return $this->backgroundImageId;
    }

    /**
     * @param string $backgroundImageId
     * @return self
     */
    public function setBackgroundImageId(?string $backgroundImageId): self
    {
        $this->backgroundImageId = $backgroundImageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->backgroundImageId !== null) {
            $result['background_image_id'] = $this->backgroundImageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['background_image_id'] ?? null) !== null) {
            $obj->backgroundImageId = (string) $v;
        }
        return $obj;
    }
}
