<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreen implements \JsonSerializable
{
    /**
     * 背景图
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * 视频信息
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * 背景图
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 背景图
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * 视频信息
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * 视频信息
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenVideoListInner[] $videoList
     * @return self
     */
    public function setVideoList(?array $videoList): self
    {
        $this->videoList = $videoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageInfoBkList !== null) {
            $result['image_info_bk_list'] = $this->imageInfoBkList;
        }
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info_bk_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenImageInfoBkListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
