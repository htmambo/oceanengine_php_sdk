<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoCreateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 商品创意素材信息
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 商品创意素材信息
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * 商品创意素材信息
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
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
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        return $obj;
    }
}
