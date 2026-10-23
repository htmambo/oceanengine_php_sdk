<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseDataRaiseDetailsInner implements \JsonSerializable
{
    /**
     * 计划ID。
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 预算。
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 起量时长。
     * @var float
     */
    protected ?float $raiseDuration = null;

    /**
     * 起量时间。
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus
     */
    protected ?string $status = null;

    /**
     * 计划ID。
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID。
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 预算。
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算。
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 起量时长。
     * @return float
     */
    public function getRaiseDuration(): ?float
    {
        return $this->raiseDuration;
    }

    /**
     * 起量时长。
     * @param float $raiseDuration
     * @return self
     */
    public function setRaiseDuration(?float $raiseDuration): self
    {
        $this->raiseDuration = $raiseDuration;
        return $this;
    }

    /**
     * 起量时间。
     * @return string
     */
    public function getRaiseTime(): ?string
    {
        return $this->raiseTime;
    }

    /**
     * 起量时间。
     * @param string $raiseTime
     * @return self
     */
    public function setRaiseTime(?string $raiseTime): self
    {
        $this->raiseTime = $raiseTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->raiseDuration !== null) {
            $result['raise_duration'] = $this->raiseDuration;
        }
        if ($this->raiseTime !== null) {
            $result['raise_time'] = $this->raiseTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['raise_duration'] ?? null) !== null) {
            $obj->raiseDuration = (float) $v;
        }
        if (($v = $data['raise_time'] ?? null) !== null) {
            $obj->raiseTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
