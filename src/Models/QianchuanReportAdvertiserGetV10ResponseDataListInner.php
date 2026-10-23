<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdvertiserGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 直接订单结算率（14天）
     * @var float
     */
    protected ?float $adAllOrderCountSettleRate14d = null;

    /**
     * 直接订单结算率（7天）
     * @var float
     */
    protected ?float $adAllOrderCountSettleRate7d = null;

    /**
     * 直接成交金额结算率（14天）
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate14d = null;

    /**
     * 直接成交金额结算率（7天）
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate7d = null;

    /**
     * 直接结算金额（14天）
     * @var float
     */
    protected ?float $adAllOrderSettleAmount14d = null;

    /**
     * 直接结算金额（7天）
     * @var float
     */
    protected ?float $adAllOrderSettleAmount7d = null;

    /**
     * 直接结算成本（14天）
     * @var float
     */
    protected ?float $adAllOrderSettleCost14d = null;

    /**
     * 直接结算成本（7天）
     * @var float
     */
    protected ?float $adAllOrderSettleCost7d = null;

    /**
     * 直接结算订单数（14天）
     * @var float
     */
    protected ?float $adAllOrderSettleCount14d = null;

    /**
     * 直接结算订单数（7天）
     * @var float
     */
    protected ?float $adAllOrderSettleCount7d = null;

    /**
     * 直接结算ROI（14天）
     * @var float
     */
    protected ?float $adAllOrderSettleRoi14d = null;

    /**
     * 直接结算ROI（7天）
     * @var float
     */
    protected ?float $adAllOrderSettleRoi7d = null;

    /**
     * 直接退款率（14天）
     * @var float
     */
    protected ?float $adOrderGmvRefundRate14d = null;

    /**
     * 直接退款率（7天）
     * @var float
     */
    protected ?float $adOrderGmvRefundRate7d = null;

    /**
     * 直接订单数退货率（14天）
     * @var float
     */
    protected ?float $adOrderRefundRate14d = null;

    /**
     * 直接订单数退货率（7天）
     * @var float
     */
    protected ?float $adOrderRefundRate7d = null;

    /**
     * 千川业务账户ID，对应账户类型为`QIANCHUAN`
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 7日总下单ROI
     * @var float
     */
    protected ?float $allOrderCreateRoi7days = null;

    /**
     * 7日总成交订单
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
    protected ?float $allOrderPayRoi7days = null;

    /**
     * 直接退款金额（14天）
     * @var float
     */
    protected ?float $allOrderRefundAmount14d = null;

    /**
     * 直接退款金额（7天）
     * @var float
     */
    protected ?float $allOrderRefundAmount7d = null;

    /**
     * 直接退款订单数（14天）
     * @var float
     */
    protected ?float $allOrderRefundCount14d = null;

    /**
     * 直接退款订单数（7天）
     * @var float
     */
    protected ?float $allOrderRefundCount7d = null;

    /**
     * 转化数（计费时间）
     * @var float
     */
    protected ?float $attributionConvertCnt = null;

    /**
     * 转化成本（计费时间）
     * @var float
     */
    protected ?float $attributionConvertCost = null;

    /**
     * 转化率（计费时间）
     * @var float
     */
    protected ?float $attributionConvertRate = null;

    /**
     * 深度转化次数（计费时间）
     * @var float
     */
    protected ?float $attributionDeepConvertCnt = null;

    /**
     * 深度转化成本（计费时间）
     * @var float
     */
    protected ?float $attributionDeepConvertCost = null;

    /**
     * 深度转化率（计费时间）
     * @var float
     */
    protected ?float $attributionDeepConvertRate = null;

    /**
     * 点击次数
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * 转化次数
     * @var float
     */
    protected ?float $convertCnt = null;

    /**
     * 转化成本
     * @var float
     */
    protected ?float $convertCost = null;

    /**
     * 转化率
     * @var float
     */
    protected ?float $convertRate = null;

    /**
     * 平均点击单价
     * @var float
     */
    protected ?float $cpcPlatform = null;

    /**
     * 平均千次展示费用
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * 直接下单金额
     * @var float
     */
    protected ?float $createOrderAmount = null;

    /**
     * 直接下单订单数
     * @var float
     */
    protected ?float $createOrderCount = null;

    /**
     * 下单智能优惠券金额
     * @var float
     */
    protected ?float $createOrderCouponAmount = null;

    /**
     * 直接下单roi
     * @var float
     */
    protected ?float $createOrderRoi = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 深度转化次数
     * @var float
     */
    protected ?float $deepConvertCnt = null;

    /**
     * 深度转化成本
     * @var float
     */
    protected ?float $deepConvertCost = null;

    /**
     * 深度转化率
     * @var float
     */
    protected ?float $deepConvertRate = null;

    /**
     * 新增粉丝数
     * @var float
     */
    protected ?float $dyFollow = null;

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
     * 间接下单订单数
     * @var float
     */
    protected ?float $indirectOrderCreateCount7days = null;

    /**
     * 间接下单金额
     * @var float
     */
    protected ?float $indirectOrderCreateGmv7days = null;

    /**
     * 间接成交订单数
     * @var float
     */
    protected ?float $indirectOrderPayCount7days = null;

    /**
     * 间接成交金额
     * @var float
     */
    protected ?float $indirectOrderPayGmv7days = null;

    /**
     * 间接预售订单数
     * @var float
     */
    protected ?float $indirectOrderPrepayCount7days = null;

    /**
     * 间接预售金额
     * @var float
     */
    protected ?float $indirectOrderPrepayGmv7days = null;

    /**
     * 未完结间接预售订单预估金额
     * @var int
     */
    protected ?int $indirectOrderUnfinishedEstimateGmv7days = null;

    /**
     * 成交客单价
     * @var float
     */
    protected ?float $livePayOrderCostPerOrder = null;

    /**
     * 直播间商品点击次数
     * @var float
     */
    protected ?float $lubanLiveClickProductCnt = null;

    /**
     * 直播间观看人次
     * @var float
     */
    protected ?float $lubanLiveEnterCnt = null;

    /**
     * 直接成交金额
     * @var float
     */
    protected ?float $payOrderAmount = null;

    /**
     * 直接成交客单价
     * @var float
     */
    protected ?float $payOrderCostPerOrder = null;

    /**
     * 直接成交订单数
     * @var float
     */
    protected ?float $payOrderCount = null;

    /**
     * 成交智能优惠券金额
     * @var float
     */
    protected ?float $payOrderCouponAmount = null;

    /**
     * 25%进度播放数
     * @var float
     */
    protected ?float $play25FeedBreak = null;

    /**
     * 50%进度播放数
     * @var float
     */
    protected ?float $play50FeedBreak = null;

    /**
     * 75%进度播放数
     * @var float
     */
    protected ?float $play75FeedBreak = null;

    /**
     * 3s播放数
     * @var float
     */
    protected ?float $playDuration3s = null;

    /**
     * 播放完成数
     * @var float
     */
    protected ?float $playOver = null;

    /**
     * 完播率
     * @var float
     */
    protected ?float $playOverRate = null;

    /**
     * 直接支付roi
     * @var float
     */
    protected ?float $prepayAndPayOrderRoi = null;

    /**
     * 直接预售金额
     * @var float
     */
    protected ?float $prepayOrderAmount = null;

    /**
     * 直接预售订单数
     * @var float
     */
    protected ?float $prepayOrderCount = null;

    /**
     * 抖音号首单新客数
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderCnt = null;

    /**
     * 抖音号首单新客转化成本
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderConvertCost = null;

    /**
     * 抖音号首单新客直接成交金额
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderDirectPayGmv = null;

    /**
     * 抖音号首单新客直接支付roi
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderDirectPayOrderRoi = null;

    /**
     * 抖音号首单新客30天累计成交金额
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderLtv30 = null;

    /**
     * 抖音号首单新客订单占比
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderRate = null;

    /**
     * 抖音号首单新客30天累计支付roi
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderRoi30 = null;

    /**
     * 品牌首单新客数
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderCnt = null;

    /**
     * 品牌首单新客转化成本
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderConvertCost = null;

    /**
     * 品牌首单新客直接成交金额
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderDirectPayGmv = null;

    /**
     * 品牌首单新客直接支付roi
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderDirectPayOrderRoi = null;

    /**
     * 品牌首单新客30天累计成交金额
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderLtv30 = null;

    /**
     * 品牌首单新客订单占比
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderRate = null;

    /**
     * 品牌首单新客30天累计支付roi
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderRoi30 = null;

    /**
     * 店铺首单新客人数
     * @var float
     */
    protected ?float $qianchuanFirstOrderCnt = null;

    /**
     * 店铺首单新客转化成本
     * @var float
     */
    protected ?float $qianchuanFirstOrderConvertCost = null;

    /**
     * 店铺首单新客直接成交金额
     * @var float
     */
    protected ?float $qianchuanFirstOrderDirectPayGmv = null;

    /**
     * 店铺首单新客直接支付ROI
     * @var float
     */
    protected ?float $qianchuanFirstOrderDirectPayOrderRoi = null;

    /**
     * 店铺首单新客30天累计成交金额
     * @var float
     */
    protected ?float $qianchuanFirstOrderLtv30 = null;

    /**
     * 店铺首单新客订单占比
     * @var float
     */
    protected ?float $qianchuanFirstOrderRate = null;

    /**
     * 店铺首单新客30天累计支付ROI
     * @var float
     */
    protected ?float $qianchuanFirstOrderRoi30 = null;

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
     * 数据起始时间，当请求传入time_granularity时返回 格式为：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $statDatetime = null;

    /**
     * 播放数
     * @var float
     */
    protected ?float $totalPlay = null;

    /**
     * 未完结直接预售订单预估金额
     * @var int
     */
    protected ?int $unfinishedEstimateOrderGmv = null;

    /**
     * 直接订单结算率（14天）
     * @return float
     */
    public function getAdAllOrderCountSettleRate14d(): ?float
    {
        return $this->adAllOrderCountSettleRate14d;
    }

    /**
     * 直接订单结算率（14天）
     * @param float $adAllOrderCountSettleRate14d
     * @return self
     */
    public function setAdAllOrderCountSettleRate14d(?float $adAllOrderCountSettleRate14d): self
    {
        $this->adAllOrderCountSettleRate14d = $adAllOrderCountSettleRate14d;
        return $this;
    }

    /**
     * 直接订单结算率（7天）
     * @return float
     */
    public function getAdAllOrderCountSettleRate7d(): ?float
    {
        return $this->adAllOrderCountSettleRate7d;
    }

    /**
     * 直接订单结算率（7天）
     * @param float $adAllOrderCountSettleRate7d
     * @return self
     */
    public function setAdAllOrderCountSettleRate7d(?float $adAllOrderCountSettleRate7d): self
    {
        $this->adAllOrderCountSettleRate7d = $adAllOrderCountSettleRate7d;
        return $this;
    }

    /**
     * 直接成交金额结算率（14天）
     * @return float
     */
    public function getAdAllOrderGmvSettleRate14d(): ?float
    {
        return $this->adAllOrderGmvSettleRate14d;
    }

    /**
     * 直接成交金额结算率（14天）
     * @param float $adAllOrderGmvSettleRate14d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate14d(?float $adAllOrderGmvSettleRate14d): self
    {
        $this->adAllOrderGmvSettleRate14d = $adAllOrderGmvSettleRate14d;
        return $this;
    }

    /**
     * 直接成交金额结算率（7天）
     * @return float
     */
    public function getAdAllOrderGmvSettleRate7d(): ?float
    {
        return $this->adAllOrderGmvSettleRate7d;
    }

    /**
     * 直接成交金额结算率（7天）
     * @param float $adAllOrderGmvSettleRate7d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate7d(?float $adAllOrderGmvSettleRate7d): self
    {
        $this->adAllOrderGmvSettleRate7d = $adAllOrderGmvSettleRate7d;
        return $this;
    }

    /**
     * 直接结算金额（14天）
     * @return float
     */
    public function getAdAllOrderSettleAmount14d(): ?float
    {
        return $this->adAllOrderSettleAmount14d;
    }

    /**
     * 直接结算金额（14天）
     * @param float $adAllOrderSettleAmount14d
     * @return self
     */
    public function setAdAllOrderSettleAmount14d(?float $adAllOrderSettleAmount14d): self
    {
        $this->adAllOrderSettleAmount14d = $adAllOrderSettleAmount14d;
        return $this;
    }

    /**
     * 直接结算金额（7天）
     * @return float
     */
    public function getAdAllOrderSettleAmount7d(): ?float
    {
        return $this->adAllOrderSettleAmount7d;
    }

    /**
     * 直接结算金额（7天）
     * @param float $adAllOrderSettleAmount7d
     * @return self
     */
    public function setAdAllOrderSettleAmount7d(?float $adAllOrderSettleAmount7d): self
    {
        $this->adAllOrderSettleAmount7d = $adAllOrderSettleAmount7d;
        return $this;
    }

    /**
     * 直接结算成本（14天）
     * @return float
     */
    public function getAdAllOrderSettleCost14d(): ?float
    {
        return $this->adAllOrderSettleCost14d;
    }

    /**
     * 直接结算成本（14天）
     * @param float $adAllOrderSettleCost14d
     * @return self
     */
    public function setAdAllOrderSettleCost14d(?float $adAllOrderSettleCost14d): self
    {
        $this->adAllOrderSettleCost14d = $adAllOrderSettleCost14d;
        return $this;
    }

    /**
     * 直接结算成本（7天）
     * @return float
     */
    public function getAdAllOrderSettleCost7d(): ?float
    {
        return $this->adAllOrderSettleCost7d;
    }

    /**
     * 直接结算成本（7天）
     * @param float $adAllOrderSettleCost7d
     * @return self
     */
    public function setAdAllOrderSettleCost7d(?float $adAllOrderSettleCost7d): self
    {
        $this->adAllOrderSettleCost7d = $adAllOrderSettleCost7d;
        return $this;
    }

    /**
     * 直接结算订单数（14天）
     * @return float
     */
    public function getAdAllOrderSettleCount14d(): ?float
    {
        return $this->adAllOrderSettleCount14d;
    }

    /**
     * 直接结算订单数（14天）
     * @param float $adAllOrderSettleCount14d
     * @return self
     */
    public function setAdAllOrderSettleCount14d(?float $adAllOrderSettleCount14d): self
    {
        $this->adAllOrderSettleCount14d = $adAllOrderSettleCount14d;
        return $this;
    }

    /**
     * 直接结算订单数（7天）
     * @return float
     */
    public function getAdAllOrderSettleCount7d(): ?float
    {
        return $this->adAllOrderSettleCount7d;
    }

    /**
     * 直接结算订单数（7天）
     * @param float $adAllOrderSettleCount7d
     * @return self
     */
    public function setAdAllOrderSettleCount7d(?float $adAllOrderSettleCount7d): self
    {
        $this->adAllOrderSettleCount7d = $adAllOrderSettleCount7d;
        return $this;
    }

    /**
     * 直接结算ROI（14天）
     * @return float
     */
    public function getAdAllOrderSettleRoi14d(): ?float
    {
        return $this->adAllOrderSettleRoi14d;
    }

    /**
     * 直接结算ROI（14天）
     * @param float $adAllOrderSettleRoi14d
     * @return self
     */
    public function setAdAllOrderSettleRoi14d(?float $adAllOrderSettleRoi14d): self
    {
        $this->adAllOrderSettleRoi14d = $adAllOrderSettleRoi14d;
        return $this;
    }

    /**
     * 直接结算ROI（7天）
     * @return float
     */
    public function getAdAllOrderSettleRoi7d(): ?float
    {
        return $this->adAllOrderSettleRoi7d;
    }

    /**
     * 直接结算ROI（7天）
     * @param float $adAllOrderSettleRoi7d
     * @return self
     */
    public function setAdAllOrderSettleRoi7d(?float $adAllOrderSettleRoi7d): self
    {
        $this->adAllOrderSettleRoi7d = $adAllOrderSettleRoi7d;
        return $this;
    }

    /**
     * 直接退款率（14天）
     * @return float
     */
    public function getAdOrderGmvRefundRate14d(): ?float
    {
        return $this->adOrderGmvRefundRate14d;
    }

    /**
     * 直接退款率（14天）
     * @param float $adOrderGmvRefundRate14d
     * @return self
     */
    public function setAdOrderGmvRefundRate14d(?float $adOrderGmvRefundRate14d): self
    {
        $this->adOrderGmvRefundRate14d = $adOrderGmvRefundRate14d;
        return $this;
    }

    /**
     * 直接退款率（7天）
     * @return float
     */
    public function getAdOrderGmvRefundRate7d(): ?float
    {
        return $this->adOrderGmvRefundRate7d;
    }

    /**
     * 直接退款率（7天）
     * @param float $adOrderGmvRefundRate7d
     * @return self
     */
    public function setAdOrderGmvRefundRate7d(?float $adOrderGmvRefundRate7d): self
    {
        $this->adOrderGmvRefundRate7d = $adOrderGmvRefundRate7d;
        return $this;
    }

    /**
     * 直接订单数退货率（14天）
     * @return float
     */
    public function getAdOrderRefundRate14d(): ?float
    {
        return $this->adOrderRefundRate14d;
    }

    /**
     * 直接订单数退货率（14天）
     * @param float $adOrderRefundRate14d
     * @return self
     */
    public function setAdOrderRefundRate14d(?float $adOrderRefundRate14d): self
    {
        $this->adOrderRefundRate14d = $adOrderRefundRate14d;
        return $this;
    }

    /**
     * 直接订单数退货率（7天）
     * @return float
     */
    public function getAdOrderRefundRate7d(): ?float
    {
        return $this->adOrderRefundRate7d;
    }

    /**
     * 直接订单数退货率（7天）
     * @param float $adOrderRefundRate7d
     * @return self
     */
    public function setAdOrderRefundRate7d(?float $adOrderRefundRate7d): self
    {
        $this->adOrderRefundRate7d = $adOrderRefundRate7d;
        return $this;
    }

    /**
     * 千川业务账户ID，对应账户类型为`QIANCHUAN`
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川业务账户ID，对应账户类型为`QIANCHUAN`
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 7日总下单ROI
     * @return float
     */
    public function getAllOrderCreateRoi7days(): ?float
    {
        return $this->allOrderCreateRoi7days;
    }

    /**
     * 7日总下单ROI
     * @param float $allOrderCreateRoi7days
     * @return self
     */
    public function setAllOrderCreateRoi7days(?float $allOrderCreateRoi7days): self
    {
        $this->allOrderCreateRoi7days = $allOrderCreateRoi7days;
        return $this;
    }

    /**
     * 7日总成交订单
     * @return float
     */
    public function getAllOrderPayCount7days(): ?float
    {
        return $this->allOrderPayCount7days;
    }

    /**
     * 7日总成交订单
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
    public function getAllOrderPayRoi7days(): ?float
    {
        return $this->allOrderPayRoi7days;
    }

    /**
     * 7日总支付ROI
     * @param float $allOrderPayRoi7days
     * @return self
     */
    public function setAllOrderPayRoi7days(?float $allOrderPayRoi7days): self
    {
        $this->allOrderPayRoi7days = $allOrderPayRoi7days;
        return $this;
    }

    /**
     * 直接退款金额（14天）
     * @return float
     */
    public function getAllOrderRefundAmount14d(): ?float
    {
        return $this->allOrderRefundAmount14d;
    }

    /**
     * 直接退款金额（14天）
     * @param float $allOrderRefundAmount14d
     * @return self
     */
    public function setAllOrderRefundAmount14d(?float $allOrderRefundAmount14d): self
    {
        $this->allOrderRefundAmount14d = $allOrderRefundAmount14d;
        return $this;
    }

    /**
     * 直接退款金额（7天）
     * @return float
     */
    public function getAllOrderRefundAmount7d(): ?float
    {
        return $this->allOrderRefundAmount7d;
    }

    /**
     * 直接退款金额（7天）
     * @param float $allOrderRefundAmount7d
     * @return self
     */
    public function setAllOrderRefundAmount7d(?float $allOrderRefundAmount7d): self
    {
        $this->allOrderRefundAmount7d = $allOrderRefundAmount7d;
        return $this;
    }

    /**
     * 直接退款订单数（14天）
     * @return float
     */
    public function getAllOrderRefundCount14d(): ?float
    {
        return $this->allOrderRefundCount14d;
    }

    /**
     * 直接退款订单数（14天）
     * @param float $allOrderRefundCount14d
     * @return self
     */
    public function setAllOrderRefundCount14d(?float $allOrderRefundCount14d): self
    {
        $this->allOrderRefundCount14d = $allOrderRefundCount14d;
        return $this;
    }

    /**
     * 直接退款订单数（7天）
     * @return float
     */
    public function getAllOrderRefundCount7d(): ?float
    {
        return $this->allOrderRefundCount7d;
    }

    /**
     * 直接退款订单数（7天）
     * @param float $allOrderRefundCount7d
     * @return self
     */
    public function setAllOrderRefundCount7d(?float $allOrderRefundCount7d): self
    {
        $this->allOrderRefundCount7d = $allOrderRefundCount7d;
        return $this;
    }

    /**
     * 转化数（计费时间）
     * @return float
     */
    public function getAttributionConvertCnt(): ?float
    {
        return $this->attributionConvertCnt;
    }

    /**
     * 转化数（计费时间）
     * @param float $attributionConvertCnt
     * @return self
     */
    public function setAttributionConvertCnt(?float $attributionConvertCnt): self
    {
        $this->attributionConvertCnt = $attributionConvertCnt;
        return $this;
    }

    /**
     * 转化成本（计费时间）
     * @return float
     */
    public function getAttributionConvertCost(): ?float
    {
        return $this->attributionConvertCost;
    }

    /**
     * 转化成本（计费时间）
     * @param float $attributionConvertCost
     * @return self
     */
    public function setAttributionConvertCost(?float $attributionConvertCost): self
    {
        $this->attributionConvertCost = $attributionConvertCost;
        return $this;
    }

    /**
     * 转化率（计费时间）
     * @return float
     */
    public function getAttributionConvertRate(): ?float
    {
        return $this->attributionConvertRate;
    }

    /**
     * 转化率（计费时间）
     * @param float $attributionConvertRate
     * @return self
     */
    public function setAttributionConvertRate(?float $attributionConvertRate): self
    {
        $this->attributionConvertRate = $attributionConvertRate;
        return $this;
    }

    /**
     * 深度转化次数（计费时间）
     * @return float
     */
    public function getAttributionDeepConvertCnt(): ?float
    {
        return $this->attributionDeepConvertCnt;
    }

    /**
     * 深度转化次数（计费时间）
     * @param float $attributionDeepConvertCnt
     * @return self
     */
    public function setAttributionDeepConvertCnt(?float $attributionDeepConvertCnt): self
    {
        $this->attributionDeepConvertCnt = $attributionDeepConvertCnt;
        return $this;
    }

    /**
     * 深度转化成本（计费时间）
     * @return float
     */
    public function getAttributionDeepConvertCost(): ?float
    {
        return $this->attributionDeepConvertCost;
    }

    /**
     * 深度转化成本（计费时间）
     * @param float $attributionDeepConvertCost
     * @return self
     */
    public function setAttributionDeepConvertCost(?float $attributionDeepConvertCost): self
    {
        $this->attributionDeepConvertCost = $attributionDeepConvertCost;
        return $this;
    }

    /**
     * 深度转化率（计费时间）
     * @return float
     */
    public function getAttributionDeepConvertRate(): ?float
    {
        return $this->attributionDeepConvertRate;
    }

    /**
     * 深度转化率（计费时间）
     * @param float $attributionDeepConvertRate
     * @return self
     */
    public function setAttributionDeepConvertRate(?float $attributionDeepConvertRate): self
    {
        $this->attributionDeepConvertRate = $attributionDeepConvertRate;
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
     * 转化次数
     * @return float
     */
    public function getConvertCnt(): ?float
    {
        return $this->convertCnt;
    }

    /**
     * 转化次数
     * @param float $convertCnt
     * @return self
     */
    public function setConvertCnt(?float $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 转化成本
     * @return float
     */
    public function getConvertCost(): ?float
    {
        return $this->convertCost;
    }

    /**
     * 转化成本
     * @param float $convertCost
     * @return self
     */
    public function setConvertCost(?float $convertCost): self
    {
        $this->convertCost = $convertCost;
        return $this;
    }

    /**
     * 转化率
     * @return float
     */
    public function getConvertRate(): ?float
    {
        return $this->convertRate;
    }

    /**
     * 转化率
     * @param float $convertRate
     * @return self
     */
    public function setConvertRate(?float $convertRate): self
    {
        $this->convertRate = $convertRate;
        return $this;
    }

    /**
     * 平均点击单价
     * @return float
     */
    public function getCpcPlatform(): ?float
    {
        return $this->cpcPlatform;
    }

    /**
     * 平均点击单价
     * @param float $cpcPlatform
     * @return self
     */
    public function setCpcPlatform(?float $cpcPlatform): self
    {
        $this->cpcPlatform = $cpcPlatform;
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
     * 直接下单金额
     * @return float
     */
    public function getCreateOrderAmount(): ?float
    {
        return $this->createOrderAmount;
    }

    /**
     * 直接下单金额
     * @param float $createOrderAmount
     * @return self
     */
    public function setCreateOrderAmount(?float $createOrderAmount): self
    {
        $this->createOrderAmount = $createOrderAmount;
        return $this;
    }

    /**
     * 直接下单订单数
     * @return float
     */
    public function getCreateOrderCount(): ?float
    {
        return $this->createOrderCount;
    }

    /**
     * 直接下单订单数
     * @param float $createOrderCount
     * @return self
     */
    public function setCreateOrderCount(?float $createOrderCount): self
    {
        $this->createOrderCount = $createOrderCount;
        return $this;
    }

    /**
     * 下单智能优惠券金额
     * @return float
     */
    public function getCreateOrderCouponAmount(): ?float
    {
        return $this->createOrderCouponAmount;
    }

    /**
     * 下单智能优惠券金额
     * @param float $createOrderCouponAmount
     * @return self
     */
    public function setCreateOrderCouponAmount(?float $createOrderCouponAmount): self
    {
        $this->createOrderCouponAmount = $createOrderCouponAmount;
        return $this;
    }

    /**
     * 直接下单roi
     * @return float
     */
    public function getCreateOrderRoi(): ?float
    {
        return $this->createOrderRoi;
    }

    /**
     * 直接下单roi
     * @param float $createOrderRoi
     * @return self
     */
    public function setCreateOrderRoi(?float $createOrderRoi): self
    {
        $this->createOrderRoi = $createOrderRoi;
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
     * 深度转化次数
     * @return float
     */
    public function getDeepConvertCnt(): ?float
    {
        return $this->deepConvertCnt;
    }

    /**
     * 深度转化次数
     * @param float $deepConvertCnt
     * @return self
     */
    public function setDeepConvertCnt(?float $deepConvertCnt): self
    {
        $this->deepConvertCnt = $deepConvertCnt;
        return $this;
    }

    /**
     * 深度转化成本
     * @return float
     */
    public function getDeepConvertCost(): ?float
    {
        return $this->deepConvertCost;
    }

    /**
     * 深度转化成本
     * @param float $deepConvertCost
     * @return self
     */
    public function setDeepConvertCost(?float $deepConvertCost): self
    {
        $this->deepConvertCost = $deepConvertCost;
        return $this;
    }

    /**
     * 深度转化率
     * @return float
     */
    public function getDeepConvertRate(): ?float
    {
        return $this->deepConvertRate;
    }

    /**
     * 深度转化率
     * @param float $deepConvertRate
     * @return self
     */
    public function setDeepConvertRate(?float $deepConvertRate): self
    {
        $this->deepConvertRate = $deepConvertRate;
        return $this;
    }

    /**
     * 新增粉丝数
     * @return float
     */
    public function getDyFollow(): ?float
    {
        return $this->dyFollow;
    }

    /**
     * 新增粉丝数
     * @param float $dyFollow
     * @return self
     */
    public function setDyFollow(?float $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
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
     * 间接下单订单数
     * @return float
     */
    public function getIndirectOrderCreateCount7days(): ?float
    {
        return $this->indirectOrderCreateCount7days;
    }

    /**
     * 间接下单订单数
     * @param float $indirectOrderCreateCount7days
     * @return self
     */
    public function setIndirectOrderCreateCount7days(?float $indirectOrderCreateCount7days): self
    {
        $this->indirectOrderCreateCount7days = $indirectOrderCreateCount7days;
        return $this;
    }

    /**
     * 间接下单金额
     * @return float
     */
    public function getIndirectOrderCreateGmv7days(): ?float
    {
        return $this->indirectOrderCreateGmv7days;
    }

    /**
     * 间接下单金额
     * @param float $indirectOrderCreateGmv7days
     * @return self
     */
    public function setIndirectOrderCreateGmv7days(?float $indirectOrderCreateGmv7days): self
    {
        $this->indirectOrderCreateGmv7days = $indirectOrderCreateGmv7days;
        return $this;
    }

    /**
     * 间接成交订单数
     * @return float
     */
    public function getIndirectOrderPayCount7days(): ?float
    {
        return $this->indirectOrderPayCount7days;
    }

    /**
     * 间接成交订单数
     * @param float $indirectOrderPayCount7days
     * @return self
     */
    public function setIndirectOrderPayCount7days(?float $indirectOrderPayCount7days): self
    {
        $this->indirectOrderPayCount7days = $indirectOrderPayCount7days;
        return $this;
    }

    /**
     * 间接成交金额
     * @return float
     */
    public function getIndirectOrderPayGmv7days(): ?float
    {
        return $this->indirectOrderPayGmv7days;
    }

    /**
     * 间接成交金额
     * @param float $indirectOrderPayGmv7days
     * @return self
     */
    public function setIndirectOrderPayGmv7days(?float $indirectOrderPayGmv7days): self
    {
        $this->indirectOrderPayGmv7days = $indirectOrderPayGmv7days;
        return $this;
    }

    /**
     * 间接预售订单数
     * @return float
     */
    public function getIndirectOrderPrepayCount7days(): ?float
    {
        return $this->indirectOrderPrepayCount7days;
    }

    /**
     * 间接预售订单数
     * @param float $indirectOrderPrepayCount7days
     * @return self
     */
    public function setIndirectOrderPrepayCount7days(?float $indirectOrderPrepayCount7days): self
    {
        $this->indirectOrderPrepayCount7days = $indirectOrderPrepayCount7days;
        return $this;
    }

    /**
     * 间接预售金额
     * @return float
     */
    public function getIndirectOrderPrepayGmv7days(): ?float
    {
        return $this->indirectOrderPrepayGmv7days;
    }

    /**
     * 间接预售金额
     * @param float $indirectOrderPrepayGmv7days
     * @return self
     */
    public function setIndirectOrderPrepayGmv7days(?float $indirectOrderPrepayGmv7days): self
    {
        $this->indirectOrderPrepayGmv7days = $indirectOrderPrepayGmv7days;
        return $this;
    }

    /**
     * 未完结间接预售订单预估金额
     * @return int
     */
    public function getIndirectOrderUnfinishedEstimateGmv7days(): ?int
    {
        return $this->indirectOrderUnfinishedEstimateGmv7days;
    }

    /**
     * 未完结间接预售订单预估金额
     * @param int $indirectOrderUnfinishedEstimateGmv7days
     * @return self
     */
    public function setIndirectOrderUnfinishedEstimateGmv7days(?int $indirectOrderUnfinishedEstimateGmv7days): self
    {
        $this->indirectOrderUnfinishedEstimateGmv7days = $indirectOrderUnfinishedEstimateGmv7days;
        return $this;
    }

    /**
     * 成交客单价
     * @return float
     */
    public function getLivePayOrderCostPerOrder(): ?float
    {
        return $this->livePayOrderCostPerOrder;
    }

    /**
     * 成交客单价
     * @param float $livePayOrderCostPerOrder
     * @return self
     */
    public function setLivePayOrderCostPerOrder(?float $livePayOrderCostPerOrder): self
    {
        $this->livePayOrderCostPerOrder = $livePayOrderCostPerOrder;
        return $this;
    }

    /**
     * 直播间商品点击次数
     * @return float
     */
    public function getLubanLiveClickProductCnt(): ?float
    {
        return $this->lubanLiveClickProductCnt;
    }

    /**
     * 直播间商品点击次数
     * @param float $lubanLiveClickProductCnt
     * @return self
     */
    public function setLubanLiveClickProductCnt(?float $lubanLiveClickProductCnt): self
    {
        $this->lubanLiveClickProductCnt = $lubanLiveClickProductCnt;
        return $this;
    }

    /**
     * 直播间观看人次
     * @return float
     */
    public function getLubanLiveEnterCnt(): ?float
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * 直播间观看人次
     * @param float $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?float $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * 直接成交金额
     * @return float
     */
    public function getPayOrderAmount(): ?float
    {
        return $this->payOrderAmount;
    }

    /**
     * 直接成交金额
     * @param float $payOrderAmount
     * @return self
     */
    public function setPayOrderAmount(?float $payOrderAmount): self
    {
        $this->payOrderAmount = $payOrderAmount;
        return $this;
    }

    /**
     * 直接成交客单价
     * @return float
     */
    public function getPayOrderCostPerOrder(): ?float
    {
        return $this->payOrderCostPerOrder;
    }

    /**
     * 直接成交客单价
     * @param float $payOrderCostPerOrder
     * @return self
     */
    public function setPayOrderCostPerOrder(?float $payOrderCostPerOrder): self
    {
        $this->payOrderCostPerOrder = $payOrderCostPerOrder;
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
     * 成交智能优惠券金额
     * @return float
     */
    public function getPayOrderCouponAmount(): ?float
    {
        return $this->payOrderCouponAmount;
    }

    /**
     * 成交智能优惠券金额
     * @param float $payOrderCouponAmount
     * @return self
     */
    public function setPayOrderCouponAmount(?float $payOrderCouponAmount): self
    {
        $this->payOrderCouponAmount = $payOrderCouponAmount;
        return $this;
    }

    /**
     * 25%进度播放数
     * @return float
     */
    public function getPlay25FeedBreak(): ?float
    {
        return $this->play25FeedBreak;
    }

    /**
     * 25%进度播放数
     * @param float $play25FeedBreak
     * @return self
     */
    public function setPlay25FeedBreak(?float $play25FeedBreak): self
    {
        $this->play25FeedBreak = $play25FeedBreak;
        return $this;
    }

    /**
     * 50%进度播放数
     * @return float
     */
    public function getPlay50FeedBreak(): ?float
    {
        return $this->play50FeedBreak;
    }

    /**
     * 50%进度播放数
     * @param float $play50FeedBreak
     * @return self
     */
    public function setPlay50FeedBreak(?float $play50FeedBreak): self
    {
        $this->play50FeedBreak = $play50FeedBreak;
        return $this;
    }

    /**
     * 75%进度播放数
     * @return float
     */
    public function getPlay75FeedBreak(): ?float
    {
        return $this->play75FeedBreak;
    }

    /**
     * 75%进度播放数
     * @param float $play75FeedBreak
     * @return self
     */
    public function setPlay75FeedBreak(?float $play75FeedBreak): self
    {
        $this->play75FeedBreak = $play75FeedBreak;
        return $this;
    }

    /**
     * 3s播放数
     * @return float
     */
    public function getPlayDuration3s(): ?float
    {
        return $this->playDuration3s;
    }

    /**
     * 3s播放数
     * @param float $playDuration3s
     * @return self
     */
    public function setPlayDuration3s(?float $playDuration3s): self
    {
        $this->playDuration3s = $playDuration3s;
        return $this;
    }

    /**
     * 播放完成数
     * @return float
     */
    public function getPlayOver(): ?float
    {
        return $this->playOver;
    }

    /**
     * 播放完成数
     * @param float $playOver
     * @return self
     */
    public function setPlayOver(?float $playOver): self
    {
        $this->playOver = $playOver;
        return $this;
    }

    /**
     * 完播率
     * @return float
     */
    public function getPlayOverRate(): ?float
    {
        return $this->playOverRate;
    }

    /**
     * 完播率
     * @param float $playOverRate
     * @return self
     */
    public function setPlayOverRate(?float $playOverRate): self
    {
        $this->playOverRate = $playOverRate;
        return $this;
    }

    /**
     * 直接支付roi
     * @return float
     */
    public function getPrepayAndPayOrderRoi(): ?float
    {
        return $this->prepayAndPayOrderRoi;
    }

    /**
     * 直接支付roi
     * @param float $prepayAndPayOrderRoi
     * @return self
     */
    public function setPrepayAndPayOrderRoi(?float $prepayAndPayOrderRoi): self
    {
        $this->prepayAndPayOrderRoi = $prepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 直接预售金额
     * @return float
     */
    public function getPrepayOrderAmount(): ?float
    {
        return $this->prepayOrderAmount;
    }

    /**
     * 直接预售金额
     * @param float $prepayOrderAmount
     * @return self
     */
    public function setPrepayOrderAmount(?float $prepayOrderAmount): self
    {
        $this->prepayOrderAmount = $prepayOrderAmount;
        return $this;
    }

    /**
     * 直接预售订单数
     * @return float
     */
    public function getPrepayOrderCount(): ?float
    {
        return $this->prepayOrderCount;
    }

    /**
     * 直接预售订单数
     * @param float $prepayOrderCount
     * @return self
     */
    public function setPrepayOrderCount(?float $prepayOrderCount): self
    {
        $this->prepayOrderCount = $prepayOrderCount;
        return $this;
    }

    /**
     * 抖音号首单新客数
     * @return float
     */
    public function getQianchuanAuthorFirstOrderCnt(): ?float
    {
        return $this->qianchuanAuthorFirstOrderCnt;
    }

    /**
     * 抖音号首单新客数
     * @param float $qianchuanAuthorFirstOrderCnt
     * @return self
     */
    public function setQianchuanAuthorFirstOrderCnt(?float $qianchuanAuthorFirstOrderCnt): self
    {
        $this->qianchuanAuthorFirstOrderCnt = $qianchuanAuthorFirstOrderCnt;
        return $this;
    }

    /**
     * 抖音号首单新客转化成本
     * @return float
     */
    public function getQianchuanAuthorFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanAuthorFirstOrderConvertCost;
    }

    /**
     * 抖音号首单新客转化成本
     * @param float $qianchuanAuthorFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanAuthorFirstOrderConvertCost(?float $qianchuanAuthorFirstOrderConvertCost): self
    {
        $this->qianchuanAuthorFirstOrderConvertCost = $qianchuanAuthorFirstOrderConvertCost;
        return $this;
    }

    /**
     * 抖音号首单新客直接成交金额
     * @return float
     */
    public function getQianchuanAuthorFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanAuthorFirstOrderDirectPayGmv;
    }

    /**
     * 抖音号首单新客直接成交金额
     * @param float $qianchuanAuthorFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanAuthorFirstOrderDirectPayGmv(?float $qianchuanAuthorFirstOrderDirectPayGmv): self
    {
        $this->qianchuanAuthorFirstOrderDirectPayGmv = $qianchuanAuthorFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * 抖音号首单新客直接支付roi
     * @return float
     */
    public function getQianchuanAuthorFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanAuthorFirstOrderDirectPayOrderRoi;
    }

    /**
     * 抖音号首单新客直接支付roi
     * @param float $qianchuanAuthorFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanAuthorFirstOrderDirectPayOrderRoi(?float $qianchuanAuthorFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanAuthorFirstOrderDirectPayOrderRoi = $qianchuanAuthorFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * 抖音号首单新客30天累计成交金额
     * @return float
     */
    public function getQianchuanAuthorFirstOrderLtv30(): ?float
    {
        return $this->qianchuanAuthorFirstOrderLtv30;
    }

    /**
     * 抖音号首单新客30天累计成交金额
     * @param float $qianchuanAuthorFirstOrderLtv30
     * @return self
     */
    public function setQianchuanAuthorFirstOrderLtv30(?float $qianchuanAuthorFirstOrderLtv30): self
    {
        $this->qianchuanAuthorFirstOrderLtv30 = $qianchuanAuthorFirstOrderLtv30;
        return $this;
    }

    /**
     * 抖音号首单新客订单占比
     * @return float
     */
    public function getQianchuanAuthorFirstOrderRate(): ?float
    {
        return $this->qianchuanAuthorFirstOrderRate;
    }

    /**
     * 抖音号首单新客订单占比
     * @param float $qianchuanAuthorFirstOrderRate
     * @return self
     */
    public function setQianchuanAuthorFirstOrderRate(?float $qianchuanAuthorFirstOrderRate): self
    {
        $this->qianchuanAuthorFirstOrderRate = $qianchuanAuthorFirstOrderRate;
        return $this;
    }

    /**
     * 抖音号首单新客30天累计支付roi
     * @return float
     */
    public function getQianchuanAuthorFirstOrderRoi30(): ?float
    {
        return $this->qianchuanAuthorFirstOrderRoi30;
    }

    /**
     * 抖音号首单新客30天累计支付roi
     * @param float $qianchuanAuthorFirstOrderRoi30
     * @return self
     */
    public function setQianchuanAuthorFirstOrderRoi30(?float $qianchuanAuthorFirstOrderRoi30): self
    {
        $this->qianchuanAuthorFirstOrderRoi30 = $qianchuanAuthorFirstOrderRoi30;
        return $this;
    }

    /**
     * 品牌首单新客数
     * @return float
     */
    public function getQianchuanBrandFirstOrderCnt(): ?float
    {
        return $this->qianchuanBrandFirstOrderCnt;
    }

    /**
     * 品牌首单新客数
     * @param float $qianchuanBrandFirstOrderCnt
     * @return self
     */
    public function setQianchuanBrandFirstOrderCnt(?float $qianchuanBrandFirstOrderCnt): self
    {
        $this->qianchuanBrandFirstOrderCnt = $qianchuanBrandFirstOrderCnt;
        return $this;
    }

    /**
     * 品牌首单新客转化成本
     * @return float
     */
    public function getQianchuanBrandFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanBrandFirstOrderConvertCost;
    }

    /**
     * 品牌首单新客转化成本
     * @param float $qianchuanBrandFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanBrandFirstOrderConvertCost(?float $qianchuanBrandFirstOrderConvertCost): self
    {
        $this->qianchuanBrandFirstOrderConvertCost = $qianchuanBrandFirstOrderConvertCost;
        return $this;
    }

    /**
     * 品牌首单新客直接成交金额
     * @return float
     */
    public function getQianchuanBrandFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanBrandFirstOrderDirectPayGmv;
    }

    /**
     * 品牌首单新客直接成交金额
     * @param float $qianchuanBrandFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanBrandFirstOrderDirectPayGmv(?float $qianchuanBrandFirstOrderDirectPayGmv): self
    {
        $this->qianchuanBrandFirstOrderDirectPayGmv = $qianchuanBrandFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * 品牌首单新客直接支付roi
     * @return float
     */
    public function getQianchuanBrandFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanBrandFirstOrderDirectPayOrderRoi;
    }

    /**
     * 品牌首单新客直接支付roi
     * @param float $qianchuanBrandFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanBrandFirstOrderDirectPayOrderRoi(?float $qianchuanBrandFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanBrandFirstOrderDirectPayOrderRoi = $qianchuanBrandFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * 品牌首单新客30天累计成交金额
     * @return float
     */
    public function getQianchuanBrandFirstOrderLtv30(): ?float
    {
        return $this->qianchuanBrandFirstOrderLtv30;
    }

    /**
     * 品牌首单新客30天累计成交金额
     * @param float $qianchuanBrandFirstOrderLtv30
     * @return self
     */
    public function setQianchuanBrandFirstOrderLtv30(?float $qianchuanBrandFirstOrderLtv30): self
    {
        $this->qianchuanBrandFirstOrderLtv30 = $qianchuanBrandFirstOrderLtv30;
        return $this;
    }

    /**
     * 品牌首单新客订单占比
     * @return float
     */
    public function getQianchuanBrandFirstOrderRate(): ?float
    {
        return $this->qianchuanBrandFirstOrderRate;
    }

    /**
     * 品牌首单新客订单占比
     * @param float $qianchuanBrandFirstOrderRate
     * @return self
     */
    public function setQianchuanBrandFirstOrderRate(?float $qianchuanBrandFirstOrderRate): self
    {
        $this->qianchuanBrandFirstOrderRate = $qianchuanBrandFirstOrderRate;
        return $this;
    }

    /**
     * 品牌首单新客30天累计支付roi
     * @return float
     */
    public function getQianchuanBrandFirstOrderRoi30(): ?float
    {
        return $this->qianchuanBrandFirstOrderRoi30;
    }

    /**
     * 品牌首单新客30天累计支付roi
     * @param float $qianchuanBrandFirstOrderRoi30
     * @return self
     */
    public function setQianchuanBrandFirstOrderRoi30(?float $qianchuanBrandFirstOrderRoi30): self
    {
        $this->qianchuanBrandFirstOrderRoi30 = $qianchuanBrandFirstOrderRoi30;
        return $this;
    }

    /**
     * 店铺首单新客人数
     * @return float
     */
    public function getQianchuanFirstOrderCnt(): ?float
    {
        return $this->qianchuanFirstOrderCnt;
    }

    /**
     * 店铺首单新客人数
     * @param float $qianchuanFirstOrderCnt
     * @return self
     */
    public function setQianchuanFirstOrderCnt(?float $qianchuanFirstOrderCnt): self
    {
        $this->qianchuanFirstOrderCnt = $qianchuanFirstOrderCnt;
        return $this;
    }

    /**
     * 店铺首单新客转化成本
     * @return float
     */
    public function getQianchuanFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanFirstOrderConvertCost;
    }

    /**
     * 店铺首单新客转化成本
     * @param float $qianchuanFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanFirstOrderConvertCost(?float $qianchuanFirstOrderConvertCost): self
    {
        $this->qianchuanFirstOrderConvertCost = $qianchuanFirstOrderConvertCost;
        return $this;
    }

    /**
     * 店铺首单新客直接成交金额
     * @return float
     */
    public function getQianchuanFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanFirstOrderDirectPayGmv;
    }

    /**
     * 店铺首单新客直接成交金额
     * @param float $qianchuanFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanFirstOrderDirectPayGmv(?float $qianchuanFirstOrderDirectPayGmv): self
    {
        $this->qianchuanFirstOrderDirectPayGmv = $qianchuanFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * 店铺首单新客直接支付ROI
     * @return float
     */
    public function getQianchuanFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanFirstOrderDirectPayOrderRoi;
    }

    /**
     * 店铺首单新客直接支付ROI
     * @param float $qianchuanFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanFirstOrderDirectPayOrderRoi(?float $qianchuanFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanFirstOrderDirectPayOrderRoi = $qianchuanFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * 店铺首单新客30天累计成交金额
     * @return float
     */
    public function getQianchuanFirstOrderLtv30(): ?float
    {
        return $this->qianchuanFirstOrderLtv30;
    }

    /**
     * 店铺首单新客30天累计成交金额
     * @param float $qianchuanFirstOrderLtv30
     * @return self
     */
    public function setQianchuanFirstOrderLtv30(?float $qianchuanFirstOrderLtv30): self
    {
        $this->qianchuanFirstOrderLtv30 = $qianchuanFirstOrderLtv30;
        return $this;
    }

    /**
     * 店铺首单新客订单占比
     * @return float
     */
    public function getQianchuanFirstOrderRate(): ?float
    {
        return $this->qianchuanFirstOrderRate;
    }

    /**
     * 店铺首单新客订单占比
     * @param float $qianchuanFirstOrderRate
     * @return self
     */
    public function setQianchuanFirstOrderRate(?float $qianchuanFirstOrderRate): self
    {
        $this->qianchuanFirstOrderRate = $qianchuanFirstOrderRate;
        return $this;
    }

    /**
     * 店铺首单新客30天累计支付ROI
     * @return float
     */
    public function getQianchuanFirstOrderRoi30(): ?float
    {
        return $this->qianchuanFirstOrderRoi30;
    }

    /**
     * 店铺首单新客30天累计支付ROI
     * @param float $qianchuanFirstOrderRoi30
     * @return self
     */
    public function setQianchuanFirstOrderRoi30(?float $qianchuanFirstOrderRoi30): self
    {
        $this->qianchuanFirstOrderRoi30 = $qianchuanFirstOrderRoi30;
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
     * 数据起始时间，当请求传入time_granularity时返回 格式为：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getStatDatetime(): ?string
    {
        return $this->statDatetime;
    }

    /**
     * 数据起始时间，当请求传入time_granularity时返回 格式为：yyyy-MM-dd HH:mm:ss
     * @param string $statDatetime
     * @return self
     */
    public function setStatDatetime(?string $statDatetime): self
    {
        $this->statDatetime = $statDatetime;
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
     * 未完结直接预售订单预估金额
     * @return int
     */
    public function getUnfinishedEstimateOrderGmv(): ?int
    {
        return $this->unfinishedEstimateOrderGmv;
    }

    /**
     * 未完结直接预售订单预估金额
     * @param int $unfinishedEstimateOrderGmv
     * @return self
     */
    public function setUnfinishedEstimateOrderGmv(?int $unfinishedEstimateOrderGmv): self
    {
        $this->unfinishedEstimateOrderGmv = $unfinishedEstimateOrderGmv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adAllOrderCountSettleRate14d !== null) {
            $result['ad_all_order_count_settle_rate_14d'] = $this->adAllOrderCountSettleRate14d;
        }
        if ($this->adAllOrderCountSettleRate7d !== null) {
            $result['ad_all_order_count_settle_rate_7d'] = $this->adAllOrderCountSettleRate7d;
        }
        if ($this->adAllOrderGmvSettleRate14d !== null) {
            $result['ad_all_order_gmv_settle_rate_14d'] = $this->adAllOrderGmvSettleRate14d;
        }
        if ($this->adAllOrderGmvSettleRate7d !== null) {
            $result['ad_all_order_gmv_settle_rate_7d'] = $this->adAllOrderGmvSettleRate7d;
        }
        if ($this->adAllOrderSettleAmount14d !== null) {
            $result['ad_all_order_settle_amount_14d'] = $this->adAllOrderSettleAmount14d;
        }
        if ($this->adAllOrderSettleAmount7d !== null) {
            $result['ad_all_order_settle_amount_7d'] = $this->adAllOrderSettleAmount7d;
        }
        if ($this->adAllOrderSettleCost14d !== null) {
            $result['ad_all_order_settle_cost_14d'] = $this->adAllOrderSettleCost14d;
        }
        if ($this->adAllOrderSettleCost7d !== null) {
            $result['ad_all_order_settle_cost_7d'] = $this->adAllOrderSettleCost7d;
        }
        if ($this->adAllOrderSettleCount14d !== null) {
            $result['ad_all_order_settle_count_14d'] = $this->adAllOrderSettleCount14d;
        }
        if ($this->adAllOrderSettleCount7d !== null) {
            $result['ad_all_order_settle_count_7d'] = $this->adAllOrderSettleCount7d;
        }
        if ($this->adAllOrderSettleRoi14d !== null) {
            $result['ad_all_order_settle_roi_14d'] = $this->adAllOrderSettleRoi14d;
        }
        if ($this->adAllOrderSettleRoi7d !== null) {
            $result['ad_all_order_settle_roi_7d'] = $this->adAllOrderSettleRoi7d;
        }
        if ($this->adOrderGmvRefundRate14d !== null) {
            $result['ad_order_gmv_refund_rate_14d'] = $this->adOrderGmvRefundRate14d;
        }
        if ($this->adOrderGmvRefundRate7d !== null) {
            $result['ad_order_gmv_refund_rate_7d'] = $this->adOrderGmvRefundRate7d;
        }
        if ($this->adOrderRefundRate14d !== null) {
            $result['ad_order_refund_rate_14d'] = $this->adOrderRefundRate14d;
        }
        if ($this->adOrderRefundRate7d !== null) {
            $result['ad_order_refund_rate_7d'] = $this->adOrderRefundRate7d;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->allOrderCreateRoi7days !== null) {
            $result['all_order_create_roi_7days'] = $this->allOrderCreateRoi7days;
        }
        if ($this->allOrderPayCount7days !== null) {
            $result['all_order_pay_count_7days'] = $this->allOrderPayCount7days;
        }
        if ($this->allOrderPayGmv7days !== null) {
            $result['all_order_pay_gmv_7days'] = $this->allOrderPayGmv7days;
        }
        if ($this->allOrderPayRoi7days !== null) {
            $result['all_order_pay_roi_7days'] = $this->allOrderPayRoi7days;
        }
        if ($this->allOrderRefundAmount14d !== null) {
            $result['all_order_refund_amount_14d'] = $this->allOrderRefundAmount14d;
        }
        if ($this->allOrderRefundAmount7d !== null) {
            $result['all_order_refund_amount_7d'] = $this->allOrderRefundAmount7d;
        }
        if ($this->allOrderRefundCount14d !== null) {
            $result['all_order_refund_count_14d'] = $this->allOrderRefundCount14d;
        }
        if ($this->allOrderRefundCount7d !== null) {
            $result['all_order_refund_count_7d'] = $this->allOrderRefundCount7d;
        }
        if ($this->attributionConvertCnt !== null) {
            $result['attribution_convert_cnt'] = $this->attributionConvertCnt;
        }
        if ($this->attributionConvertCost !== null) {
            $result['attribution_convert_cost'] = $this->attributionConvertCost;
        }
        if ($this->attributionConvertRate !== null) {
            $result['attribution_convert_rate'] = $this->attributionConvertRate;
        }
        if ($this->attributionDeepConvertCnt !== null) {
            $result['attribution_deep_convert_cnt'] = $this->attributionDeepConvertCnt;
        }
        if ($this->attributionDeepConvertCost !== null) {
            $result['attribution_deep_convert_cost'] = $this->attributionDeepConvertCost;
        }
        if ($this->attributionDeepConvertRate !== null) {
            $result['attribution_deep_convert_rate'] = $this->attributionDeepConvertRate;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertCost !== null) {
            $result['convert_cost'] = $this->convertCost;
        }
        if ($this->convertRate !== null) {
            $result['convert_rate'] = $this->convertRate;
        }
        if ($this->cpcPlatform !== null) {
            $result['cpc_platform'] = $this->cpcPlatform;
        }
        if ($this->cpmPlatform !== null) {
            $result['cpm_platform'] = $this->cpmPlatform;
        }
        if ($this->createOrderAmount !== null) {
            $result['create_order_amount'] = $this->createOrderAmount;
        }
        if ($this->createOrderCount !== null) {
            $result['create_order_count'] = $this->createOrderCount;
        }
        if ($this->createOrderCouponAmount !== null) {
            $result['create_order_coupon_amount'] = $this->createOrderCouponAmount;
        }
        if ($this->createOrderRoi !== null) {
            $result['create_order_roi'] = $this->createOrderRoi;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->deepConvertCnt !== null) {
            $result['deep_convert_cnt'] = $this->deepConvertCnt;
        }
        if ($this->deepConvertCost !== null) {
            $result['deep_convert_cost'] = $this->deepConvertCost;
        }
        if ($this->deepConvertRate !== null) {
            $result['deep_convert_rate'] = $this->deepConvertRate;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
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
        if ($this->indirectOrderCreateCount7days !== null) {
            $result['indirect_order_create_count_7days'] = $this->indirectOrderCreateCount7days;
        }
        if ($this->indirectOrderCreateGmv7days !== null) {
            $result['indirect_order_create_gmv_7days'] = $this->indirectOrderCreateGmv7days;
        }
        if ($this->indirectOrderPayCount7days !== null) {
            $result['indirect_order_pay_count_7days'] = $this->indirectOrderPayCount7days;
        }
        if ($this->indirectOrderPayGmv7days !== null) {
            $result['indirect_order_pay_gmv_7days'] = $this->indirectOrderPayGmv7days;
        }
        if ($this->indirectOrderPrepayCount7days !== null) {
            $result['indirect_order_prepay_count_7days'] = $this->indirectOrderPrepayCount7days;
        }
        if ($this->indirectOrderPrepayGmv7days !== null) {
            $result['indirect_order_prepay_gmv_7days'] = $this->indirectOrderPrepayGmv7days;
        }
        if ($this->indirectOrderUnfinishedEstimateGmv7days !== null) {
            $result['indirect_order_unfinished_estimate_gmv_7days'] = $this->indirectOrderUnfinishedEstimateGmv7days;
        }
        if ($this->livePayOrderCostPerOrder !== null) {
            $result['live_pay_order_cost_per_order'] = $this->livePayOrderCostPerOrder;
        }
        if ($this->lubanLiveClickProductCnt !== null) {
            $result['luban_live_click_product_cnt'] = $this->lubanLiveClickProductCnt;
        }
        if ($this->lubanLiveEnterCnt !== null) {
            $result['luban_live_enter_cnt'] = $this->lubanLiveEnterCnt;
        }
        if ($this->payOrderAmount !== null) {
            $result['pay_order_amount'] = $this->payOrderAmount;
        }
        if ($this->payOrderCostPerOrder !== null) {
            $result['pay_order_cost_per_order'] = $this->payOrderCostPerOrder;
        }
        if ($this->payOrderCount !== null) {
            $result['pay_order_count'] = $this->payOrderCount;
        }
        if ($this->payOrderCouponAmount !== null) {
            $result['pay_order_coupon_amount'] = $this->payOrderCouponAmount;
        }
        if ($this->play25FeedBreak !== null) {
            $result['play_25_feed_break'] = $this->play25FeedBreak;
        }
        if ($this->play50FeedBreak !== null) {
            $result['play_50_feed_break'] = $this->play50FeedBreak;
        }
        if ($this->play75FeedBreak !== null) {
            $result['play_75_feed_break'] = $this->play75FeedBreak;
        }
        if ($this->playDuration3s !== null) {
            $result['play_duration_3s'] = $this->playDuration3s;
        }
        if ($this->playOver !== null) {
            $result['play_over'] = $this->playOver;
        }
        if ($this->playOverRate !== null) {
            $result['play_over_rate'] = $this->playOverRate;
        }
        if ($this->prepayAndPayOrderRoi !== null) {
            $result['prepay_and_pay_order_roi'] = $this->prepayAndPayOrderRoi;
        }
        if ($this->prepayOrderAmount !== null) {
            $result['prepay_order_amount'] = $this->prepayOrderAmount;
        }
        if ($this->prepayOrderCount !== null) {
            $result['prepay_order_count'] = $this->prepayOrderCount;
        }
        if ($this->qianchuanAuthorFirstOrderCnt !== null) {
            $result['qianchuan_author_first_order_cnt'] = $this->qianchuanAuthorFirstOrderCnt;
        }
        if ($this->qianchuanAuthorFirstOrderConvertCost !== null) {
            $result['qianchuan_author_first_order_convert_cost'] = $this->qianchuanAuthorFirstOrderConvertCost;
        }
        if ($this->qianchuanAuthorFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_author_first_order_direct_pay_gmv'] = $this->qianchuanAuthorFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanAuthorFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_author_first_order_direct_pay_order_roi'] = $this->qianchuanAuthorFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanAuthorFirstOrderLtv30 !== null) {
            $result['qianchuan_author_first_order_ltv30'] = $this->qianchuanAuthorFirstOrderLtv30;
        }
        if ($this->qianchuanAuthorFirstOrderRate !== null) {
            $result['qianchuan_author_first_order_rate'] = $this->qianchuanAuthorFirstOrderRate;
        }
        if ($this->qianchuanAuthorFirstOrderRoi30 !== null) {
            $result['qianchuan_author_first_order_roi30'] = $this->qianchuanAuthorFirstOrderRoi30;
        }
        if ($this->qianchuanBrandFirstOrderCnt !== null) {
            $result['qianchuan_brand_first_order_cnt'] = $this->qianchuanBrandFirstOrderCnt;
        }
        if ($this->qianchuanBrandFirstOrderConvertCost !== null) {
            $result['qianchuan_brand_first_order_convert_cost'] = $this->qianchuanBrandFirstOrderConvertCost;
        }
        if ($this->qianchuanBrandFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_brand_first_order_direct_pay_gmv'] = $this->qianchuanBrandFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanBrandFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_brand_first_order_direct_pay_order_roi'] = $this->qianchuanBrandFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanBrandFirstOrderLtv30 !== null) {
            $result['qianchuan_brand_first_order_ltv30'] = $this->qianchuanBrandFirstOrderLtv30;
        }
        if ($this->qianchuanBrandFirstOrderRate !== null) {
            $result['qianchuan_brand_first_order_rate'] = $this->qianchuanBrandFirstOrderRate;
        }
        if ($this->qianchuanBrandFirstOrderRoi30 !== null) {
            $result['qianchuan_brand_first_order_roi30'] = $this->qianchuanBrandFirstOrderRoi30;
        }
        if ($this->qianchuanFirstOrderCnt !== null) {
            $result['qianchuan_first_order_cnt'] = $this->qianchuanFirstOrderCnt;
        }
        if ($this->qianchuanFirstOrderConvertCost !== null) {
            $result['qianchuan_first_order_convert_cost'] = $this->qianchuanFirstOrderConvertCost;
        }
        if ($this->qianchuanFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_first_order_direct_pay_gmv'] = $this->qianchuanFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_first_order_direct_pay_order_roi'] = $this->qianchuanFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanFirstOrderLtv30 !== null) {
            $result['qianchuan_first_order_ltv30'] = $this->qianchuanFirstOrderLtv30;
        }
        if ($this->qianchuanFirstOrderRate !== null) {
            $result['qianchuan_first_order_rate'] = $this->qianchuanFirstOrderRate;
        }
        if ($this->qianchuanFirstOrderRoi30 !== null) {
            $result['qianchuan_first_order_roi30'] = $this->qianchuanFirstOrderRoi30;
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
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->unfinishedEstimateOrderGmv !== null) {
            $result['unfinished_estimate_order_gmv'] = $this->unfinishedEstimateOrderGmv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_all_order_count_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderCountSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_count_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderCountSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_amount_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleAmount14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_amount_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleAmount7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_cost_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleCost14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_cost_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleCost7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_count_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleCount14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_count_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleCount7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_roi_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleRoi14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_roi_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleRoi7d = (float) $v;
        }
        if (($v = $data['ad_order_gmv_refund_rate_14d'] ?? null) !== null) {
            $obj->adOrderGmvRefundRate14d = (float) $v;
        }
        if (($v = $data['ad_order_gmv_refund_rate_7d'] ?? null) !== null) {
            $obj->adOrderGmvRefundRate7d = (float) $v;
        }
        if (($v = $data['ad_order_refund_rate_14d'] ?? null) !== null) {
            $obj->adOrderRefundRate14d = (float) $v;
        }
        if (($v = $data['ad_order_refund_rate_7d'] ?? null) !== null) {
            $obj->adOrderRefundRate7d = (float) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['all_order_create_roi_7days'] ?? null) !== null) {
            $obj->allOrderCreateRoi7days = (float) $v;
        }
        if (($v = $data['all_order_pay_count_7days'] ?? null) !== null) {
            $obj->allOrderPayCount7days = (float) $v;
        }
        if (($v = $data['all_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->allOrderPayGmv7days = (float) $v;
        }
        if (($v = $data['all_order_pay_roi_7days'] ?? null) !== null) {
            $obj->allOrderPayRoi7days = (float) $v;
        }
        if (($v = $data['all_order_refund_amount_14d'] ?? null) !== null) {
            $obj->allOrderRefundAmount14d = (float) $v;
        }
        if (($v = $data['all_order_refund_amount_7d'] ?? null) !== null) {
            $obj->allOrderRefundAmount7d = (float) $v;
        }
        if (($v = $data['all_order_refund_count_14d'] ?? null) !== null) {
            $obj->allOrderRefundCount14d = (float) $v;
        }
        if (($v = $data['all_order_refund_count_7d'] ?? null) !== null) {
            $obj->allOrderRefundCount7d = (float) $v;
        }
        if (($v = $data['attribution_convert_cnt'] ?? null) !== null) {
            $obj->attributionConvertCnt = (float) $v;
        }
        if (($v = $data['attribution_convert_cost'] ?? null) !== null) {
            $obj->attributionConvertCost = (float) $v;
        }
        if (($v = $data['attribution_convert_rate'] ?? null) !== null) {
            $obj->attributionConvertRate = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_cnt'] ?? null) !== null) {
            $obj->attributionDeepConvertCnt = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_cost'] ?? null) !== null) {
            $obj->attributionDeepConvertCost = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_rate'] ?? null) !== null) {
            $obj->attributionDeepConvertRate = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (float) $v;
        }
        if (($v = $data['convert_cost'] ?? null) !== null) {
            $obj->convertCost = (float) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['cpc_platform'] ?? null) !== null) {
            $obj->cpcPlatform = (float) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (float) $v;
        }
        if (($v = $data['create_order_amount'] ?? null) !== null) {
            $obj->createOrderAmount = (float) $v;
        }
        if (($v = $data['create_order_count'] ?? null) !== null) {
            $obj->createOrderCount = (float) $v;
        }
        if (($v = $data['create_order_coupon_amount'] ?? null) !== null) {
            $obj->createOrderCouponAmount = (float) $v;
        }
        if (($v = $data['create_order_roi'] ?? null) !== null) {
            $obj->createOrderRoi = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['deep_convert_cnt'] ?? null) !== null) {
            $obj->deepConvertCnt = (float) $v;
        }
        if (($v = $data['deep_convert_cost'] ?? null) !== null) {
            $obj->deepConvertCost = (float) $v;
        }
        if (($v = $data['deep_convert_rate'] ?? null) !== null) {
            $obj->deepConvertRate = (float) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (float) $v;
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
        if (($v = $data['indirect_order_create_count_7days'] ?? null) !== null) {
            $obj->indirectOrderCreateCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_create_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderCreateGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_pay_count_7days'] ?? null) !== null) {
            $obj->indirectOrderPayCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderPayGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_prepay_count_7days'] ?? null) !== null) {
            $obj->indirectOrderPrepayCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_prepay_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderPrepayGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_unfinished_estimate_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderUnfinishedEstimateGmv7days = (int) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrder = (float) $v;
        }
        if (($v = $data['luban_live_click_product_cnt'] ?? null) !== null) {
            $obj->lubanLiveClickProductCnt = (float) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (float) $v;
        }
        if (($v = $data['pay_order_amount'] ?? null) !== null) {
            $obj->payOrderAmount = (float) $v;
        }
        if (($v = $data['pay_order_cost_per_order'] ?? null) !== null) {
            $obj->payOrderCostPerOrder = (float) $v;
        }
        if (($v = $data['pay_order_count'] ?? null) !== null) {
            $obj->payOrderCount = (float) $v;
        }
        if (($v = $data['pay_order_coupon_amount'] ?? null) !== null) {
            $obj->payOrderCouponAmount = (float) $v;
        }
        if (($v = $data['play_25_feed_break'] ?? null) !== null) {
            $obj->play25FeedBreak = (float) $v;
        }
        if (($v = $data['play_50_feed_break'] ?? null) !== null) {
            $obj->play50FeedBreak = (float) $v;
        }
        if (($v = $data['play_75_feed_break'] ?? null) !== null) {
            $obj->play75FeedBreak = (float) $v;
        }
        if (($v = $data['play_duration_3s'] ?? null) !== null) {
            $obj->playDuration3s = (float) $v;
        }
        if (($v = $data['play_over'] ?? null) !== null) {
            $obj->playOver = (float) $v;
        }
        if (($v = $data['play_over_rate'] ?? null) !== null) {
            $obj->playOverRate = (float) $v;
        }
        if (($v = $data['prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->prepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['prepay_order_amount'] ?? null) !== null) {
            $obj->prepayOrderAmount = (float) $v;
        }
        if (($v = $data['prepay_order_count'] ?? null) !== null) {
            $obj->prepayOrderCount = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderCnt = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderRoi30 = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderCnt = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderRoi30 = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanFirstOrderCnt = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanFirstOrderRoi30 = (float) $v;
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
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (float) $v;
        }
        if (($v = $data['unfinished_estimate_order_gmv'] ?? null) !== null) {
            $obj->unfinishedEstimateOrderGmv = (int) $v;
        }
        return $obj;
    }
}
