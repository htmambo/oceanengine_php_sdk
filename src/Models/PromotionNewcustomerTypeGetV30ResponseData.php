<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionNewcustomerTypeGetV30ResponseData implements \JsonSerializable
{
    /**
     * 判断是否新手期阶段（是否可用简单投）
     * @var bool
     */
    protected ?bool $canUseNewcustomer = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerTypeGetV30DataCustomerTypes
     */
    protected ?string $customerTypes = null;

    /**
     * 客户首次消耗的时间 2006-01-02 15:04:05
     * @var string
     */
    protected ?string $firstCostDate = null;

    /**
     * 客户到达腰客的时间 2006-01-02 15:04:05
     * @var string
     */
    protected ?string $reachWaistCustomerDate = null;

    /**
     * 判断是否新手期阶段（是否可用简单投）
     * @return bool
     */
    public function getCanUseNewcustomer(): ?bool
    {
        return $this->canUseNewcustomer;
    }

    /**
     * 判断是否新手期阶段（是否可用简单投）
     * @param bool $canUseNewcustomer
     * @return self
     */
    public function setCanUseNewcustomer(?bool $canUseNewcustomer): self
    {
        $this->canUseNewcustomer = $canUseNewcustomer;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionNewcustomerTypeGetV30DataCustomerTypes
     */
    public function getCustomerTypes(): ?string
    {
        return $this->customerTypes;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerTypeGetV30DataCustomerTypes $customerTypes
     * @return self
     */
    public function setCustomerTypes(?string $customerTypes): self
    {
        $this->customerTypes = $customerTypes;
        return $this;
    }

    /**
     * 客户首次消耗的时间 2006-01-02 15:04:05
     * @return string
     */
    public function getFirstCostDate(): ?string
    {
        return $this->firstCostDate;
    }

    /**
     * 客户首次消耗的时间 2006-01-02 15:04:05
     * @param string $firstCostDate
     * @return self
     */
    public function setFirstCostDate(?string $firstCostDate): self
    {
        $this->firstCostDate = $firstCostDate;
        return $this;
    }

    /**
     * 客户到达腰客的时间 2006-01-02 15:04:05
     * @return string
     */
    public function getReachWaistCustomerDate(): ?string
    {
        return $this->reachWaistCustomerDate;
    }

    /**
     * 客户到达腰客的时间 2006-01-02 15:04:05
     * @param string $reachWaistCustomerDate
     * @return self
     */
    public function setReachWaistCustomerDate(?string $reachWaistCustomerDate): self
    {
        $this->reachWaistCustomerDate = $reachWaistCustomerDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canUseNewcustomer !== null) {
            $result['can_use_newcustomer'] = $this->canUseNewcustomer;
        }
        if ($this->customerTypes !== null) {
            $result['customer_types'] = $this->customerTypes;
        }
        if ($this->firstCostDate !== null) {
            $result['first_cost_date'] = $this->firstCostDate;
        }
        if ($this->reachWaistCustomerDate !== null) {
            $result['reach_waist_customer_date'] = $this->reachWaistCustomerDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_use_newcustomer'] ?? null) !== null) {
            $obj->canUseNewcustomer = (bool) $v;
        }
        if (($v = $data['customer_types'] ?? null) !== null) {
            $obj->customerTypes = (string) $v;
        }
        if (($v = $data['first_cost_date'] ?? null) !== null) {
            $obj->firstCostDate = (string) $v;
        }
        if (($v = $data['reach_waist_customer_date'] ?? null) !== null) {
            $obj->reachWaistCustomerDate = (string) $v;
        }
        return $obj;
    }
}
