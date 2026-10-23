<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics implements \JsonSerializable
{
    /**
     * 7日总成交订单数
     * @var float
     */
    protected ?float $allOrderPayCount7days = null;

    /**
     * 7日总成交金额
     * @var float
     */
    protected ?float $allOrderPayGmv7days = null;

    /**
     * 7日总支付ROI
     * @var float
     */
    protected ?float $allOrderPrepayAndPayRoi7days = null;

    /**
     * 点击次数
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * 平均千次展示费用
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 评论次数
     * @var float
     */
    protected ?float $dyComment = null;

    /**
     * 点赞次数
     * @var float
     */
    protected ?float $dyLike = null;

    /**
     * 分享次数
     * @var float
     */
    protected ?float $dyShare = null;

    /**
     * 转化数
     * @var float
     */
    protected ?float $ecpConvertCnt = null;

    /**
     * 转化率
     * @var float
     */
    protected ?float $ecpConvertRate = null;

    /**
     * 转化成本
     * @var float
     */
    protected ?float $ecpCpaPlatform = null;

    /**
     * 直接成交订单金额
     * @var float
     */
    protected ?float $payOrderAmount = null;

    /**
     * 直接成交订单数
     * @var float
     */
    protected ?float $payOrderCount = null;

    /**
     * 直接支付ROI
     * @var float
     */
    protected ?float $prepayAndPayOrderRoi = null;

    /**
     * 展示次数
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * 消耗
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 播放数
     * @var float
     */
    protected ?float $totalPlay = null;

    /**
     * 7日总成交订单数
     * @return float
     */
    public function getAllOrderPayCount7days(): ?float
    {
        return $this->allOrderPayCount7days;
    }

    /**
     * 7日总成交订单数
     * @param float $allOrderPayCount7days
     * @return self
     */
    public function setAllOrderPayCount7days(?float $allOrderPayCount7days): self
    {
        $this->allOrderPayCount7days = $allOrderPayCount7days;
        return $this;
    }

    /**
     * 7日总成交金额
     * @return float
     */
    public function getAllOrderPayGmv7days(): ?float
    {
        return $this->allOrderPayGmv7days;
    }

    /**
     * 7日总成交金额
     * @param float $allOrderPayGmv7days
     * @return self
     */
    public function setAllOrderPayGmv7days(?float $allOrderPayGmv7days): self
    {
        $this->allOrderPayGmv7days = $allOrderPayGmv7days;
        return $this;
    }

    /**
     * 7日总支付ROI
     * @return float
     */
    public function getAllOrderPrepayAndPayRoi7days(): ?float
    {
        return $this->allOrderPrepayAndPayRoi7days;
    }

    /**
     * 7日总支付ROI
     * @param float $allOrderPrepayAndPayRoi7days
     * @return self
     */
    public function setAllOrderPrepayAndPayRoi7days(?float $allOrderPrepayAndPayRoi7days): self
    {
        $this->allOrderPrepayAndPayRoi7days = $allOrderPrepayAndPayRoi7days;
        return $this;
    }

    /**
     * 点击次数
     * @return float
     */
    public function getClickCnt(): ?float
    {
        return $this->clickCnt;
    }

    /**
     * 点击次数
     * @param float $clickCnt
     * @return self
     */
    public function setClickCnt(?float $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 平均千次展示费用
     * @return float
     */
    public function getCpmPlatform(): ?float
    {
        return $this->cpmPlatform;
    }

    /**
     * 平均千次展示费用
     * @param float $cpmPlatform
     * @return self
     */
    public function setCpmPlatform(?float $cpmPlatform): self
    {
        $this->cpmPlatform = $cpmPlatform;
        return $this;
    }

    /**
     * 点击率
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * 点击率
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 评论次数
     * @return float
     */
    public function getDyComment(): ?float
    {
        return $this->dyComment;
    }

    /**
     * 评论次数
     * @param float $dyComment
     * @return self
     */
    public function setDyComment(?float $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * 点赞次数
     * @return float
     */
    public function getDyLike(): ?float
    {
        return $this->dyLike;
    }

    /**
     * 点赞次数
     * @param float $dyLike
     * @return self
     */
    public function setDyLike(?float $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * 分享次数
     * @return float
     */
    public function getDyShare(): ?float
    {
        return $this->dyShare;
    }

    /**
     * 分享次数
     * @param float $dyShare
     * @return self
     */
    public function setDyShare(?float $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * 转化数
     * @return float
     */
    public function getEcpConvertCnt(): ?float
    {
        return $this->ecpConvertCnt;
    }

    /**
     * 转化数
     * @param float $ecpConvertCnt
     * @return self
     */
    public function setEcpConvertCnt(?float $ecpConvertCnt): self
    {
        $this->ecpConvertCnt = $ecpConvertCnt;
        return $this;
    }

    /**
     * 转化率
     * @return float
     */
    public function getEcpConvertRate(): ?float
    {
        return $this->ecpConvertRate;
    }

    /**
     * 转化率
     * @param float $ecpConvertRate
     * @return self
     */
    public function setEcpConvertRate(?float $ecpConvertRate): self
    {
        $this->ecpConvertRate = $ecpConvertRate;
        return $this;
    }

    /**
     * 转化成本
     * @return float
     */
    public function getEcpCpaPlatform(): ?float
    {
        return $this->ecpCpaPlatform;
    }

    /**
     * 转化成本
     * @param float $ecpCpaPlatform
     * @return self
     */
    public function setEcpCpaPlatform(?float $ecpCpaPlatform): self
    {
        $this->ecpCpaPlatform = $ecpCpaPlatform;
        return $this;
    }

    /**
     * 直接成交订单金额
     * @return float
     */
    public function getPayOrderAmount(): ?float
    {
        return $this->payOrderAmount;
    }

    /**
     * 直接成交订单金额
     * @param float $payOrderAmount
     * @return self
     */
    public function setPayOrderAmount(?float $payOrderAmount): self
    {
        $this->payOrderAmount = $payOrderAmount;
        return $this;
    }

    /**
     * 直接成交订单数
     * @return float
     */
    public function getPayOrderCount(): ?float
    {
        return $this->payOrderCount;
    }

    /**
     * 直接成交订单数
     * @param float $payOrderCount
     * @return self
     */
    public function setPayOrderCount(?float $payOrderCount): self
    {
        $this->payOrderCount = $payOrderCount;
        return $this;
    }

    /**
     * 直接支付ROI
     * @return float
     */
    public function getPrepayAndPayOrderRoi(): ?float
    {
        return $this->prepayAndPayOrderRoi;
    }

    /**
     * 直接支付ROI
     * @param float $prepayAndPayOrderRoi
     * @return self
     */
    public function setPrepayAndPayOrderRoi(?float $prepayAndPayOrderRoi): self
    {
        $this->prepayAndPayOrderRoi = $prepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 展示次数
     * @return float
     */
    public function getShowCnt(): ?float
    {
        return $this->showCnt;
    }

    /**
     * 展示次数
     * @param float $showCnt
     * @return self
     */
    public function setShowCnt(?float $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 消耗
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 消耗
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 播放数
     * @return float
     */
    public function getTotalPlay(): ?float
    {
        return $this->totalPlay;
    }

    /**
     * 播放数
     * @param float $totalPlay
     * @return self
     */
    public function setTotalPlay(?float $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allOrderPayCount7days !== null) {
            $result['all_order_pay_count_7days'] = $this->allOrderPayCount7days;
        }
        if ($this->allOrderPayGmv7days !== null) {
            $result['all_order_pay_gmv_7days'] = $this->allOrderPayGmv7days;
        }
        if ($this->allOrderPrepayAndPayRoi7days !== null) {
            $result['all_order_prepay_and_pay_roi_7days'] = $this->allOrderPrepayAndPayRoi7days;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->cpmPlatform !== null) {
            $result['cpm_platform'] = $this->cpmPlatform;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->dyComment !== null) {
            $result['dy_comment'] = $this->dyComment;
        }
        if ($this->dyLike !== null) {
            $result['dy_like'] = $this->dyLike;
        }
        if ($this->dyShare !== null) {
            $result['dy_share'] = $this->dyShare;
        }
        if ($this->ecpConvertCnt !== null) {
            $result['ecp_convert_cnt'] = $this->ecpConvertCnt;
        }
        if ($this->ecpConvertRate !== null) {
            $result['ecp_convert_rate'] = $this->ecpConvertRate;
        }
        if ($this->ecpCpaPlatform !== null) {
            $result['ecp_cpa_platform'] = $this->ecpCpaPlatform;
        }
        if ($this->payOrderAmount !== null) {
            $result['pay_order_amount'] = $this->payOrderAmount;
        }
        if ($this->payOrderCount !== null) {
            $result['pay_order_count'] = $this->payOrderCount;
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
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_order_pay_count_7days'] ?? null) !== null) {
            $obj->allOrderPayCount7days = (float) $v;
        }
        if (($v = $data['all_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->allOrderPayGmv7days = (float) $v;
        }
        if (($v = $data['all_order_prepay_and_pay_roi_7days'] ?? null) !== null) {
            $obj->allOrderPrepayAndPayRoi7days = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (float) $v;
        }
        if (($v = $data['dy_like'] ?? null) !== null) {
            $obj->dyLike = (float) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (float) $v;
        }
        if (($v = $data['ecp_convert_cnt'] ?? null) !== null) {
            $obj->ecpConvertCnt = (float) $v;
        }
        if (($v = $data['ecp_convert_rate'] ?? null) !== null) {
            $obj->ecpConvertRate = (float) $v;
        }
        if (($v = $data['ecp_cpa_platform'] ?? null) !== null) {
            $obj->ecpCpaPlatform = (float) $v;
        }
        if (($v = $data['pay_order_amount'] ?? null) !== null) {
            $obj->payOrderAmount = (float) $v;
        }
        if (($v = $data['pay_order_count'] ?? null) !== null) {
            $obj->payOrderCount = (float) $v;
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
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (float) $v;
        }
        return $obj;
    }
}
