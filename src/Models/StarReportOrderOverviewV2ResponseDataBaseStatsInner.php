<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat $convertStat = null;

    /**
     * 订单号
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat $seedStat = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat $spreadStat = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat $worthScoreStat = null;

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat
     */
    public function getConvertStat(): ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat
    {
        return $this->convertStat;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat $convertStat
     * @return self
     */
    public function setConvertStat(?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat $convertStat): self
    {
        $this->convertStat = $convertStat;
        return $this;
    }

    /**
     * 订单号
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单号
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat
     */
    public function getSeedStat(): ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat
    {
        return $this->seedStat;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat $seedStat
     * @return self
     */
    public function setSeedStat(?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat $seedStat): self
    {
        $this->seedStat = $seedStat;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat
     */
    public function getSpreadStat(): ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat
    {
        return $this->spreadStat;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat $spreadStat
     * @return self
     */
    public function setSpreadStat(?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat $spreadStat): self
    {
        $this->spreadStat = $spreadStat;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat
     */
    public function getWorthScoreStat(): ?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat
    {
        return $this->worthScoreStat;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat $worthScoreStat
     * @return self
     */
    public function setWorthScoreStat(?\Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat $worthScoreStat): self
    {
        $this->worthScoreStat = $worthScoreStat;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->convertStat !== null) {
            $result['convert_stat'] = $this->convertStat;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->seedStat !== null) {
            $result['seed_stat'] = $this->seedStat;
        }
        if ($this->spreadStat !== null) {
            $result['spread_stat'] = $this->spreadStat;
        }
        if ($this->worthScoreStat !== null) {
            $result['worth_score_stat'] = $this->worthScoreStat;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['convert_stat'] ?? null) !== null && is_array($v)) {
            $obj->convertStat = \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat::fromArray($v);
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['seed_stat'] ?? null) !== null && is_array($v)) {
            $obj->seedStat = \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStat::fromArray($v);
        }
        if (($v = $data['spread_stat'] ?? null) !== null && is_array($v)) {
            $obj->spreadStat = \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat::fromArray($v);
        }
        if (($v = $data['worth_score_stat'] ?? null) !== null && is_array($v)) {
            $obj->worthScoreStat = \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerWorthScoreStat::fromArray($v);
        }
        return $obj;
    }
}
