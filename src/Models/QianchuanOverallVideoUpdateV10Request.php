<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * 必填，多号的uid*pid关系是表达在这里
     * @var \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestMultiProductCreativeListInner[]
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
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
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
     * @return \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * 必填，多号的uid*pid关系是表达在这里
     * @return \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * 必填，多号的uid*pid关系是表达在这里
     * @param \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
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
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoUpdateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
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
