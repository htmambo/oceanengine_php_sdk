<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaGetV2ResponseDataTotalMetrics implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * @var int
     */
    protected ?int $convertCnt = null;

    /**
     * @var int
     */
    protected ?int $showCnt = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * @param int $convertCnt
     * @return self
     */
    public function setConvertCnt(?int $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowCnt(): ?int
    {
        return $this->showCnt;
    }

    /**
     * @param int $showCnt
     * @return self
     */
    public function setShowCnt(?int $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        return $obj;
    }
}
