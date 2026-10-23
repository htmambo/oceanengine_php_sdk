<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage $image = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo $video = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo $video): self
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
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerImage::fromArray($v);
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInnerVideo::fromArray($v);
        }
        return $obj;
    }
}
