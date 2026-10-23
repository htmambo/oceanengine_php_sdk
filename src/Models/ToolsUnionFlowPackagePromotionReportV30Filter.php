<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackagePromotionReportV30Filter implements \JsonSerializable
{
    /**
     * 结束时间，格式为\"yyyy-mm-dd\" 默认昨天，即不指定起止时间获取最近7天数据
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 消耗金额上限，单位元
     * @var string
     */
    protected ?string $highCost = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30FilterLandingType
     */
    protected ?string $landingType = null;

    /**
     * 消耗金额下限，单位元
     * @var string
     */
    protected ?string $lowCost = null;

    /**
     * 广告 id 列表，最大数量限制：1000
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * 广告位列表，最大数量限制：1000
     * @var int[]
     */
    protected ?array $rits = null;

    /**
     * 开始时间，格式为\"yyyy-mm-dd\" 限制范围100天内 默认7天前（不包括当天），即不指定起止时间获取最近7天数据
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 结束时间，格式为\"yyyy-mm-dd\" 默认昨天，即不指定起止时间获取最近7天数据
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间，格式为\"yyyy-mm-dd\" 默认昨天，即不指定起止时间获取最近7天数据
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 消耗金额上限，单位元
     * @return string
     */
    public function getHighCost(): ?string
    {
        return $this->highCost;
    }

    /**
     * 消耗金额上限，单位元
     * @param string $highCost
     * @return self
     */
    public function setHighCost(?string $highCost): self
    {
        $this->highCost = $highCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30FilterLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30FilterLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 消耗金额下限，单位元
     * @return string
     */
    public function getLowCost(): ?string
    {
        return $this->lowCost;
    }

    /**
     * 消耗金额下限，单位元
     * @param string $lowCost
     * @return self
     */
    public function setLowCost(?string $lowCost): self
    {
        $this->lowCost = $lowCost;
        return $this;
    }

    /**
     * 广告 id 列表，最大数量限制：1000
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 广告 id 列表，最大数量限制：1000
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * 广告位列表，最大数量限制：1000
     * @return int[]
     */
    public function getRits(): ?array
    {
        return $this->rits;
    }

    /**
     * 广告位列表，最大数量限制：1000
     * @param int[] $rits
     * @return self
     */
    public function setRits(?array $rits): self
    {
        $this->rits = $rits;
        return $this;
    }

    /**
     * 开始时间，格式为\"yyyy-mm-dd\" 限制范围100天内 默认7天前（不包括当天），即不指定起止时间获取最近7天数据
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间，格式为\"yyyy-mm-dd\" 限制范围100天内 默认7天前（不包括当天），即不指定起止时间获取最近7天数据
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->highCost !== null) {
            $result['high_cost'] = $this->highCost;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->lowCost !== null) {
            $result['low_cost'] = $this->lowCost;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        if ($this->rits !== null) {
            $result['rits'] = $this->rits;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['high_cost'] ?? null) !== null) {
            $obj->highCost = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['low_cost'] ?? null) !== null) {
            $obj->lowCost = (string) $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        if (($v = $data['rits'] ?? null) !== null && is_array($v)) {
            $obj->rits = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
