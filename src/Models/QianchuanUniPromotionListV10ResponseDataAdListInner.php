<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseDataAdListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo $adInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerProductInfoInner[]
     */
    protected ?array $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerRoomInfoInner[]
     */
    protected ?array $roomInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo $statsInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo
     */
    public function getAdInfo(): ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo
    {
        return $this->adInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo $adInfo
     * @return self
     */
    public function setAdInfo(?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo $adInfo): self
    {
        $this->adInfo = $adInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerProductInfoInner[]
     */
    public function getProductInfo(): ?array
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerProductInfoInner[] $productInfo
     * @return self
     */
    public function setProductInfo(?array $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerRoomInfoInner[]
     */
    public function getRoomInfo(): ?array
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerRoomInfoInner[] $roomInfo
     * @return self
     */
    public function setRoomInfo(?array $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo
     */
    public function getStatsInfo(): ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo
    {
        return $this->statsInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo $statsInfo
     * @return self
     */
    public function setStatsInfo(?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo $statsInfo): self
    {
        $this->statsInfo = $statsInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adInfo !== null) {
            $result['ad_info'] = $this->adInfo;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
        }
        if ($this->statsInfo !== null) {
            $result['stats_info'] = $this->statsInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_info'] ?? null) !== null && is_array($v)) {
            $obj->adInfo = \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo::fromArray($v);
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerProductInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerRoomInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['stats_info'] ?? null) !== null && is_array($v)) {
            $obj->statsInfo = \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo::fromArray($v);
        }
        return $obj;
    }
}
