<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsQuotaGetV2ResponseData implements \JsonSerializable
{
    /**
     * 是否在学习期，学习期即初始期，详细规则请进入巨量广告投放平台-工具-在投计划配额界面查看
     * @var bool
     */
    protected ?bool $inLearning = null;

    /**
     * 最高月消耗
     * @var float
     */
    protected ?float $maxCost = null;

    /**
     * 在投计划配额
     * @var int
     */
    protected ?int $sumQuota = null;

    /**
     * 在投计划数
     * @var int
     */
    protected ?int $usedQuota = null;

    /**
     * 是否在学习期，学习期即初始期，详细规则请进入巨量广告投放平台-工具-在投计划配额界面查看
     * @return bool
     */
    public function getInLearning(): ?bool
    {
        return $this->inLearning;
    }

    /**
     * 是否在学习期，学习期即初始期，详细规则请进入巨量广告投放平台-工具-在投计划配额界面查看
     * @param bool $inLearning
     * @return self
     */
    public function setInLearning(?bool $inLearning): self
    {
        $this->inLearning = $inLearning;
        return $this;
    }

    /**
     * 最高月消耗
     * @return float
     */
    public function getMaxCost(): ?float
    {
        return $this->maxCost;
    }

    /**
     * 最高月消耗
     * @param float $maxCost
     * @return self
     */
    public function setMaxCost(?float $maxCost): self
    {
        $this->maxCost = $maxCost;
        return $this;
    }

    /**
     * 在投计划配额
     * @return int
     */
    public function getSumQuota(): ?int
    {
        return $this->sumQuota;
    }

    /**
     * 在投计划配额
     * @param int $sumQuota
     * @return self
     */
    public function setSumQuota(?int $sumQuota): self
    {
        $this->sumQuota = $sumQuota;
        return $this;
    }

    /**
     * 在投计划数
     * @return int
     */
    public function getUsedQuota(): ?int
    {
        return $this->usedQuota;
    }

    /**
     * 在投计划数
     * @param int $usedQuota
     * @return self
     */
    public function setUsedQuota(?int $usedQuota): self
    {
        $this->usedQuota = $usedQuota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inLearning !== null) {
            $result['in_learning'] = $this->inLearning;
        }
        if ($this->maxCost !== null) {
            $result['max_cost'] = $this->maxCost;
        }
        if ($this->sumQuota !== null) {
            $result['sum_quota'] = $this->sumQuota;
        }
        if ($this->usedQuota !== null) {
            $result['used_quota'] = $this->usedQuota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['in_learning'] ?? null) !== null) {
            $obj->inLearning = (bool) $v;
        }
        if (($v = $data['max_cost'] ?? null) !== null) {
            $obj->maxCost = (float) $v;
        }
        if (($v = $data['sum_quota'] ?? null) !== null) {
            $obj->sumQuota = (int) $v;
        }
        if (($v = $data['used_quota'] ?? null) !== null) {
            $obj->usedQuota = (int) $v;
        }
        return $obj;
    }
}
