<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo implements \JsonSerializable
{
    /**
     * 背景图片列表
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * 视频列表
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * 背景图片列表
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 背景图片列表
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * 视频列表
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * 视频列表
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoVideoListInner[] $videoList
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
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoImageInfoBkListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
