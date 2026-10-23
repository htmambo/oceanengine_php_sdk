<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdProductDeleteV10Request implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 千川广告账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 商品id list 注意：删除商品后将清空商品创意内容，可能引起计划整体成本波动及预估ROI变更，影响投放效果及保障状态，建议谨慎操作
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 千川广告账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 商品id list 注意：删除商品后将清空商品创意内容，可能引起计划整体成本波动及预估ROI变更，影响投放效果及保障状态，建议谨慎操作
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 商品id list 注意：删除商品后将清空商品创意内容，可能引起计划整体成本波动及预估ROI变更，影响投放效果及保障状态，建议谨慎操作
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
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        return $obj;
    }
}
