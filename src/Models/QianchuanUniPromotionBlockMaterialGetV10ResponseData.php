<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionBlockMaterialGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInner[]
     */
    protected ?array $carouselList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInner[]
     */
    public function getCarouselList(): ?array
    {
        return $this->carouselList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInner[] $carouselList
     * @return self
     */
    public function setCarouselList(?array $carouselList): self
    {
        $this->carouselList = $carouselList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataVideoListInner[] $videoList
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
        if ($this->carouselList !== null) {
            $result['carousel_list'] = $this->carouselList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
