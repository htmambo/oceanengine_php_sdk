<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueClueOverviewQueryV2ResponseData implements \JsonSerializable
{
    /**
     * 拨打线索量。时间粒度为线索创建时间。
     * @var int
     */
    protected ?int $calledClueCnt = null;

    /**
     * 线索拨打率。时间粒度为线索创建时间。
     * @var float
     */
    protected ?float $calledClueRate = null;

    /**
     * 落入4h内拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @var int
     */
    protected ?int $calledFourHourClueCnt = null;

    /**
     * 4h线索拨打率。时间粒度为线索创建时间与话单创建时间。
     * @var float
     */
    protected ?float $calledFourHourClueRate = null;

    /**
     * 当天落入并拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @var int
     */
    protected ?int $calledTodayClueCnt = null;

    /**
     * 线索平均跟进时效。时间粒度为线索创建时间。
     * @var float
     */
    protected ?float $clueAverageCallInterval = null;

    /**
     * 落入线索量。时间粒度为线索创建时间。
     * @var int
     */
    protected ?int $clueCnt = null;

    /**
     * 接通线索量。时间粒度为线索创建时间。
     * @var int
     */
    protected ?int $connectedClueCnt = null;

    /**
     * 线索接通率。时间粒度为线索创建时间。
     * @var float
     */
    protected ?float $connectedClueRate = null;

    /**
     * 落入4h内拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @var int
     */
    protected ?int $connectedFourHourClueCnt = null;

    /**
     * 4h线索接通率。时间粒度为线索创建时间与话单创建时间。
     * @var float
     */
    protected ?float $connectedFourHourClueRate = null;

    /**
     * 当天落入并拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @var int
     */
    protected ?int $connectedTodayClueCnt = null;

    /**
     * 未接通线索平均拨打轮次。时间粒度为线索创建时间。
     * @var float
     */
    protected ?float $unconnectedClueAverageCallTimes = null;

    /**
     * 拨打一次且未接通线索量。时间粒度为线索创建时间。
     * @var int
     */
    protected ?int $unconnectedOneCallClueCnt = null;

    /**
     * 拨打线索量。时间粒度为线索创建时间。
     * @return int
     */
    public function getCalledClueCnt(): ?int
    {
        return $this->calledClueCnt;
    }

    /**
     * 拨打线索量。时间粒度为线索创建时间。
     * @param int $calledClueCnt
     * @return self
     */
    public function setCalledClueCnt(?int $calledClueCnt): self
    {
        $this->calledClueCnt = $calledClueCnt;
        return $this;
    }

    /**
     * 线索拨打率。时间粒度为线索创建时间。
     * @return float
     */
    public function getCalledClueRate(): ?float
    {
        return $this->calledClueRate;
    }

    /**
     * 线索拨打率。时间粒度为线索创建时间。
     * @param float $calledClueRate
     * @return self
     */
    public function setCalledClueRate(?float $calledClueRate): self
    {
        $this->calledClueRate = $calledClueRate;
        return $this;
    }

    /**
     * 落入4h内拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @return int
     */
    public function getCalledFourHourClueCnt(): ?int
    {
        return $this->calledFourHourClueCnt;
    }

    /**
     * 落入4h内拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @param int $calledFourHourClueCnt
     * @return self
     */
    public function setCalledFourHourClueCnt(?int $calledFourHourClueCnt): self
    {
        $this->calledFourHourClueCnt = $calledFourHourClueCnt;
        return $this;
    }

    /**
     * 4h线索拨打率。时间粒度为线索创建时间与话单创建时间。
     * @return float
     */
    public function getCalledFourHourClueRate(): ?float
    {
        return $this->calledFourHourClueRate;
    }

    /**
     * 4h线索拨打率。时间粒度为线索创建时间与话单创建时间。
     * @param float $calledFourHourClueRate
     * @return self
     */
    public function setCalledFourHourClueRate(?float $calledFourHourClueRate): self
    {
        $this->calledFourHourClueRate = $calledFourHourClueRate;
        return $this;
    }

    /**
     * 当天落入并拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @return int
     */
    public function getCalledTodayClueCnt(): ?int
    {
        return $this->calledTodayClueCnt;
    }

    /**
     * 当天落入并拨打线索量。时间粒度为线索创建时间与话单创建时间。
     * @param int $calledTodayClueCnt
     * @return self
     */
    public function setCalledTodayClueCnt(?int $calledTodayClueCnt): self
    {
        $this->calledTodayClueCnt = $calledTodayClueCnt;
        return $this;
    }

    /**
     * 线索平均跟进时效。时间粒度为线索创建时间。
     * @return float
     */
    public function getClueAverageCallInterval(): ?float
    {
        return $this->clueAverageCallInterval;
    }

    /**
     * 线索平均跟进时效。时间粒度为线索创建时间。
     * @param float $clueAverageCallInterval
     * @return self
     */
    public function setClueAverageCallInterval(?float $clueAverageCallInterval): self
    {
        $this->clueAverageCallInterval = $clueAverageCallInterval;
        return $this;
    }

    /**
     * 落入线索量。时间粒度为线索创建时间。
     * @return int
     */
    public function getClueCnt(): ?int
    {
        return $this->clueCnt;
    }

    /**
     * 落入线索量。时间粒度为线索创建时间。
     * @param int $clueCnt
     * @return self
     */
    public function setClueCnt(?int $clueCnt): self
    {
        $this->clueCnt = $clueCnt;
        return $this;
    }

    /**
     * 接通线索量。时间粒度为线索创建时间。
     * @return int
     */
    public function getConnectedClueCnt(): ?int
    {
        return $this->connectedClueCnt;
    }

    /**
     * 接通线索量。时间粒度为线索创建时间。
     * @param int $connectedClueCnt
     * @return self
     */
    public function setConnectedClueCnt(?int $connectedClueCnt): self
    {
        $this->connectedClueCnt = $connectedClueCnt;
        return $this;
    }

    /**
     * 线索接通率。时间粒度为线索创建时间。
     * @return float
     */
    public function getConnectedClueRate(): ?float
    {
        return $this->connectedClueRate;
    }

    /**
     * 线索接通率。时间粒度为线索创建时间。
     * @param float $connectedClueRate
     * @return self
     */
    public function setConnectedClueRate(?float $connectedClueRate): self
    {
        $this->connectedClueRate = $connectedClueRate;
        return $this;
    }

    /**
     * 落入4h内拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @return int
     */
    public function getConnectedFourHourClueCnt(): ?int
    {
        return $this->connectedFourHourClueCnt;
    }

    /**
     * 落入4h内拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @param int $connectedFourHourClueCnt
     * @return self
     */
    public function setConnectedFourHourClueCnt(?int $connectedFourHourClueCnt): self
    {
        $this->connectedFourHourClueCnt = $connectedFourHourClueCnt;
        return $this;
    }

    /**
     * 4h线索接通率。时间粒度为线索创建时间与话单创建时间。
     * @return float
     */
    public function getConnectedFourHourClueRate(): ?float
    {
        return $this->connectedFourHourClueRate;
    }

    /**
     * 4h线索接通率。时间粒度为线索创建时间与话单创建时间。
     * @param float $connectedFourHourClueRate
     * @return self
     */
    public function setConnectedFourHourClueRate(?float $connectedFourHourClueRate): self
    {
        $this->connectedFourHourClueRate = $connectedFourHourClueRate;
        return $this;
    }

    /**
     * 当天落入并拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @return int
     */
    public function getConnectedTodayClueCnt(): ?int
    {
        return $this->connectedTodayClueCnt;
    }

    /**
     * 当天落入并拨打且接通线索量。时间粒度为线索创建时间与话单创建时间。
     * @param int $connectedTodayClueCnt
     * @return self
     */
    public function setConnectedTodayClueCnt(?int $connectedTodayClueCnt): self
    {
        $this->connectedTodayClueCnt = $connectedTodayClueCnt;
        return $this;
    }

    /**
     * 未接通线索平均拨打轮次。时间粒度为线索创建时间。
     * @return float
     */
    public function getUnconnectedClueAverageCallTimes(): ?float
    {
        return $this->unconnectedClueAverageCallTimes;
    }

    /**
     * 未接通线索平均拨打轮次。时间粒度为线索创建时间。
     * @param float $unconnectedClueAverageCallTimes
     * @return self
     */
    public function setUnconnectedClueAverageCallTimes(?float $unconnectedClueAverageCallTimes): self
    {
        $this->unconnectedClueAverageCallTimes = $unconnectedClueAverageCallTimes;
        return $this;
    }

    /**
     * 拨打一次且未接通线索量。时间粒度为线索创建时间。
     * @return int
     */
    public function getUnconnectedOneCallClueCnt(): ?int
    {
        return $this->unconnectedOneCallClueCnt;
    }

    /**
     * 拨打一次且未接通线索量。时间粒度为线索创建时间。
     * @param int $unconnectedOneCallClueCnt
     * @return self
     */
    public function setUnconnectedOneCallClueCnt(?int $unconnectedOneCallClueCnt): self
    {
        $this->unconnectedOneCallClueCnt = $unconnectedOneCallClueCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->calledClueCnt !== null) {
            $result['called_clue_cnt'] = $this->calledClueCnt;
        }
        if ($this->calledClueRate !== null) {
            $result['called_clue_rate'] = $this->calledClueRate;
        }
        if ($this->calledFourHourClueCnt !== null) {
            $result['called_four_hour_clue_cnt'] = $this->calledFourHourClueCnt;
        }
        if ($this->calledFourHourClueRate !== null) {
            $result['called_four_hour_clue_rate'] = $this->calledFourHourClueRate;
        }
        if ($this->calledTodayClueCnt !== null) {
            $result['called_today_clue_cnt'] = $this->calledTodayClueCnt;
        }
        if ($this->clueAverageCallInterval !== null) {
            $result['clue_average_call_interval'] = $this->clueAverageCallInterval;
        }
        if ($this->clueCnt !== null) {
            $result['clue_cnt'] = $this->clueCnt;
        }
        if ($this->connectedClueCnt !== null) {
            $result['connected_clue_cnt'] = $this->connectedClueCnt;
        }
        if ($this->connectedClueRate !== null) {
            $result['connected_clue_rate'] = $this->connectedClueRate;
        }
        if ($this->connectedFourHourClueCnt !== null) {
            $result['connected_four_hour_clue_cnt'] = $this->connectedFourHourClueCnt;
        }
        if ($this->connectedFourHourClueRate !== null) {
            $result['connected_four_hour_clue_rate'] = $this->connectedFourHourClueRate;
        }
        if ($this->connectedTodayClueCnt !== null) {
            $result['connected_today_clue_cnt'] = $this->connectedTodayClueCnt;
        }
        if ($this->unconnectedClueAverageCallTimes !== null) {
            $result['unconnected_clue_average_call_times'] = $this->unconnectedClueAverageCallTimes;
        }
        if ($this->unconnectedOneCallClueCnt !== null) {
            $result['unconnected_one_call_clue_cnt'] = $this->unconnectedOneCallClueCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['called_clue_cnt'] ?? null) !== null) {
            $obj->calledClueCnt = (int) $v;
        }
        if (($v = $data['called_clue_rate'] ?? null) !== null) {
            $obj->calledClueRate = (float) $v;
        }
        if (($v = $data['called_four_hour_clue_cnt'] ?? null) !== null) {
            $obj->calledFourHourClueCnt = (int) $v;
        }
        if (($v = $data['called_four_hour_clue_rate'] ?? null) !== null) {
            $obj->calledFourHourClueRate = (float) $v;
        }
        if (($v = $data['called_today_clue_cnt'] ?? null) !== null) {
            $obj->calledTodayClueCnt = (int) $v;
        }
        if (($v = $data['clue_average_call_interval'] ?? null) !== null) {
            $obj->clueAverageCallInterval = (float) $v;
        }
        if (($v = $data['clue_cnt'] ?? null) !== null) {
            $obj->clueCnt = (int) $v;
        }
        if (($v = $data['connected_clue_cnt'] ?? null) !== null) {
            $obj->connectedClueCnt = (int) $v;
        }
        if (($v = $data['connected_clue_rate'] ?? null) !== null) {
            $obj->connectedClueRate = (float) $v;
        }
        if (($v = $data['connected_four_hour_clue_cnt'] ?? null) !== null) {
            $obj->connectedFourHourClueCnt = (int) $v;
        }
        if (($v = $data['connected_four_hour_clue_rate'] ?? null) !== null) {
            $obj->connectedFourHourClueRate = (float) $v;
        }
        if (($v = $data['connected_today_clue_cnt'] ?? null) !== null) {
            $obj->connectedTodayClueCnt = (int) $v;
        }
        if (($v = $data['unconnected_clue_average_call_times'] ?? null) !== null) {
            $obj->unconnectedClueAverageCallTimes = (float) $v;
        }
        if (($v = $data['unconnected_one_call_clue_cnt'] ?? null) !== null) {
            $obj->unconnectedOneCallClueCnt = (int) $v;
        }
        return $obj;
    }
}
