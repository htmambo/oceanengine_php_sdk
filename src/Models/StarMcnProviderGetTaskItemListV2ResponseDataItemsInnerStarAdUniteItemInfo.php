<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo implements \JsonSerializable
{
    /**
     * 投广状态
     * @var int
     */
    protected ?int $adStatus = null;

    /**
     * 预估服务商可结算收益
     * @var int
     */
    protected ?int $estProviderReward = null;

    /**
     * 预估实时广告消耗
     * @var int
     */
    protected ?int $estRealTimeAdCost = null;

    /**
     * 预估实时自然消耗
     * @var int
     */
    protected ?int $estRealTimeNaturalCost = null;

    /**
     * 预估实时总消耗
     * @var int
     */
    protected ?int $estRealTimeTotalCost = null;

    /**
     * 是否高潜达人视频
     * @var bool
     */
    protected ?bool $highPotentialAuthor = null;

    /**
     * 投放状态
     * @var int
     */
    protected ?int $itemStatus = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 服务商已结算收益
     * @var int
     */
    protected ?int $providerSettledReward = null;

    /**
     * 投广状态
     * @return int
     */
    public function getAdStatus(): ?int
    {
        return $this->adStatus;
    }

    /**
     * 投广状态
     * @param int $adStatus
     * @return self
     */
    public function setAdStatus(?int $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * 预估服务商可结算收益
     * @return int
     */
    public function getEstProviderReward(): ?int
    {
        return $this->estProviderReward;
    }

    /**
     * 预估服务商可结算收益
     * @param int $estProviderReward
     * @return self
     */
    public function setEstProviderReward(?int $estProviderReward): self
    {
        $this->estProviderReward = $estProviderReward;
        return $this;
    }

    /**
     * 预估实时广告消耗
     * @return int
     */
    public function getEstRealTimeAdCost(): ?int
    {
        return $this->estRealTimeAdCost;
    }

    /**
     * 预估实时广告消耗
     * @param int $estRealTimeAdCost
     * @return self
     */
    public function setEstRealTimeAdCost(?int $estRealTimeAdCost): self
    {
        $this->estRealTimeAdCost = $estRealTimeAdCost;
        return $this;
    }

    /**
     * 预估实时自然消耗
     * @return int
     */
    public function getEstRealTimeNaturalCost(): ?int
    {
        return $this->estRealTimeNaturalCost;
    }

    /**
     * 预估实时自然消耗
     * @param int $estRealTimeNaturalCost
     * @return self
     */
    public function setEstRealTimeNaturalCost(?int $estRealTimeNaturalCost): self
    {
        $this->estRealTimeNaturalCost = $estRealTimeNaturalCost;
        return $this;
    }

    /**
     * 预估实时总消耗
     * @return int
     */
    public function getEstRealTimeTotalCost(): ?int
    {
        return $this->estRealTimeTotalCost;
    }

    /**
     * 预估实时总消耗
     * @param int $estRealTimeTotalCost
     * @return self
     */
    public function setEstRealTimeTotalCost(?int $estRealTimeTotalCost): self
    {
        $this->estRealTimeTotalCost = $estRealTimeTotalCost;
        return $this;
    }

    /**
     * 是否高潜达人视频
     * @return bool
     */
    public function getHighPotentialAuthor(): ?bool
    {
        return $this->highPotentialAuthor;
    }

    /**
     * 是否高潜达人视频
     * @param bool $highPotentialAuthor
     * @return self
     */
    public function setHighPotentialAuthor(?bool $highPotentialAuthor): self
    {
        $this->highPotentialAuthor = $highPotentialAuthor;
        return $this;
    }

    /**
     * 投放状态
     * @return int
     */
    public function getItemStatus(): ?int
    {
        return $this->itemStatus;
    }

    /**
     * 投放状态
     * @param int $itemStatus
     * @return self
     */
    public function setItemStatus(?int $itemStatus): self
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 服务商已结算收益
     * @return int
     */
    public function getProviderSettledReward(): ?int
    {
        return $this->providerSettledReward;
    }

    /**
     * 服务商已结算收益
     * @param int $providerSettledReward
     * @return self
     */
    public function setProviderSettledReward(?int $providerSettledReward): self
    {
        $this->providerSettledReward = $providerSettledReward;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adStatus !== null) {
            $result['ad_status'] = $this->adStatus;
        }
        if ($this->estProviderReward !== null) {
            $result['est_provider_reward'] = $this->estProviderReward;
        }
        if ($this->estRealTimeAdCost !== null) {
            $result['est_real_time_ad_cost'] = $this->estRealTimeAdCost;
        }
        if ($this->estRealTimeNaturalCost !== null) {
            $result['est_real_time_natural_cost'] = $this->estRealTimeNaturalCost;
        }
        if ($this->estRealTimeTotalCost !== null) {
            $result['est_real_time_total_cost'] = $this->estRealTimeTotalCost;
        }
        if ($this->highPotentialAuthor !== null) {
            $result['high_potential_author'] = $this->highPotentialAuthor;
        }
        if ($this->itemStatus !== null) {
            $result['item_status'] = $this->itemStatus;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->providerSettledReward !== null) {
            $result['provider_settled_reward'] = $this->providerSettledReward;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_status'] ?? null) !== null) {
            $obj->adStatus = (int) $v;
        }
        if (($v = $data['est_provider_reward'] ?? null) !== null) {
            $obj->estProviderReward = (int) $v;
        }
        if (($v = $data['est_real_time_ad_cost'] ?? null) !== null) {
            $obj->estRealTimeAdCost = (int) $v;
        }
        if (($v = $data['est_real_time_natural_cost'] ?? null) !== null) {
            $obj->estRealTimeNaturalCost = (int) $v;
        }
        if (($v = $data['est_real_time_total_cost'] ?? null) !== null) {
            $obj->estRealTimeTotalCost = (int) $v;
        }
        if (($v = $data['high_potential_author'] ?? null) !== null) {
            $obj->highPotentialAuthor = (bool) $v;
        }
        if (($v = $data['item_status'] ?? null) !== null) {
            $obj->itemStatus = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['provider_settled_reward'] ?? null) !== null) {
            $obj->providerSettledReward = (int) $v;
        }
        return $obj;
    }
}
