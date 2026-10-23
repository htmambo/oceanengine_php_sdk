<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData implements \JsonSerializable
{
    /**
     * 激活数
     * @var int
     */
    protected ?int $activeCnt = null;

    /**
     * 激活成本 cpa（单位 厘）
     * @var int
     */
    protected ?int $costPerActive = null;

    /**
     * cpfp 首次付费成本（单位 厘）
     * @var int
     */
    protected ?int $costPerFirstPay = null;

    /**
     * 次日留存成本（单位 厘）
     * @var int
     */
    protected ?int $costPerNextDayOpen = null;

    /**
     * 付费成本（单位 厘）
     * @var int
     */
    protected ?int $costPerPay = null;

    /**
     * 注册成本 cpr（单位 厘）
     * @var int
     */
    protected ?int $costPerRegister = null;

    /**
     * 首次付费次数
     * @var int
     */
    protected ?int $firstPayCnt = null;

    /**
     * 次日留存数
     * @var int
     */
    protected ?int $nextDayOpenCnt = null;

    /**
     * 1: optional i64 ctr //组件点击率 (点击量/展示量) （单位：万分比 小数扩大了1W倍） 2: optional i64 click_cnt //点击量 付费次数
     * @var int
     */
    protected ?int $payCnt = null;

    /**
     * 注册数
     * @var int
     */
    protected ?int $registerCnt = null;

    /**
     * 激活数
     * @return int
     */
    public function getActiveCnt(): ?int
    {
        return $this->activeCnt;
    }

    /**
     * 激活数
     * @param int $activeCnt
     * @return self
     */
    public function setActiveCnt(?int $activeCnt): self
    {
        $this->activeCnt = $activeCnt;
        return $this;
    }

    /**
     * 激活成本 cpa（单位 厘）
     * @return int
     */
    public function getCostPerActive(): ?int
    {
        return $this->costPerActive;
    }

    /**
     * 激活成本 cpa（单位 厘）
     * @param int $costPerActive
     * @return self
     */
    public function setCostPerActive(?int $costPerActive): self
    {
        $this->costPerActive = $costPerActive;
        return $this;
    }

    /**
     * cpfp 首次付费成本（单位 厘）
     * @return int
     */
    public function getCostPerFirstPay(): ?int
    {
        return $this->costPerFirstPay;
    }

    /**
     * cpfp 首次付费成本（单位 厘）
     * @param int $costPerFirstPay
     * @return self
     */
    public function setCostPerFirstPay(?int $costPerFirstPay): self
    {
        $this->costPerFirstPay = $costPerFirstPay;
        return $this;
    }

    /**
     * 次日留存成本（单位 厘）
     * @return int
     */
    public function getCostPerNextDayOpen(): ?int
    {
        return $this->costPerNextDayOpen;
    }

    /**
     * 次日留存成本（单位 厘）
     * @param int $costPerNextDayOpen
     * @return self
     */
    public function setCostPerNextDayOpen(?int $costPerNextDayOpen): self
    {
        $this->costPerNextDayOpen = $costPerNextDayOpen;
        return $this;
    }

    /**
     * 付费成本（单位 厘）
     * @return int
     */
    public function getCostPerPay(): ?int
    {
        return $this->costPerPay;
    }

    /**
     * 付费成本（单位 厘）
     * @param int $costPerPay
     * @return self
     */
    public function setCostPerPay(?int $costPerPay): self
    {
        $this->costPerPay = $costPerPay;
        return $this;
    }

    /**
     * 注册成本 cpr（单位 厘）
     * @return int
     */
    public function getCostPerRegister(): ?int
    {
        return $this->costPerRegister;
    }

    /**
     * 注册成本 cpr（单位 厘）
     * @param int $costPerRegister
     * @return self
     */
    public function setCostPerRegister(?int $costPerRegister): self
    {
        $this->costPerRegister = $costPerRegister;
        return $this;
    }

    /**
     * 首次付费次数
     * @return int
     */
    public function getFirstPayCnt(): ?int
    {
        return $this->firstPayCnt;
    }

    /**
     * 首次付费次数
     * @param int $firstPayCnt
     * @return self
     */
    public function setFirstPayCnt(?int $firstPayCnt): self
    {
        $this->firstPayCnt = $firstPayCnt;
        return $this;
    }

    /**
     * 次日留存数
     * @return int
     */
    public function getNextDayOpenCnt(): ?int
    {
        return $this->nextDayOpenCnt;
    }

    /**
     * 次日留存数
     * @param int $nextDayOpenCnt
     * @return self
     */
    public function setNextDayOpenCnt(?int $nextDayOpenCnt): self
    {
        $this->nextDayOpenCnt = $nextDayOpenCnt;
        return $this;
    }

    /**
     * 1: optional i64 ctr //组件点击率 (点击量/展示量) （单位：万分比 小数扩大了1W倍） 2: optional i64 click_cnt //点击量 付费次数
     * @return int
     */
    public function getPayCnt(): ?int
    {
        return $this->payCnt;
    }

    /**
     * 1: optional i64 ctr //组件点击率 (点击量/展示量) （单位：万分比 小数扩大了1W倍） 2: optional i64 click_cnt //点击量 付费次数
     * @param int $payCnt
     * @return self
     */
    public function setPayCnt(?int $payCnt): self
    {
        $this->payCnt = $payCnt;
        return $this;
    }

    /**
     * 注册数
     * @return int
     */
    public function getRegisterCnt(): ?int
    {
        return $this->registerCnt;
    }

    /**
     * 注册数
     * @param int $registerCnt
     * @return self
     */
    public function setRegisterCnt(?int $registerCnt): self
    {
        $this->registerCnt = $registerCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activeCnt !== null) {
            $result['active_cnt'] = $this->activeCnt;
        }
        if ($this->costPerActive !== null) {
            $result['cost_per_active'] = $this->costPerActive;
        }
        if ($this->costPerFirstPay !== null) {
            $result['cost_per_first_pay'] = $this->costPerFirstPay;
        }
        if ($this->costPerNextDayOpen !== null) {
            $result['cost_per_next_day_open'] = $this->costPerNextDayOpen;
        }
        if ($this->costPerPay !== null) {
            $result['cost_per_pay'] = $this->costPerPay;
        }
        if ($this->costPerRegister !== null) {
            $result['cost_per_register'] = $this->costPerRegister;
        }
        if ($this->firstPayCnt !== null) {
            $result['first_pay_cnt'] = $this->firstPayCnt;
        }
        if ($this->nextDayOpenCnt !== null) {
            $result['next_day_open_cnt'] = $this->nextDayOpenCnt;
        }
        if ($this->payCnt !== null) {
            $result['pay_cnt'] = $this->payCnt;
        }
        if ($this->registerCnt !== null) {
            $result['register_cnt'] = $this->registerCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['active_cnt'] ?? null) !== null) {
            $obj->activeCnt = (int) $v;
        }
        if (($v = $data['cost_per_active'] ?? null) !== null) {
            $obj->costPerActive = (int) $v;
        }
        if (($v = $data['cost_per_first_pay'] ?? null) !== null) {
            $obj->costPerFirstPay = (int) $v;
        }
        if (($v = $data['cost_per_next_day_open'] ?? null) !== null) {
            $obj->costPerNextDayOpen = (int) $v;
        }
        if (($v = $data['cost_per_pay'] ?? null) !== null) {
            $obj->costPerPay = (int) $v;
        }
        if (($v = $data['cost_per_register'] ?? null) !== null) {
            $obj->costPerRegister = (int) $v;
        }
        if (($v = $data['first_pay_cnt'] ?? null) !== null) {
            $obj->firstPayCnt = (int) $v;
        }
        if (($v = $data['next_day_open_cnt'] ?? null) !== null) {
            $obj->nextDayOpenCnt = (int) $v;
        }
        if (($v = $data['pay_cnt'] ?? null) !== null) {
            $obj->payCnt = (int) $v;
        }
        if (($v = $data['register_cnt'] ?? null) !== null) {
            $obj->registerCnt = (int) $v;
        }
        return $obj;
    }
}
