<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueCallVirtualNumberRefundDetailGetV2ResponseDataRefundDetailListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 呼叫线索数
     * @var int
     */
    protected ?int $callClueCnt = null;

    /**
     * 呼叫总时长，单位：分钟
     * @var int
     */
    protected ?int $callDurationAll = null;

    /**
     * 呼叫话费返款总额
     * @var float
     */
    protected ?float $callRefundPayMoney = null;

    /**
     * 主叫号码
     * @var string
     */
    protected ?string $callerNumber = null;

    /**
     * 查询账单月份，格式yyyyMM
     * @var string
     */
    protected ?string $month = null;

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
     * 广告主名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 呼叫线索数
     * @return int
     */
    public function getCallClueCnt(): ?int
    {
        return $this->callClueCnt;
    }

    /**
     * 呼叫线索数
     * @param int $callClueCnt
     * @return self
     */
    public function setCallClueCnt(?int $callClueCnt): self
    {
        $this->callClueCnt = $callClueCnt;
        return $this;
    }

    /**
     * 呼叫总时长，单位：分钟
     * @return int
     */
    public function getCallDurationAll(): ?int
    {
        return $this->callDurationAll;
    }

    /**
     * 呼叫总时长，单位：分钟
     * @param int $callDurationAll
     * @return self
     */
    public function setCallDurationAll(?int $callDurationAll): self
    {
        $this->callDurationAll = $callDurationAll;
        return $this;
    }

    /**
     * 呼叫话费返款总额
     * @return float
     */
    public function getCallRefundPayMoney(): ?float
    {
        return $this->callRefundPayMoney;
    }

    /**
     * 呼叫话费返款总额
     * @param float $callRefundPayMoney
     * @return self
     */
    public function setCallRefundPayMoney(?float $callRefundPayMoney): self
    {
        $this->callRefundPayMoney = $callRefundPayMoney;
        return $this;
    }

    /**
     * 主叫号码
     * @return string
     */
    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    /**
     * 主叫号码
     * @param string $callerNumber
     * @return self
     */
    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * 查询账单月份，格式yyyyMM
     * @return string
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }

    /**
     * 查询账单月份，格式yyyyMM
     * @param string $month
     * @return self
     */
    public function setMonth(?string $month): self
    {
        $this->month = $month;
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
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->callClueCnt !== null) {
            $result['call_clue_cnt'] = $this->callClueCnt;
        }
        if ($this->callDurationAll !== null) {
            $result['call_duration_all'] = $this->callDurationAll;
        }
        if ($this->callRefundPayMoney !== null) {
            $result['call_refund_pay_money'] = $this->callRefundPayMoney;
        }
        if ($this->callerNumber !== null) {
            $result['caller_number'] = $this->callerNumber;
        }
        if ($this->month !== null) {
            $result['month'] = $this->month;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['call_clue_cnt'] ?? null) !== null) {
            $obj->callClueCnt = (int) $v;
        }
        if (($v = $data['call_duration_all'] ?? null) !== null) {
            $obj->callDurationAll = (int) $v;
        }
        if (($v = $data['call_refund_pay_money'] ?? null) !== null) {
            $obj->callRefundPayMoney = (float) $v;
        }
        if (($v = $data['caller_number'] ?? null) !== null) {
            $obj->callerNumber = (string) $v;
        }
        if (($v = $data['month'] ?? null) !== null) {
            $obj->month = (string) $v;
        }
        return $obj;
    }
}
