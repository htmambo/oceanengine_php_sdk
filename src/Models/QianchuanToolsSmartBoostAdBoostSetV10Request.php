<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostSetV10Request implements \JsonSerializable
{
    /**
     * 广告计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 千川广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 起量预算，单位元，小数点后两位 注意：不得超过计划日预算/总预算 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10OptType
     */
    protected ?string $optType = null;

    /**
     * 起量时长，单位小时，小数点后1位，范围0.5-6小时 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @var float
     */
    protected ?float $raiseDuration = null;

    /**
     * 起量时间，仅支持当前时间往后的时间 注意：当opt_type=START_RAISE/SUBSCRIBE_RAISE必填
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * 广告计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 千川广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 起量预算，单位元，小数点后两位 注意：不得超过计划日预算/总预算 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 起量预算，单位元，小数点后两位 注意：不得超过计划日预算/总预算 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10OptType
     */
    public function getOptType(): ?string
    {
        return $this->optType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10OptType $optType
     * @return self
     */
    public function setOptType(?string $optType): self
    {
        $this->optType = $optType;
        return $this;
    }

    /**
     * 起量时长，单位小时，小数点后1位，范围0.5-6小时 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @return float
     */
    public function getRaiseDuration(): ?float
    {
        return $this->raiseDuration;
    }

    /**
     * 起量时长，单位小时，小数点后1位，范围0.5-6小时 注意：当opt_type=START_RAISE、SUBSCRIBE_RAISE时必填
     * @param float $raiseDuration
     * @return self
     */
    public function setRaiseDuration(?float $raiseDuration): self
    {
        $this->raiseDuration = $raiseDuration;
        return $this;
    }

    /**
     * 起量时间，仅支持当前时间往后的时间 注意：当opt_type=START_RAISE/SUBSCRIBE_RAISE必填
     * @return string
     */
    public function getRaiseTime(): ?string
    {
        return $this->raiseTime;
    }

    /**
     * 起量时间，仅支持当前时间往后的时间 注意：当opt_type=START_RAISE/SUBSCRIBE_RAISE必填
     * @param string $raiseTime
     * @return self
     */
    public function setRaiseTime(?string $raiseTime): self
    {
        $this->raiseTime = $raiseTime;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->optType !== null) {
            $result['opt_type'] = $this->optType;
        }
        if ($this->raiseDuration !== null) {
            $result['raise_duration'] = $this->raiseDuration;
        }
        if ($this->raiseTime !== null) {
            $result['raise_time'] = $this->raiseTime;
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
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['opt_type'] ?? null) !== null) {
            $obj->optType = (string) $v;
        }
        if (($v = $data['raise_duration'] ?? null) !== null) {
            $obj->raiseDuration = (float) $v;
        }
        if (($v = $data['raise_time'] ?? null) !== null) {
            $obj->raiseTime = (string) $v;
        }
        return $obj;
    }
}
