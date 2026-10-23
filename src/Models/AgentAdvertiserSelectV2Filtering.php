<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserSelectV2Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCanCopy
     */
    protected ?string $canCopy = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCostPeriod
     */
    protected ?string $costPeriod = null;

    /**
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * @var bool
     */
    protected ?bool $isExistSale = null;

    /**
     * @var int
     */
    protected ?int $nongrantValidBalanceGt = null;

    /**
     * @var int
     */
    protected ?int $saleId = null;

    /**
     * @var string
     */
    protected ?string $saleName = null;

    /**
     * @var int
     */
    protected ?int $statCostFenGt = null;

    /**
     * @var int
     */
    protected ?int $totalBalanceGt = null;

    /**
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCanCopy
     */
    public function getCanCopy(): ?string
    {
        return $this->canCopy;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCanCopy $canCopy
     * @return self
     */
    public function setCanCopy(?string $canCopy): self
    {
        $this->canCopy = $canCopy;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCostPeriod
     */
    public function getCostPeriod(): ?string
    {
        return $this->costPeriod;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserSelectV2FilteringCostPeriod $costPeriod
     * @return self
     */
    public function setCostPeriod(?string $costPeriod): self
    {
        $this->costPeriod = $costPeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExistSale(): ?bool
    {
        return $this->isExistSale;
    }

    /**
     * @param bool $isExistSale
     * @return self
     */
    public function setIsExistSale(?bool $isExistSale): self
    {
        $this->isExistSale = $isExistSale;
        return $this;
    }

    /**
     * @return int
     */
    public function getNongrantValidBalanceGt(): ?int
    {
        return $this->nongrantValidBalanceGt;
    }

    /**
     * @param int $nongrantValidBalanceGt
     * @return self
     */
    public function setNongrantValidBalanceGt(?int $nongrantValidBalanceGt): self
    {
        $this->nongrantValidBalanceGt = $nongrantValidBalanceGt;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaleId(): ?int
    {
        return $this->saleId;
    }

    /**
     * @param int $saleId
     * @return self
     */
    public function setSaleId(?int $saleId): self
    {
        $this->saleId = $saleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaleName(): ?string
    {
        return $this->saleName;
    }

    /**
     * @param string $saleName
     * @return self
     */
    public function setSaleName(?string $saleName): self
    {
        $this->saleName = $saleName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatCostFenGt(): ?int
    {
        return $this->statCostFenGt;
    }

    /**
     * @param int $statCostFenGt
     * @return self
     */
    public function setStatCostFenGt(?int $statCostFenGt): self
    {
        $this->statCostFenGt = $statCostFenGt;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalBalanceGt(): ?int
    {
        return $this->totalBalanceGt;
    }

    /**
     * @param int $totalBalanceGt
     * @return self
     */
    public function setTotalBalanceGt(?int $totalBalanceGt): self
    {
        $this->totalBalanceGt = $totalBalanceGt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->canCopy !== null) {
            $result['can_copy'] = $this->canCopy;
        }
        if ($this->costPeriod !== null) {
            $result['cost_period'] = $this->costPeriod;
        }
        if ($this->createEndTime !== null) {
            $result['create_end_time'] = $this->createEndTime;
        }
        if ($this->createStartTime !== null) {
            $result['create_start_time'] = $this->createStartTime;
        }
        if ($this->isExistSale !== null) {
            $result['is_exist_sale'] = $this->isExistSale;
        }
        if ($this->nongrantValidBalanceGt !== null) {
            $result['nongrant_valid_balance_gt'] = $this->nongrantValidBalanceGt;
        }
        if ($this->saleId !== null) {
            $result['sale_id'] = $this->saleId;
        }
        if ($this->saleName !== null) {
            $result['sale_name'] = $this->saleName;
        }
        if ($this->statCostFenGt !== null) {
            $result['stat_cost_fen_gt'] = $this->statCostFenGt;
        }
        if ($this->totalBalanceGt !== null) {
            $result['total_balance_gt'] = $this->totalBalanceGt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['can_copy'] ?? null) !== null) {
            $obj->canCopy = (string) $v;
        }
        if (($v = $data['cost_period'] ?? null) !== null) {
            $obj->costPeriod = (string) $v;
        }
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['is_exist_sale'] ?? null) !== null) {
            $obj->isExistSale = (bool) $v;
        }
        if (($v = $data['nongrant_valid_balance_gt'] ?? null) !== null) {
            $obj->nongrantValidBalanceGt = (int) $v;
        }
        if (($v = $data['sale_id'] ?? null) !== null) {
            $obj->saleId = (int) $v;
        }
        if (($v = $data['sale_name'] ?? null) !== null) {
            $obj->saleName = (string) $v;
        }
        if (($v = $data['stat_cost_fen_gt'] ?? null) !== null) {
            $obj->statCostFenGt = (int) $v;
        }
        if (($v = $data['total_balance_gt'] ?? null) !== null) {
            $obj->totalBalanceGt = (int) $v;
        }
        return $obj;
    }
}
