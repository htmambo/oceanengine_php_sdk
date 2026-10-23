<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting $creativeSetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 商品创意素材信息
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProductChannelInfoInner[]
     */
    protected ?array $productChannelInfo = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

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
     * 抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 商品创意素材信息
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * 商品创意素材信息
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
     * @return self
     */
    public function setMultiProductCreativeList(?array $multiProductCreativeList): self
    {
        $this->multiProductCreativeList = $multiProductCreativeList;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProductChannelInfoInner[]
     */
    public function getProductChannelInfo(): ?array
    {
        return $this->productChannelInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProductChannelInfoInner[] $productChannelInfo
     * @return self
     */
    public function setProductChannelInfo(?array $productChannelInfo): self
    {
        $this->productChannelInfo = $productChannelInfo;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->productChannelInfo !== null) {
            $result['product_channel_info'] = $this->productChannelInfo;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestCreativeSetting::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_channel_info'] ?? null) !== null && is_array($v)) {
            $obj->productChannelInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProductChannelInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestProgrammaticCreativeMediaList::fromArray($v);
        }
        return $obj;
    }
}
