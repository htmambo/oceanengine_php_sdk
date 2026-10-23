<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigCreateV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * promotionId
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 策略数据(列表中strategy_id需唯一, 即同一个策略（strategy）的策略配置项列表(strategy_state)，需放到同一个对象内，不可分开传递)
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInner[]
     */
    protected ?array $strategyData = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * promotionId
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * promotionId
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 策略数据(列表中strategy_id需唯一, 即同一个策略（strategy）的策略配置项列表(strategy_state)，需放到同一个对象内，不可分开传递)
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInner[]
     */
    public function getStrategyData(): ?array
    {
        return $this->strategyData;
    }

    /**
     * 策略数据(列表中strategy_id需唯一, 即同一个策略（strategy）的策略配置项列表(strategy_state)，需放到同一个对象内，不可分开传递)
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInner[] $strategyData
     * @return self
     */
    public function setStrategyData(?array $strategyData): self
    {
        $this->strategyData = $strategyData;
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
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->strategyData !== null) {
            $result['strategy_data'] = $this->strategyData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['strategy_data'] ?? null) !== null && is_array($v)) {
            $obj->strategyData = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
