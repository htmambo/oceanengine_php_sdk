<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat implements \JsonSerializable
{
    /**
     * 转化表现
     * @var int
     */
    protected ?int $convertScore = null;

    /**
     * 种草表现
     * @var int
     */
    protected ?int $seedScore = null;

    /**
     * 传播表现分
     * @var int
     */
    protected ?int $spreadScore = null;

    /**
     * 转化表现
     * @return int
     */
    public function getConvertScore(): ?int
    {
        return $this->convertScore;
    }

    /**
     * 转化表现
     * @param int $convertScore
     * @return self
     */
    public function setConvertScore(?int $convertScore): self
    {
        $this->convertScore = $convertScore;
        return $this;
    }

    /**
     * 种草表现
     * @return int
     */
    public function getSeedScore(): ?int
    {
        return $this->seedScore;
    }

    /**
     * 种草表现
     * @param int $seedScore
     * @return self
     */
    public function setSeedScore(?int $seedScore): self
    {
        $this->seedScore = $seedScore;
        return $this;
    }

    /**
     * 传播表现分
     * @return int
     */
    public function getSpreadScore(): ?int
    {
        return $this->spreadScore;
    }

    /**
     * 传播表现分
     * @param int $spreadScore
     * @return self
     */
    public function setSpreadScore(?int $spreadScore): self
    {
        $this->spreadScore = $spreadScore;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->convertScore !== null) {
            $result['convert_score'] = $this->convertScore;
        }
        if ($this->seedScore !== null) {
            $result['seed_score'] = $this->seedScore;
        }
        if ($this->spreadScore !== null) {
            $result['spread_score'] = $this->spreadScore;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['convert_score'] ?? null) !== null) {
            $obj->convertScore = (int) $v;
        }
        if (($v = $data['seed_score'] ?? null) !== null) {
            $obj->seedScore = (int) $v;
        }
        if (($v = $data['spread_score'] ?? null) !== null) {
            $obj->spreadScore = (int) $v;
        }
        return $obj;
    }
}
