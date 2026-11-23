<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInner implements \JsonSerializable
{
    /**
     * 投放状态
     * @var int
     */
    protected ?int $adDeliveryType = null;

    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 计划名称
     * @var string
     */
    protected ?string $adName = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue
     */
    protected ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue $displayValue = null;

    /**
     * 计划投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 图片信息
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInner[]
     */
    protected ?array $imageInfos = null;

    /**
     * 询价单ID
     * @var int
     */
    protected ?int $inquiryId = null;

    /**
     * 询价单编号
     * @var string
     */
    protected ?string $inquiryNum = null;

    /**
     * 是否组件化创意
     * @var int
     */
    protected ?int $isComponent = null;

    /**
     * 当前时间是否超过投放时间
     * @var int
     */
    protected ?int $isOutOfAdEndTime = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 是否切换波塞冬V2
     * @var bool
     */
    protected ?bool $poseidonV2Flag = null;

    /**
     * 创意预览链接
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * 广告来源
     * @var int
     */
    protected ?int $sourceType = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $spuId = null;

    /**
     * 计划投放开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 库存ID列表
     * @var int[]
     */
    protected ?array $stockIds = null;

    /**
     * 创意标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频信息
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInner[]
     */
    protected ?array $videoInfos = null;

    /**
     * 投放状态
     * @return int
     */
    public function getAdDeliveryType(): ?int
    {
        return $this->adDeliveryType;
    }

    /**
     * 投放状态
     * @param int $adDeliveryType
     * @return self
     */
    public function setAdDeliveryType(?int $adDeliveryType): self
    {
        $this->adDeliveryType = $adDeliveryType;
        return $this;
    }

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划名称
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * 计划名称
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * 创意ID
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意ID
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue
     */
    public function getDisplayValue(): ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue
    {
        return $this->displayValue;
    }

    /**
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue $displayValue
     * @return self
     */
    public function setDisplayValue(?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue $displayValue): self
    {
        $this->displayValue = $displayValue;
        return $this;
    }

    /**
     * 计划投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 计划投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 图片信息
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInner[]
     */
    public function getImageInfos(): ?array
    {
        return $this->imageInfos;
    }

    /**
     * 图片信息
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInner[] $imageInfos
     * @return self
     */
    public function setImageInfos(?array $imageInfos): self
    {
        $this->imageInfos = $imageInfos;
        return $this;
    }

    /**
     * 询价单ID
     * @return int
     */
    public function getInquiryId(): ?int
    {
        return $this->inquiryId;
    }

    /**
     * 询价单ID
     * @param int $inquiryId
     * @return self
     */
    public function setInquiryId(?int $inquiryId): self
    {
        $this->inquiryId = $inquiryId;
        return $this;
    }

    /**
     * 询价单编号
     * @return string
     */
    public function getInquiryNum(): ?string
    {
        return $this->inquiryNum;
    }

    /**
     * 询价单编号
     * @param string $inquiryNum
     * @return self
     */
    public function setInquiryNum(?string $inquiryNum): self
    {
        $this->inquiryNum = $inquiryNum;
        return $this;
    }

    /**
     * 是否组件化创意
     * @return int
     */
    public function getIsComponent(): ?int
    {
        return $this->isComponent;
    }

    /**
     * 是否组件化创意
     * @param int $isComponent
     * @return self
     */
    public function setIsComponent(?int $isComponent): self
    {
        $this->isComponent = $isComponent;
        return $this;
    }

    /**
     * 当前时间是否超过投放时间
     * @return int
     */
    public function getIsOutOfAdEndTime(): ?int
    {
        return $this->isOutOfAdEndTime;
    }

    /**
     * 当前时间是否超过投放时间
     * @param int $isOutOfAdEndTime
     * @return self
     */
    public function setIsOutOfAdEndTime(?int $isOutOfAdEndTime): self
    {
        $this->isOutOfAdEndTime = $isOutOfAdEndTime;
        return $this;
    }

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 是否切换波塞冬V2
     * @return bool
     */
    public function getPoseidonV2Flag(): ?bool
    {
        return $this->poseidonV2Flag;
    }

    /**
     * 是否切换波塞冬V2
     * @param bool $poseidonV2Flag
     * @return self
     */
    public function setPoseidonV2Flag(?bool $poseidonV2Flag): self
    {
        $this->poseidonV2Flag = $poseidonV2Flag;
        return $this;
    }

    /**
     * 创意预览链接
     * @return string
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * 创意预览链接
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * 广告来源
     * @return int
     */
    public function getSourceType(): ?int
    {
        return $this->sourceType;
    }

    /**
     * 广告来源
     * @param int $sourceType
     * @return self
     */
    public function setSourceType(?int $sourceType): self
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getSpuId(): ?int
    {
        return $this->spuId;
    }

    /**
     * 商品ID
     * @param int $spuId
     * @return self
     */
    public function setSpuId(?int $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * 计划投放开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 计划投放开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 库存ID列表
     * @return int[]
     */
    public function getStockIds(): ?array
    {
        return $this->stockIds;
    }

    /**
     * 库存ID列表
     * @param int[] $stockIds
     * @return self
     */
    public function setStockIds(?array $stockIds): self
    {
        $this->stockIds = $stockIds;
        return $this;
    }

    /**
     * 创意标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 创意标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 视频信息
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInner[]
     */
    public function getVideoInfos(): ?array
    {
        return $this->videoInfos;
    }

    /**
     * 视频信息
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInner[] $videoInfos
     * @return self
     */
    public function setVideoInfos(?array $videoInfos): self
    {
        $this->videoInfos = $videoInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adDeliveryType !== null) {
            $result['ad_delivery_type'] = $this->adDeliveryType;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->displayValue !== null) {
            $result['display_value'] = $this->displayValue;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->imageInfos !== null) {
            $result['image_infos'] = $this->imageInfos;
        }
        if ($this->inquiryId !== null) {
            $result['inquiry_id'] = $this->inquiryId;
        }
        if ($this->inquiryNum !== null) {
            $result['inquiry_num'] = $this->inquiryNum;
        }
        if ($this->isComponent !== null) {
            $result['is_component'] = $this->isComponent;
        }
        if ($this->isOutOfAdEndTime !== null) {
            $result['is_out_of_ad_end_time'] = $this->isOutOfAdEndTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->poseidonV2Flag !== null) {
            $result['poseidon_v2_flag'] = $this->poseidonV2Flag;
        }
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        if ($this->sourceType !== null) {
            $result['source_type'] = $this->sourceType;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->stockIds !== null) {
            $result['stock_ids'] = $this->stockIds;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoInfos !== null) {
            $result['video_infos'] = $this->videoInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_delivery_type'] ?? null) !== null) {
            $obj->adDeliveryType = (int) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['display_value'] ?? null) !== null && is_array($v)) {
            $obj->displayValue = \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue::fromArray($v);
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['image_infos'] ?? null) !== null && is_array($v)) {
            $obj->imageInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['inquiry_id'] ?? null) !== null) {
            $obj->inquiryId = (int) $v;
        }
        if (($v = $data['inquiry_num'] ?? null) !== null) {
            $obj->inquiryNum = (string) $v;
        }
        if (($v = $data['is_component'] ?? null) !== null) {
            $obj->isComponent = (int) $v;
        }
        if (($v = $data['is_out_of_ad_end_time'] ?? null) !== null) {
            $obj->isOutOfAdEndTime = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['poseidon_v2_flag'] ?? null) !== null) {
            $obj->poseidonV2Flag = (bool) $v;
        }
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        if (($v = $data['source_type'] ?? null) !== null) {
            $obj->sourceType = (int) $v;
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['stock_ids'] ?? null) !== null && is_array($v)) {
            $obj->stockIds = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_infos'] ?? null) !== null && is_array($v)) {
            $obj->videoInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
