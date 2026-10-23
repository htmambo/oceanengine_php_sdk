<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandUploadImageV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandUploadImageV30ResponseDataImage
     */
    protected ?\Oceanengine\Models\BrandUploadImageV30ResponseDataImage $image = null;

    /**
     * @return \Oceanengine\Models\BrandUploadImageV30ResponseDataImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandUploadImageV30ResponseDataImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandUploadImageV30ResponseDataImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandUploadImageV30ResponseDataImage $image): self
    {
        $this->image = $image;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandUploadImageV30ResponseDataImage::fromArray($v);
        }
        return $obj;
    }
}
