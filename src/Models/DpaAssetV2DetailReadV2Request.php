<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2DetailReadV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 投放条件ID, 最多允许传入100个
     * @var int[]
     */
    protected ?array $assetIds = null;

    /**
     * 投放条件对应的线索商品ID, 最多允许传入100个
     * @var int[]
     */
    protected ?array $uniqueProductIds = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放条件ID, 最多允许传入100个
     * @return int[]
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }

    /**
     * 投放条件ID, 最多允许传入100个
     * @param int[] $assetIds
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->assetIds = $assetIds;
        return $this;
    }

    /**
     * 投放条件对应的线索商品ID, 最多允许传入100个
     * @return int[]
     */
    public function getUniqueProductIds(): ?array
    {
        return $this->uniqueProductIds;
    }

    /**
     * 投放条件对应的线索商品ID, 最多允许传入100个
     * @param int[] $uniqueProductIds
     * @return self
     */
    public function setUniqueProductIds(?array $uniqueProductIds): self
    {
        $this->uniqueProductIds = $uniqueProductIds;
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
        if ($this->assetIds !== null) {
            $result['asset_ids'] = $this->assetIds;
        }
        if ($this->uniqueProductIds !== null) {
            $result['unique_product_ids'] = $this->uniqueProductIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['asset_ids'] ?? null) !== null && is_array($v)) {
            $obj->assetIds = $v;
        }
        if (($v = $data['unique_product_ids'] ?? null) !== null && is_array($v)) {
            $obj->uniqueProductIds = $v;
        }
        return $obj;
    }
}
