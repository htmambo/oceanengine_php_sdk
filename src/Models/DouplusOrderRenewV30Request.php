<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderRenewV30Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeSecUid = null;

    /**
     * 追加投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @var int
     */
    protected ?int $renewalBudget = null;

    /**
     * 延长的投放时间 1. 当原订单marketing_goal= VIDEO_PROM_GOODS时，支持0、2、6、12、24或12的倍数，最大720小时 2. 当原订单marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0、0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24
     * @var float
     */
    protected ?float $renewalDeliveryHour = null;

    /**
     * 需要追加预算的订单id（PC上可见）
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return string
     */
    public function getAwemeSecUid(): ?string
    {
        return $this->awemeSecUid;
    }

    /**
     * @param string $awemeSecUid
     * @return self
     */
    public function setAwemeSecUid(?string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * 追加投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @return int
     */
    public function getRenewalBudget(): ?int
    {
        return $this->renewalBudget;
    }

    /**
     * 追加投放预算 注意：数值需为10,000-500,000,000之间的10的倍数， 单位：人民币（分）
     * @param int $renewalBudget
     * @return self
     */
    public function setRenewalBudget(?int $renewalBudget): self
    {
        $this->renewalBudget = $renewalBudget;
        return $this;
    }

    /**
     * 延长的投放时间 1. 当原订单marketing_goal= VIDEO_PROM_GOODS时，支持0、2、6、12、24或12的倍数，最大720小时 2. 当原订单marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0、0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24
     * @return float
     */
    public function getRenewalDeliveryHour(): ?float
    {
        return $this->renewalDeliveryHour;
    }

    /**
     * 延长的投放时间 1. 当原订单marketing_goal= VIDEO_PROM_GOODS时，支持0、2、6、12、24或12的倍数，最大720小时 2. 当原订单marketing_goal= LIVE_PROM_GOODS &liveroom_heat_mode= BY_VIDEO 时，支持0、0.5、1、1.5、2、2.5、3、3.5、4、4.5、5、5.5、6、12、24
     * @param float $renewalDeliveryHour
     * @return self
     */
    public function setRenewalDeliveryHour(?float $renewalDeliveryHour): self
    {
        $this->renewalDeliveryHour = $renewalDeliveryHour;
        return $this;
    }

    /**
     * 需要追加预算的订单id（PC上可见）
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 需要追加预算的订单id（PC上可见）
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeSecUid !== null) {
            $result['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->renewalBudget !== null) {
            $result['renewal_budget'] = $this->renewalBudget;
        }
        if ($this->renewalDeliveryHour !== null) {
            $result['renewal_delivery_hour'] = $this->renewalDeliveryHour;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_sec_uid'] ?? null) !== null) {
            $obj->awemeSecUid = (string) $v;
        }
        if (($v = $data['renewal_budget'] ?? null) !== null) {
            $obj->renewalBudget = (int) $v;
        }
        if (($v = $data['renewal_delivery_hour'] ?? null) !== null) {
            $obj->renewalDeliveryHour = (float) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
