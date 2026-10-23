<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostReportGetV10ResponseDataRaiseResultsInner implements \JsonSerializable
{
    /**
     * 广告计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 千川广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 起量点击次数
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * 起量转化数
     * @var float
     */
    protected ?float $convertCnt = null;

    /**
     * 起量转化率
     * @var float
     */
    protected ?float $convertRate = null;

    /**
     * 起量点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 起量直接成交金额，单位元，小数点后两位
     * @var float
     */
    protected ?float $payOrderAmountGmv = null;

    /**
     * 起量直接支付ROI
     * @var float
     */
    protected ?float $prepayAndPayOrderRoi = null;

    /**
     * 起量展示次数
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * 起量消耗，单位元，小数点后两位
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 数据起始时间，格式为：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $statDatetime = null;

    /**
     * 广告计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 千川广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 起量点击次数
     * @return float
     */
    public function getClickCnt(): ?float
    {
        return $this->clickCnt;
    }

    /**
     * 起量点击次数
     * @param float $clickCnt
     * @return self
     */
    public function setClickCnt(?float $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 起量转化数
     * @return float
     */
    public function getConvertCnt(): ?float
    {
        return $this->convertCnt;
    }

    /**
     * 起量转化数
     * @param float $convertCnt
     * @return self
     */
    public function setConvertCnt(?float $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 起量转化率
     * @return float
     */
    public function getConvertRate(): ?float
    {
        return $this->convertRate;
    }

    /**
     * 起量转化率
     * @param float $convertRate
     * @return self
     */
    public function setConvertRate(?float $convertRate): self
    {
        $this->convertRate = $convertRate;
        return $this;
    }

    /**
     * 起量点击率
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * 起量点击率
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 起量直接成交金额，单位元，小数点后两位
     * @return float
     */
    public function getPayOrderAmountGmv(): ?float
    {
        return $this->payOrderAmountGmv;
    }

    /**
     * 起量直接成交金额，单位元，小数点后两位
     * @param float $payOrderAmountGmv
     * @return self
     */
    public function setPayOrderAmountGmv(?float $payOrderAmountGmv): self
    {
        $this->payOrderAmountGmv = $payOrderAmountGmv;
        return $this;
    }

    /**
     * 起量直接支付ROI
     * @return float
     */
    public function getPrepayAndPayOrderRoi(): ?float
    {
        return $this->prepayAndPayOrderRoi;
    }

    /**
     * 起量直接支付ROI
     * @param float $prepayAndPayOrderRoi
     * @return self
     */
    public function setPrepayAndPayOrderRoi(?float $prepayAndPayOrderRoi): self
    {
        $this->prepayAndPayOrderRoi = $prepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 起量展示次数
     * @return float
     */
    public function getShowCnt(): ?float
    {
        return $this->showCnt;
    }

    /**
     * 起量展示次数
     * @param float $showCnt
     * @return self
     */
    public function setShowCnt(?float $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 起量消耗，单位元，小数点后两位
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 起量消耗，单位元，小数点后两位
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 数据起始时间，格式为：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getStatDatetime(): ?string
    {
        return $this->statDatetime;
    }

    /**
     * 数据起始时间，格式为：yyyy-MM-dd HH:mm:ss
     * @param string $statDatetime
     * @return self
     */
    public function setStatDatetime(?string $statDatetime): self
    {
        $this->statDatetime = $statDatetime;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertRate !== null) {
            $result['convert_rate'] = $this->convertRate;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->payOrderAmountGmv !== null) {
            $result['pay_order_amount_gmv'] = $this->payOrderAmountGmv;
        }
        if ($this->prepayAndPayOrderRoi !== null) {
            $result['prepay_and_pay_order_roi'] = $this->prepayAndPayOrderRoi;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statDatetime !== null) {
            $result['stat_datetime'] = $this->statDatetime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (float) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['pay_order_amount_gmv'] ?? null) !== null) {
            $obj->payOrderAmountGmv = (float) $v;
        }
        if (($v = $data['prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->prepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_datetime'] ?? null) !== null) {
            $obj->statDatetime = (string) $v;
        }
        return $obj;
    }
}
