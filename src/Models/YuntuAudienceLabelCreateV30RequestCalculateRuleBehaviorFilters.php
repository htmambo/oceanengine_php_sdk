<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters implements \JsonSerializable
{
    /**
     * 行为类别，请对照所需创建的标签类别（商品/内容/搜索）参照枚举包进行枚举选择。
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors[]
     */
    protected ?array $behaviors = null;

    /**
     * 行为条件结束日期。
     * @var string
     */
    protected ?string $dateEnd = null;

    /**
     * 行为条件开始日期。
     * @var string
     */
    protected ?string $dateStart = null;

    /**
     * 最大行为频次。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @var int
     */
    protected ?int $maxTimes = null;

    /**
     * 最小行为频次。不限时为0。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @var int
     */
    protected ?int $minTimes = null;

    /**
     * 行为类别，请对照所需创建的标签类别（商品/内容/搜索）参照枚举包进行枚举选择。
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors[]
     */
    public function getBehaviors(): ?array
    {
        return $this->behaviors;
    }

    /**
     * 行为类别，请对照所需创建的标签类别（商品/内容/搜索）参照枚举包进行枚举选择。
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors[] $behaviors
     * @return self
     */
    public function setBehaviors(?array $behaviors): self
    {
        $this->behaviors = $behaviors;
        return $this;
    }

    /**
     * 行为条件结束日期。
     * @return string
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    /**
     * 行为条件结束日期。
     * @param string $dateEnd
     * @return self
     */
    public function setDateEnd(?string $dateEnd): self
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    /**
     * 行为条件开始日期。
     * @return string
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * 行为条件开始日期。
     * @param string $dateStart
     * @return self
     */
    public function setDateStart(?string $dateStart): self
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * 最大行为频次。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @return int
     */
    public function getMaxTimes(): ?int
    {
        return $this->maxTimes;
    }

    /**
     * 最大行为频次。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @param int $maxTimes
     * @return self
     */
    public function setMaxTimes(?int $maxTimes): self
    {
        $this->maxTimes = $maxTimes;
        return $this;
    }

    /**
     * 最小行为频次。不限时为0。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @return int
     */
    public function getMinTimes(): ?int
    {
        return $this->minTimes;
    }

    /**
     * 最小行为频次。不限时为0。仅当创建商品人群标签时，如果数据范围为全网、且行为类别包含购买，需按照固定区间进行传递。固定区间阶梯规则如下： (0,5): min_times=0, max_times=5 [5,10): min_times=5, max_times=10 [10,20): min_times=10, max_times=20 [20,30): min_times=20, max_times=30 [30,40): min_times=30, max_times=40  [40,50): min_times=40, max_times=50  [50,100): min_times=50, max_times=100  [100,∞): min_times=100, max_times=100000000
     * @param int $minTimes
     * @return self
     */
    public function setMinTimes(?int $minTimes): self
    {
        $this->minTimes = $minTimes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->behaviors !== null) {
            $result['behaviors'] = $this->behaviors;
        }
        if ($this->dateEnd !== null) {
            $result['date_end'] = $this->dateEnd;
        }
        if ($this->dateStart !== null) {
            $result['date_start'] = $this->dateStart;
        }
        if ($this->maxTimes !== null) {
            $result['max_times'] = $this->maxTimes;
        }
        if ($this->minTimes !== null) {
            $result['min_times'] = $this->minTimes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['behaviors'] ?? null) !== null && is_array($v)) {
            $obj->behaviors = $v;
        }
        if (($v = $data['date_end'] ?? null) !== null) {
            $obj->dateEnd = (string) $v;
        }
        if (($v = $data['date_start'] ?? null) !== null) {
            $obj->dateStart = (string) $v;
        }
        if (($v = $data['max_times'] ?? null) !== null) {
            $obj->maxTimes = (int) $v;
        }
        if (($v = $data['min_times'] ?? null) !== null) {
            $obj->minTimes = (int) $v;
        }
        return $obj;
    }
}
