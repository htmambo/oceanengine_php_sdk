<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialAddV10Request implements \JsonSerializable
{
    /**
     * 需要添加素材的计划
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 视频和图片拆分开的多品素材结构
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

    /**
     * 需要添加素材的计划
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 需要添加素材的计划
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 视频和图片拆分开的多品素材结构
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * 视频和图片拆分开的多品素材结构
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
     * @return self
     */
    public function setMultiProductCreativeList(?array $multiProductCreativeList): self
    {
        $this->multiProductCreativeList = $multiProductCreativeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaList::fromArray($v);
        }
        return $obj;
    }
}
