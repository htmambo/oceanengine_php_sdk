<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdOverallMarketingUpdateV10RequestAdIdListInner implements \JsonSerializable
{
    /**
     * 升级的全域计划的AdID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 升级乘方是需要设置ROI
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * 升级的全域计划的AdID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 升级的全域计划的AdID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 升级乘方是需要设置ROI
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * 升级乘方是需要设置ROI
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
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
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        return $obj;
    }
}
