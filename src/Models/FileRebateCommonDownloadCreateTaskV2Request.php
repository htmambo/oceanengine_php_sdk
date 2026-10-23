<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateCommonDownloadCreateTaskV2Request implements \JsonSerializable
{
    /**
     * 代理商帐户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 月度，可以传多个，以逗号分隔，如1,2,3
     * @var string
     */
    protected ?string $month = null;

    /**
     * 季度
     * @var int
     */
    protected ?int $quarter = null;

    /**
     * 等待最新数据参数，默认等待
     * @var bool
     */
    protected ?bool $waitLatest = null;

    /**
     * 年
     * @var int
     */
    protected ?int $year = null;

    /**
     * 代理商帐户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商帐户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 月度，可以传多个，以逗号分隔，如1,2,3
     * @return string
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }

    /**
     * 月度，可以传多个，以逗号分隔，如1,2,3
     * @param string $month
     * @return self
     */
    public function setMonth(?string $month): self
    {
        $this->month = $month;
        return $this;
    }

    /**
     * 季度
     * @return int
     */
    public function getQuarter(): ?int
    {
        return $this->quarter;
    }

    /**
     * 季度
     * @param int $quarter
     * @return self
     */
    public function setQuarter(?int $quarter): self
    {
        $this->quarter = $quarter;
        return $this;
    }

    /**
     * 等待最新数据参数，默认等待
     * @return bool
     */
    public function getWaitLatest(): ?bool
    {
        return $this->waitLatest;
    }

    /**
     * 等待最新数据参数，默认等待
     * @param bool $waitLatest
     * @return self
     */
    public function setWaitLatest(?bool $waitLatest): self
    {
        $this->waitLatest = $waitLatest;
        return $this;
    }

    /**
     * 年
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * 年
     * @param int $year
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->month !== null) {
            $result['month'] = $this->month;
        }
        if ($this->quarter !== null) {
            $result['quarter'] = $this->quarter;
        }
        if ($this->waitLatest !== null) {
            $result['wait_latest'] = $this->waitLatest;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['month'] ?? null) !== null) {
            $obj->month = (string) $v;
        }
        if (($v = $data['quarter'] ?? null) !== null) {
            $obj->quarter = (int) $v;
        }
        if (($v = $data['wait_latest'] ?? null) !== null) {
            $obj->waitLatest = (bool) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (int) $v;
        }
        return $obj;
    }
}
