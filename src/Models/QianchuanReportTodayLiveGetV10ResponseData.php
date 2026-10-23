<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportTodayLiveGetV10ResponseData implements \JsonSerializable
{
    /**
     * 广告直接成交金额结算率(14天)，广告有效触达用户后成交且未来14天内未退款的成交金额占比，公式：广告直接结算金额 （14天） /广告直接成交金额，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate14d = null;

    /**
     * 广告直接成交金额结算率(7天)，广告有效触达后成交且未来7天内未退款的成交金额占比（直接结算金额（7天）/直接成交金额*100%）（在最近7日内，该数据会存在波动情况，7日后，该数据稳定不变）
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate7d = null;

    /**
     * 广告下单率，广告引导至直播间的下单数占广告点击次数的百分比
     * @var float
     */
    protected ?float $adLiveCreateOrderRate = null;

    /**
     * 广告直接结算成本（14天） 计算公式：消耗/直接结算订单数（14天），注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @var float
     */
    protected ?float $adLiveOrderSettleCost14d = null;

    /**
     * 广告直接结算成本（7天） 计算公式：消耗/直接结算订单数（7天），注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @var float
     */
    protected ?float $adLiveOrderSettleCost7d = null;

    /**
     * 广告直接结算ROI（14天），直接结算ROI（14天）=（未完结直接预售订单预估金额 + 智能成交优惠券金额 + 直接结算金额（14天）- 智能优惠券退款金额）/消耗，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变；\n直接结算金额（14天）为广告有效触达用户直接成交后，且未来14天内未退款的结算金额。
     * @var float
     */
    protected ?float $adLiveOrderSettleRoi14d = null;

    /**
     * 广告直接结算ROI（7天），直接结算ROI（7天）=（未完结直接预售订单预估金额+智能成交优惠券金额 +直接结算金额(7天) - 智能优惠券退款金额）/消耗；注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变；\n直接结算金额（7天）为广告有效触达用户直接成交后，且未来7天内未退款的结算金额。
     * @var float
     */
    protected ?float $adLiveOrderSettleRoi7d = null;

    /**
     * 广告平均成单金额，广告引导至直播间的成交金额/广告引导至直播间的成交订单数
     * @var float
     */
    protected ?float $adLivePayOrderGmvAvg = null;

    /**
     * 广告成单率，广告引导至直播间的成功支付订单数占广告点击次数的百分比
     * @var float
     */
    protected ?float $adLivePayOrderRate = null;

    /**
     * 广告支付ROI 1、广告支付ROI=（广告成交金额+成交智能优惠券金额）/消耗 2、特殊情况（存在预售订单），广告支付ROI=（广告成交金额+广告未完结直接预售订单预估金额+成交智能优惠券金额）/消耗
     * @var float
     */
    protected ?float $adLivePrepayAndPayOrderGmvRoi = null;

    /**
     * 广告点击次数，点击广告进入商品落地页或点击进入直播间的次数
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * 广告点击单价，广告主为每次点击付出的费用成本 计算公式是：总花费/点击数
     * @var float
     */
    protected ?float $cpcPlatform = null;

    /**
     * 平均千次展现费用，广告平均每一千次展现的费用 计算公式是：总花费/展示数*1000
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * 广告点击率，广告素材被点击的次数占展示次数的百分比 计算公式：点击次数/展示次数*100%
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 广告转化数，设置的广告优化目标的转化数，如优化目标为直播间商品点击，转化数则为直播间商品点击人数；优化目标为直播间下单，转化数则为直播间下单人数；优化目标为直播间成交，转化数则为直播间成交人数
     * @var float
     */
    protected ?float $ecpConvertCnt = null;

    /**
     * 广告转化率，广告转化数/广告被用户点击的次数，反应计划转化能力
     * @var float
     */
    protected ?float $ecpConvertRate = null;

    /**
     * 广告转化成本，平均每个转化的广告消耗 计算公式：消耗/广告转化数
     * @var float
     */
    protected ?float $ecpCpaPlatform = null;

    /**
     * 直播间整体查看购物车次数，用户在您直播间点击查看购物车的次数（包含自然+广告）
     * @var int
     */
    protected ?int $liveClickCartCountAlias = null;

    /**
     * 直播间整体商品点击次数，用户在您直播间点击商品的次数（包含自然+广告）
     * @var int
     */
    protected ?int $liveClickProductCountAlias = null;

    /**
     * 整体下单数，用户在您直播间，成功下单的订单数（包含自然+广告）
     * @var int
     */
    protected ?int $liveCreateOrderCountAlias = null;

    /**
     * 整体下单率，直播间整体下单订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据
     * @var float
     */
    protected ?float $liveCreateOrderRate = null;

    /**
     * 成交智能优惠券金额，使用「智能优惠券」投放功能后，成交订单中的优惠券金额
     * @var float
     */
    protected ?float $liveOrderPayCouponAmount = null;

    /**
     * 广告直接退款金额(14天)，直接成交金额中，未来14天内产生的退款金额
     * @var float
     */
    protected ?float $liveOrderRefundAmount14d = null;

    /**
     * 广告直接退款金额(7天)，直接成交金额中，未来7天内产生的退款金额
     * @var float
     */
    protected ?float $liveOrderRefundAmount7d = null;

    /**
     * 广告直接退款订单数(14天)，直接成交订单数中，未来14天内产生的退款订单数
     * @var int
     */
    protected ?int $liveOrderRefundCount14d = null;

    /**
     * 广告直接退款订单数（7天），广告直接成交订单数中，未来7天内产生的退款订单数
     * @var int
     */
    protected ?int $liveOrderRefundCount7d = null;

    /**
     * 广告直接结算金额（14天），广告有效触达用户产生直接成交金额后，且未来14天内未退款的结算金额（直接成交金额-未来14天内的退款金额）
     * @var float
     */
    protected ?float $liveOrderSettleAmount14d = null;

    /**
     * 广告直接结算金额（7天），广告有效触达用户产生直接成交金额后，且未来7天内未退款的结算金额（直接成交金额-未来7天内的退款金额）
     * @var float
     */
    protected ?float $liveOrderSettleAmount7d = null;

    /**
     * 广告直接结算订单数（14天），广告有效触达用户产生直接成交订单后，且未来14天内未退款的结算订单数（直接成交订单数-未来14天内的退款订单数）
     * @var int
     */
    protected ?int $liveOrderSettleCount14d = null;

    /**
     * 广告直接结算订单数（7天），广告有效触达用户产生直接成交订单后，且未来7天内未退款的结算订单数（直接成交订单数-未来7天内的退款订单数）
     * @var int
     */
    protected ?int $liveOrderSettleCount7d = null;

    /**
     * 广告直接订单结算率（14天），广告有效触达用户后成交且未来14天内未退款的订单数的百分比，公式：广告直接结算订单数（14天）/广告直接成交订单数*100%，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @var float
     */
    protected ?float $liveOrderSettleCountRate14d = null;

    /**
     * 广告直接订单结算率（7天），广告有效触达用户后成交且未来7天内未退款的订单数的百分比 计算公式：广告直接结算订单数（7天）/广告直接成交订单数*100%，注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @var float
     */
    protected ?float $liveOrderSettleCountRate7d = null;

    /**
     * 整体成单数，用户在您直播间，支付成功的订单数（包含自然+广告）
     * @var int
     */
    protected ?int $livePayOrderCountAlias = null;

    /**
     * 整体成交金额，直播间总成交金额（包含自然+广告）
     * @var float
     */
    protected ?float $livePayOrderGmvAlias = null;

    /**
     * 直播间平均成单金额，直播间支付订单的平均金额 计算公式：直播间支付订单金额/支付订单数（包含自然+广告）
     * @var float
     */
    protected ?float $livePayOrderGmvAvg = null;

    /**
     * 整体支付ROI，直播间整体支付ROI=（累计成交金额和预售金额+成交智能优惠券金额）/消耗；累计成交金额和预售金额来自于直播间整体（包含自然+广告），消耗来自于直客同主体的账户 仅支持直客广告主的官方/自运营抖音号
     * @var float
     */
    protected ?float $livePayOrderGmvRoi = null;

    /**
     * 整体成单率，直播间整体支付成功的订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据 仅支持直客广告主的官方/自运营抖音号
     * @var float
     */
    protected ?float $livePayOrderRate = null;

    /**
     * 整体预售订单数，直播整体的已支付预售定金的预售类订单数量（包含自然+广告）
     * @var float
     */
    protected ?float $livePrepayOrderCountAlias = null;

    /**
     * 整体预售订单金额，直播整体的已支付定金的预售类订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @var float
     */
    protected ?float $livePrepayOrderGmvAlias = null;

    /**
     * 直播间超过1分钟观看人次，广告带来的用户在您直播间单次观看时长超过1分钟人数
     * @var int
     */
    protected ?int $liveWatchOneMinuteCount = null;

    /**
     * 广告下单数，广告引导至直播间的下单数
     * @var int
     */
    protected ?int $lubanLiveOrderCount = null;

    /**
     * 广告成单数，广告引导至直播间的成功支付订单数
     * @var int
     */
    protected ?int $lubanLivePayOrderCount = null;

    /**
     * 广告成交金额，广告引导至直播间的成交金额
     * @var float
     */
    protected ?float $lubanLivePayOrderGmv = null;

    /**
     * 广告GPM，广告引导至直播间千次观看成交金额 计算公式：直播间广告成交金额/直播间广告进入次数*1000
     * @var float
     */
    protected ?float $lubanLivePayOrderGpm = null;

    /**
     * 广告预售订单数，广告带来已支付预售定金的预售类订单数量
     * @var int
     */
    protected ?int $lubanLivePrepayOrderCount = null;

    /**
     * 广告预售订单金额，广告带来的已支付定金的订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @var float
     */
    protected ?float $lubanLivePrepayOrderGmv = null;

    /**
     * 整体消耗，投放期间的全部广告消耗，数据来自与直客同主体的多个广告账户
     * @var float
     */
    protected ?float $qualificationStatCost = null;

    /**
     * 消耗，广告投放期间的消耗，当天数据会有波动，次日稳定
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 直播间整体评论次数，用户在您直播间输入评论并点击发送消息的次数（包含自然+广告）
     * @var int
     */
    protected ?int $totalLiveCommentCnt = null;

    /**
     * 直播间整体加团次数，用户在您直播间成功加入粉丝团的次数（包含自然+广告）
     * @var int
     */
    protected ?int $totalLiveFansClubJoinCnt = null;

    /**
     * 直播间整体新增粉丝数，直播间新增的关注数（包含自然+广告），注：该数据未去重，包含解除关注后又重新关注情况，每次关注均会记录一次
     * @var int
     */
    protected ?int $totalLiveFollowCnt = null;

    /**
     * 直播间整体音浪收入，用户在您直播间打赏的总音浪数（包含自然+广告）
     * @var float
     */
    protected ?float $totalLiveGiftAmount = null;

    /**
     * 直播间整体打赏次数，用户在您直播间成功打赏的次数（包含自然+广告）
     * @var int
     */
    protected ?int $totalLiveGiftCnt = null;

    /**
     * GPM，直播间千次观看成交金额 计算公式：直播间整体成交金额/直播间整体进入次数*1000
     * @var float
     */
    protected ?float $totalLivePayOrderGpm = null;

    /**
     * 直播间整体分享次数，用户在您直播间点击分享的次数（包含自然+广告）
     * @var int
     */
    protected ?int $totalLiveShareCnt = null;

    /**
     * 直播间观看人次，用户进入您直播间的次数（包含自然+广告）
     * @var int
     */
    protected ?int $totalLiveWatchCnt = null;

    /**
     * 广告直接成交金额结算率(14天)，广告有效触达用户后成交且未来14天内未退款的成交金额占比，公式：广告直接结算金额 （14天） /广告直接成交金额，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @return float
     */
    public function getAdAllOrderGmvSettleRate14d(): ?float
    {
        return $this->adAllOrderGmvSettleRate14d;
    }

    /**
     * 广告直接成交金额结算率(14天)，广告有效触达用户后成交且未来14天内未退款的成交金额占比，公式：广告直接结算金额 （14天） /广告直接成交金额，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @param float $adAllOrderGmvSettleRate14d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate14d(?float $adAllOrderGmvSettleRate14d): self
    {
        $this->adAllOrderGmvSettleRate14d = $adAllOrderGmvSettleRate14d;
        return $this;
    }

    /**
     * 广告直接成交金额结算率(7天)，广告有效触达后成交且未来7天内未退款的成交金额占比（直接结算金额（7天）/直接成交金额*100%）（在最近7日内，该数据会存在波动情况，7日后，该数据稳定不变）
     * @return float
     */
    public function getAdAllOrderGmvSettleRate7d(): ?float
    {
        return $this->adAllOrderGmvSettleRate7d;
    }

    /**
     * 广告直接成交金额结算率(7天)，广告有效触达后成交且未来7天内未退款的成交金额占比（直接结算金额（7天）/直接成交金额*100%）（在最近7日内，该数据会存在波动情况，7日后，该数据稳定不变）
     * @param float $adAllOrderGmvSettleRate7d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate7d(?float $adAllOrderGmvSettleRate7d): self
    {
        $this->adAllOrderGmvSettleRate7d = $adAllOrderGmvSettleRate7d;
        return $this;
    }

    /**
     * 广告下单率，广告引导至直播间的下单数占广告点击次数的百分比
     * @return float
     */
    public function getAdLiveCreateOrderRate(): ?float
    {
        return $this->adLiveCreateOrderRate;
    }

    /**
     * 广告下单率，广告引导至直播间的下单数占广告点击次数的百分比
     * @param float $adLiveCreateOrderRate
     * @return self
     */
    public function setAdLiveCreateOrderRate(?float $adLiveCreateOrderRate): self
    {
        $this->adLiveCreateOrderRate = $adLiveCreateOrderRate;
        return $this;
    }

    /**
     * 广告直接结算成本（14天） 计算公式：消耗/直接结算订单数（14天），注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @return float
     */
    public function getAdLiveOrderSettleCost14d(): ?float
    {
        return $this->adLiveOrderSettleCost14d;
    }

    /**
     * 广告直接结算成本（14天） 计算公式：消耗/直接结算订单数（14天），注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @param float $adLiveOrderSettleCost14d
     * @return self
     */
    public function setAdLiveOrderSettleCost14d(?float $adLiveOrderSettleCost14d): self
    {
        $this->adLiveOrderSettleCost14d = $adLiveOrderSettleCost14d;
        return $this;
    }

    /**
     * 广告直接结算成本（7天） 计算公式：消耗/直接结算订单数（7天），注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @return float
     */
    public function getAdLiveOrderSettleCost7d(): ?float
    {
        return $this->adLiveOrderSettleCost7d;
    }

    /**
     * 广告直接结算成本（7天） 计算公式：消耗/直接结算订单数（7天），注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @param float $adLiveOrderSettleCost7d
     * @return self
     */
    public function setAdLiveOrderSettleCost7d(?float $adLiveOrderSettleCost7d): self
    {
        $this->adLiveOrderSettleCost7d = $adLiveOrderSettleCost7d;
        return $this;
    }

    /**
     * 广告直接结算ROI（14天），直接结算ROI（14天）=（未完结直接预售订单预估金额 + 智能成交优惠券金额 + 直接结算金额（14天）- 智能优惠券退款金额）/消耗，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变；\n直接结算金额（14天）为广告有效触达用户直接成交后，且未来14天内未退款的结算金额。
     * @return float
     */
    public function getAdLiveOrderSettleRoi14d(): ?float
    {
        return $this->adLiveOrderSettleRoi14d;
    }

    /**
     * 广告直接结算ROI（14天），直接结算ROI（14天）=（未完结直接预售订单预估金额 + 智能成交优惠券金额 + 直接结算金额（14天）- 智能优惠券退款金额）/消耗，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变；\n直接结算金额（14天）为广告有效触达用户直接成交后，且未来14天内未退款的结算金额。
     * @param float $adLiveOrderSettleRoi14d
     * @return self
     */
    public function setAdLiveOrderSettleRoi14d(?float $adLiveOrderSettleRoi14d): self
    {
        $this->adLiveOrderSettleRoi14d = $adLiveOrderSettleRoi14d;
        return $this;
    }

    /**
     * 广告直接结算ROI（7天），直接结算ROI（7天）=（未完结直接预售订单预估金额+智能成交优惠券金额 +直接结算金额(7天) - 智能优惠券退款金额）/消耗；注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变；\n直接结算金额（7天）为广告有效触达用户直接成交后，且未来7天内未退款的结算金额。
     * @return float
     */
    public function getAdLiveOrderSettleRoi7d(): ?float
    {
        return $this->adLiveOrderSettleRoi7d;
    }

    /**
     * 广告直接结算ROI（7天），直接结算ROI（7天）=（未完结直接预售订单预估金额+智能成交优惠券金额 +直接结算金额(7天) - 智能优惠券退款金额）/消耗；注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变；\n直接结算金额（7天）为广告有效触达用户直接成交后，且未来7天内未退款的结算金额。
     * @param float $adLiveOrderSettleRoi7d
     * @return self
     */
    public function setAdLiveOrderSettleRoi7d(?float $adLiveOrderSettleRoi7d): self
    {
        $this->adLiveOrderSettleRoi7d = $adLiveOrderSettleRoi7d;
        return $this;
    }

    /**
     * 广告平均成单金额，广告引导至直播间的成交金额/广告引导至直播间的成交订单数
     * @return float
     */
    public function getAdLivePayOrderGmvAvg(): ?float
    {
        return $this->adLivePayOrderGmvAvg;
    }

    /**
     * 广告平均成单金额，广告引导至直播间的成交金额/广告引导至直播间的成交订单数
     * @param float $adLivePayOrderGmvAvg
     * @return self
     */
    public function setAdLivePayOrderGmvAvg(?float $adLivePayOrderGmvAvg): self
    {
        $this->adLivePayOrderGmvAvg = $adLivePayOrderGmvAvg;
        return $this;
    }

    /**
     * 广告成单率，广告引导至直播间的成功支付订单数占广告点击次数的百分比
     * @return float
     */
    public function getAdLivePayOrderRate(): ?float
    {
        return $this->adLivePayOrderRate;
    }

    /**
     * 广告成单率，广告引导至直播间的成功支付订单数占广告点击次数的百分比
     * @param float $adLivePayOrderRate
     * @return self
     */
    public function setAdLivePayOrderRate(?float $adLivePayOrderRate): self
    {
        $this->adLivePayOrderRate = $adLivePayOrderRate;
        return $this;
    }

    /**
     * 广告支付ROI 1、广告支付ROI=（广告成交金额+成交智能优惠券金额）/消耗 2、特殊情况（存在预售订单），广告支付ROI=（广告成交金额+广告未完结直接预售订单预估金额+成交智能优惠券金额）/消耗
     * @return float
     */
    public function getAdLivePrepayAndPayOrderGmvRoi(): ?float
    {
        return $this->adLivePrepayAndPayOrderGmvRoi;
    }

    /**
     * 广告支付ROI 1、广告支付ROI=（广告成交金额+成交智能优惠券金额）/消耗 2、特殊情况（存在预售订单），广告支付ROI=（广告成交金额+广告未完结直接预售订单预估金额+成交智能优惠券金额）/消耗
     * @param float $adLivePrepayAndPayOrderGmvRoi
     * @return self
     */
    public function setAdLivePrepayAndPayOrderGmvRoi(?float $adLivePrepayAndPayOrderGmvRoi): self
    {
        $this->adLivePrepayAndPayOrderGmvRoi = $adLivePrepayAndPayOrderGmvRoi;
        return $this;
    }

    /**
     * 广告点击次数，点击广告进入商品落地页或点击进入直播间的次数
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * 广告点击次数，点击广告进入商品落地页或点击进入直播间的次数
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 广告点击单价，广告主为每次点击付出的费用成本 计算公式是：总花费/点击数
     * @return float
     */
    public function getCpcPlatform(): ?float
    {
        return $this->cpcPlatform;
    }

    /**
     * 广告点击单价，广告主为每次点击付出的费用成本 计算公式是：总花费/点击数
     * @param float $cpcPlatform
     * @return self
     */
    public function setCpcPlatform(?float $cpcPlatform): self
    {
        $this->cpcPlatform = $cpcPlatform;
        return $this;
    }

    /**
     * 平均千次展现费用，广告平均每一千次展现的费用 计算公式是：总花费/展示数*1000
     * @return float
     */
    public function getCpmPlatform(): ?float
    {
        return $this->cpmPlatform;
    }

    /**
     * 平均千次展现费用，广告平均每一千次展现的费用 计算公式是：总花费/展示数*1000
     * @param float $cpmPlatform
     * @return self
     */
    public function setCpmPlatform(?float $cpmPlatform): self
    {
        $this->cpmPlatform = $cpmPlatform;
        return $this;
    }

    /**
     * 广告点击率，广告素材被点击的次数占展示次数的百分比 计算公式：点击次数/展示次数*100%
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * 广告点击率，广告素材被点击的次数占展示次数的百分比 计算公式：点击次数/展示次数*100%
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 广告转化数，设置的广告优化目标的转化数，如优化目标为直播间商品点击，转化数则为直播间商品点击人数；优化目标为直播间下单，转化数则为直播间下单人数；优化目标为直播间成交，转化数则为直播间成交人数
     * @return float
     */
    public function getEcpConvertCnt(): ?float
    {
        return $this->ecpConvertCnt;
    }

    /**
     * 广告转化数，设置的广告优化目标的转化数，如优化目标为直播间商品点击，转化数则为直播间商品点击人数；优化目标为直播间下单，转化数则为直播间下单人数；优化目标为直播间成交，转化数则为直播间成交人数
     * @param float $ecpConvertCnt
     * @return self
     */
    public function setEcpConvertCnt(?float $ecpConvertCnt): self
    {
        $this->ecpConvertCnt = $ecpConvertCnt;
        return $this;
    }

    /**
     * 广告转化率，广告转化数/广告被用户点击的次数，反应计划转化能力
     * @return float
     */
    public function getEcpConvertRate(): ?float
    {
        return $this->ecpConvertRate;
    }

    /**
     * 广告转化率，广告转化数/广告被用户点击的次数，反应计划转化能力
     * @param float $ecpConvertRate
     * @return self
     */
    public function setEcpConvertRate(?float $ecpConvertRate): self
    {
        $this->ecpConvertRate = $ecpConvertRate;
        return $this;
    }

    /**
     * 广告转化成本，平均每个转化的广告消耗 计算公式：消耗/广告转化数
     * @return float
     */
    public function getEcpCpaPlatform(): ?float
    {
        return $this->ecpCpaPlatform;
    }

    /**
     * 广告转化成本，平均每个转化的广告消耗 计算公式：消耗/广告转化数
     * @param float $ecpCpaPlatform
     * @return self
     */
    public function setEcpCpaPlatform(?float $ecpCpaPlatform): self
    {
        $this->ecpCpaPlatform = $ecpCpaPlatform;
        return $this;
    }

    /**
     * 直播间整体查看购物车次数，用户在您直播间点击查看购物车的次数（包含自然+广告）
     * @return int
     */
    public function getLiveClickCartCountAlias(): ?int
    {
        return $this->liveClickCartCountAlias;
    }

    /**
     * 直播间整体查看购物车次数，用户在您直播间点击查看购物车的次数（包含自然+广告）
     * @param int $liveClickCartCountAlias
     * @return self
     */
    public function setLiveClickCartCountAlias(?int $liveClickCartCountAlias): self
    {
        $this->liveClickCartCountAlias = $liveClickCartCountAlias;
        return $this;
    }

    /**
     * 直播间整体商品点击次数，用户在您直播间点击商品的次数（包含自然+广告）
     * @return int
     */
    public function getLiveClickProductCountAlias(): ?int
    {
        return $this->liveClickProductCountAlias;
    }

    /**
     * 直播间整体商品点击次数，用户在您直播间点击商品的次数（包含自然+广告）
     * @param int $liveClickProductCountAlias
     * @return self
     */
    public function setLiveClickProductCountAlias(?int $liveClickProductCountAlias): self
    {
        $this->liveClickProductCountAlias = $liveClickProductCountAlias;
        return $this;
    }

    /**
     * 整体下单数，用户在您直播间，成功下单的订单数（包含自然+广告）
     * @return int
     */
    public function getLiveCreateOrderCountAlias(): ?int
    {
        return $this->liveCreateOrderCountAlias;
    }

    /**
     * 整体下单数，用户在您直播间，成功下单的订单数（包含自然+广告）
     * @param int $liveCreateOrderCountAlias
     * @return self
     */
    public function setLiveCreateOrderCountAlias(?int $liveCreateOrderCountAlias): self
    {
        $this->liveCreateOrderCountAlias = $liveCreateOrderCountAlias;
        return $this;
    }

    /**
     * 整体下单率，直播间整体下单订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据
     * @return float
     */
    public function getLiveCreateOrderRate(): ?float
    {
        return $this->liveCreateOrderRate;
    }

    /**
     * 整体下单率，直播间整体下单订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据
     * @param float $liveCreateOrderRate
     * @return self
     */
    public function setLiveCreateOrderRate(?float $liveCreateOrderRate): self
    {
        $this->liveCreateOrderRate = $liveCreateOrderRate;
        return $this;
    }

    /**
     * 成交智能优惠券金额，使用「智能优惠券」投放功能后，成交订单中的优惠券金额
     * @return float
     */
    public function getLiveOrderPayCouponAmount(): ?float
    {
        return $this->liveOrderPayCouponAmount;
    }

    /**
     * 成交智能优惠券金额，使用「智能优惠券」投放功能后，成交订单中的优惠券金额
     * @param float $liveOrderPayCouponAmount
     * @return self
     */
    public function setLiveOrderPayCouponAmount(?float $liveOrderPayCouponAmount): self
    {
        $this->liveOrderPayCouponAmount = $liveOrderPayCouponAmount;
        return $this;
    }

    /**
     * 广告直接退款金额(14天)，直接成交金额中，未来14天内产生的退款金额
     * @return float
     */
    public function getLiveOrderRefundAmount14d(): ?float
    {
        return $this->liveOrderRefundAmount14d;
    }

    /**
     * 广告直接退款金额(14天)，直接成交金额中，未来14天内产生的退款金额
     * @param float $liveOrderRefundAmount14d
     * @return self
     */
    public function setLiveOrderRefundAmount14d(?float $liveOrderRefundAmount14d): self
    {
        $this->liveOrderRefundAmount14d = $liveOrderRefundAmount14d;
        return $this;
    }

    /**
     * 广告直接退款金额(7天)，直接成交金额中，未来7天内产生的退款金额
     * @return float
     */
    public function getLiveOrderRefundAmount7d(): ?float
    {
        return $this->liveOrderRefundAmount7d;
    }

    /**
     * 广告直接退款金额(7天)，直接成交金额中，未来7天内产生的退款金额
     * @param float $liveOrderRefundAmount7d
     * @return self
     */
    public function setLiveOrderRefundAmount7d(?float $liveOrderRefundAmount7d): self
    {
        $this->liveOrderRefundAmount7d = $liveOrderRefundAmount7d;
        return $this;
    }

    /**
     * 广告直接退款订单数(14天)，直接成交订单数中，未来14天内产生的退款订单数
     * @return int
     */
    public function getLiveOrderRefundCount14d(): ?int
    {
        return $this->liveOrderRefundCount14d;
    }

    /**
     * 广告直接退款订单数(14天)，直接成交订单数中，未来14天内产生的退款订单数
     * @param int $liveOrderRefundCount14d
     * @return self
     */
    public function setLiveOrderRefundCount14d(?int $liveOrderRefundCount14d): self
    {
        $this->liveOrderRefundCount14d = $liveOrderRefundCount14d;
        return $this;
    }

    /**
     * 广告直接退款订单数（7天），广告直接成交订单数中，未来7天内产生的退款订单数
     * @return int
     */
    public function getLiveOrderRefundCount7d(): ?int
    {
        return $this->liveOrderRefundCount7d;
    }

    /**
     * 广告直接退款订单数（7天），广告直接成交订单数中，未来7天内产生的退款订单数
     * @param int $liveOrderRefundCount7d
     * @return self
     */
    public function setLiveOrderRefundCount7d(?int $liveOrderRefundCount7d): self
    {
        $this->liveOrderRefundCount7d = $liveOrderRefundCount7d;
        return $this;
    }

    /**
     * 广告直接结算金额（14天），广告有效触达用户产生直接成交金额后，且未来14天内未退款的结算金额（直接成交金额-未来14天内的退款金额）
     * @return float
     */
    public function getLiveOrderSettleAmount14d(): ?float
    {
        return $this->liveOrderSettleAmount14d;
    }

    /**
     * 广告直接结算金额（14天），广告有效触达用户产生直接成交金额后，且未来14天内未退款的结算金额（直接成交金额-未来14天内的退款金额）
     * @param float $liveOrderSettleAmount14d
     * @return self
     */
    public function setLiveOrderSettleAmount14d(?float $liveOrderSettleAmount14d): self
    {
        $this->liveOrderSettleAmount14d = $liveOrderSettleAmount14d;
        return $this;
    }

    /**
     * 广告直接结算金额（7天），广告有效触达用户产生直接成交金额后，且未来7天内未退款的结算金额（直接成交金额-未来7天内的退款金额）
     * @return float
     */
    public function getLiveOrderSettleAmount7d(): ?float
    {
        return $this->liveOrderSettleAmount7d;
    }

    /**
     * 广告直接结算金额（7天），广告有效触达用户产生直接成交金额后，且未来7天内未退款的结算金额（直接成交金额-未来7天内的退款金额）
     * @param float $liveOrderSettleAmount7d
     * @return self
     */
    public function setLiveOrderSettleAmount7d(?float $liveOrderSettleAmount7d): self
    {
        $this->liveOrderSettleAmount7d = $liveOrderSettleAmount7d;
        return $this;
    }

    /**
     * 广告直接结算订单数（14天），广告有效触达用户产生直接成交订单后，且未来14天内未退款的结算订单数（直接成交订单数-未来14天内的退款订单数）
     * @return int
     */
    public function getLiveOrderSettleCount14d(): ?int
    {
        return $this->liveOrderSettleCount14d;
    }

    /**
     * 广告直接结算订单数（14天），广告有效触达用户产生直接成交订单后，且未来14天内未退款的结算订单数（直接成交订单数-未来14天内的退款订单数）
     * @param int $liveOrderSettleCount14d
     * @return self
     */
    public function setLiveOrderSettleCount14d(?int $liveOrderSettleCount14d): self
    {
        $this->liveOrderSettleCount14d = $liveOrderSettleCount14d;
        return $this;
    }

    /**
     * 广告直接结算订单数（7天），广告有效触达用户产生直接成交订单后，且未来7天内未退款的结算订单数（直接成交订单数-未来7天内的退款订单数）
     * @return int
     */
    public function getLiveOrderSettleCount7d(): ?int
    {
        return $this->liveOrderSettleCount7d;
    }

    /**
     * 广告直接结算订单数（7天），广告有效触达用户产生直接成交订单后，且未来7天内未退款的结算订单数（直接成交订单数-未来7天内的退款订单数）
     * @param int $liveOrderSettleCount7d
     * @return self
     */
    public function setLiveOrderSettleCount7d(?int $liveOrderSettleCount7d): self
    {
        $this->liveOrderSettleCount7d = $liveOrderSettleCount7d;
        return $this;
    }

    /**
     * 广告直接订单结算率（14天），广告有效触达用户后成交且未来14天内未退款的订单数的百分比，公式：广告直接结算订单数（14天）/广告直接成交订单数*100%，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @return float
     */
    public function getLiveOrderSettleCountRate14d(): ?float
    {
        return $this->liveOrderSettleCountRate14d;
    }

    /**
     * 广告直接订单结算率（14天），广告有效触达用户后成交且未来14天内未退款的订单数的百分比，公式：广告直接结算订单数（14天）/广告直接成交订单数*100%，注：在最近14日内，该数据会存在波动情况，14日后该数据稳定不变
     * @param float $liveOrderSettleCountRate14d
     * @return self
     */
    public function setLiveOrderSettleCountRate14d(?float $liveOrderSettleCountRate14d): self
    {
        $this->liveOrderSettleCountRate14d = $liveOrderSettleCountRate14d;
        return $this;
    }

    /**
     * 广告直接订单结算率（7天），广告有效触达用户后成交且未来7天内未退款的订单数的百分比 计算公式：广告直接结算订单数（7天）/广告直接成交订单数*100%，注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @return float
     */
    public function getLiveOrderSettleCountRate7d(): ?float
    {
        return $this->liveOrderSettleCountRate7d;
    }

    /**
     * 广告直接订单结算率（7天），广告有效触达用户后成交且未来7天内未退款的订单数的百分比 计算公式：广告直接结算订单数（7天）/广告直接成交订单数*100%，注：在最近7日内，该数据会存在波动情况，7日后该数据稳定不变
     * @param float $liveOrderSettleCountRate7d
     * @return self
     */
    public function setLiveOrderSettleCountRate7d(?float $liveOrderSettleCountRate7d): self
    {
        $this->liveOrderSettleCountRate7d = $liveOrderSettleCountRate7d;
        return $this;
    }

    /**
     * 整体成单数，用户在您直播间，支付成功的订单数（包含自然+广告）
     * @return int
     */
    public function getLivePayOrderCountAlias(): ?int
    {
        return $this->livePayOrderCountAlias;
    }

    /**
     * 整体成单数，用户在您直播间，支付成功的订单数（包含自然+广告）
     * @param int $livePayOrderCountAlias
     * @return self
     */
    public function setLivePayOrderCountAlias(?int $livePayOrderCountAlias): self
    {
        $this->livePayOrderCountAlias = $livePayOrderCountAlias;
        return $this;
    }

    /**
     * 整体成交金额，直播间总成交金额（包含自然+广告）
     * @return float
     */
    public function getLivePayOrderGmvAlias(): ?float
    {
        return $this->livePayOrderGmvAlias;
    }

    /**
     * 整体成交金额，直播间总成交金额（包含自然+广告）
     * @param float $livePayOrderGmvAlias
     * @return self
     */
    public function setLivePayOrderGmvAlias(?float $livePayOrderGmvAlias): self
    {
        $this->livePayOrderGmvAlias = $livePayOrderGmvAlias;
        return $this;
    }

    /**
     * 直播间平均成单金额，直播间支付订单的平均金额 计算公式：直播间支付订单金额/支付订单数（包含自然+广告）
     * @return float
     */
    public function getLivePayOrderGmvAvg(): ?float
    {
        return $this->livePayOrderGmvAvg;
    }

    /**
     * 直播间平均成单金额，直播间支付订单的平均金额 计算公式：直播间支付订单金额/支付订单数（包含自然+广告）
     * @param float $livePayOrderGmvAvg
     * @return self
     */
    public function setLivePayOrderGmvAvg(?float $livePayOrderGmvAvg): self
    {
        $this->livePayOrderGmvAvg = $livePayOrderGmvAvg;
        return $this;
    }

    /**
     * 整体支付ROI，直播间整体支付ROI=（累计成交金额和预售金额+成交智能优惠券金额）/消耗；累计成交金额和预售金额来自于直播间整体（包含自然+广告），消耗来自于直客同主体的账户 仅支持直客广告主的官方/自运营抖音号
     * @return float
     */
    public function getLivePayOrderGmvRoi(): ?float
    {
        return $this->livePayOrderGmvRoi;
    }

    /**
     * 整体支付ROI，直播间整体支付ROI=（累计成交金额和预售金额+成交智能优惠券金额）/消耗；累计成交金额和预售金额来自于直播间整体（包含自然+广告），消耗来自于直客同主体的账户 仅支持直客广告主的官方/自运营抖音号
     * @param float $livePayOrderGmvRoi
     * @return self
     */
    public function setLivePayOrderGmvRoi(?float $livePayOrderGmvRoi): self
    {
        $this->livePayOrderGmvRoi = $livePayOrderGmvRoi;
        return $this;
    }

    /**
     * 整体成单率，直播间整体支付成功的订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据 仅支持直客广告主的官方/自运营抖音号
     * @return float
     */
    public function getLivePayOrderRate(): ?float
    {
        return $this->livePayOrderRate;
    }

    /**
     * 整体成单率，直播间整体支付成功的订单数占比广告点击次数的比例，其中广告点击次数和所选抖音号类型有关，如果是官方和自运营类型，是同主体全部广告账户的数据；如果是合作达人类人，则是当前广告账户的数据 仅支持直客广告主的官方/自运营抖音号
     * @param float $livePayOrderRate
     * @return self
     */
    public function setLivePayOrderRate(?float $livePayOrderRate): self
    {
        $this->livePayOrderRate = $livePayOrderRate;
        return $this;
    }

    /**
     * 整体预售订单数，直播整体的已支付预售定金的预售类订单数量（包含自然+广告）
     * @return float
     */
    public function getLivePrepayOrderCountAlias(): ?float
    {
        return $this->livePrepayOrderCountAlias;
    }

    /**
     * 整体预售订单数，直播整体的已支付预售定金的预售类订单数量（包含自然+广告）
     * @param float $livePrepayOrderCountAlias
     * @return self
     */
    public function setLivePrepayOrderCountAlias(?float $livePrepayOrderCountAlias): self
    {
        $this->livePrepayOrderCountAlias = $livePrepayOrderCountAlias;
        return $this;
    }

    /**
     * 整体预售订单金额，直播整体的已支付定金的预售类订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @return float
     */
    public function getLivePrepayOrderGmvAlias(): ?float
    {
        return $this->livePrepayOrderGmvAlias;
    }

    /**
     * 整体预售订单金额，直播整体的已支付定金的预售类订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @param float $livePrepayOrderGmvAlias
     * @return self
     */
    public function setLivePrepayOrderGmvAlias(?float $livePrepayOrderGmvAlias): self
    {
        $this->livePrepayOrderGmvAlias = $livePrepayOrderGmvAlias;
        return $this;
    }

    /**
     * 直播间超过1分钟观看人次，广告带来的用户在您直播间单次观看时长超过1分钟人数
     * @return int
     */
    public function getLiveWatchOneMinuteCount(): ?int
    {
        return $this->liveWatchOneMinuteCount;
    }

    /**
     * 直播间超过1分钟观看人次，广告带来的用户在您直播间单次观看时长超过1分钟人数
     * @param int $liveWatchOneMinuteCount
     * @return self
     */
    public function setLiveWatchOneMinuteCount(?int $liveWatchOneMinuteCount): self
    {
        $this->liveWatchOneMinuteCount = $liveWatchOneMinuteCount;
        return $this;
    }

    /**
     * 广告下单数，广告引导至直播间的下单数
     * @return int
     */
    public function getLubanLiveOrderCount(): ?int
    {
        return $this->lubanLiveOrderCount;
    }

    /**
     * 广告下单数，广告引导至直播间的下单数
     * @param int $lubanLiveOrderCount
     * @return self
     */
    public function setLubanLiveOrderCount(?int $lubanLiveOrderCount): self
    {
        $this->lubanLiveOrderCount = $lubanLiveOrderCount;
        return $this;
    }

    /**
     * 广告成单数，广告引导至直播间的成功支付订单数
     * @return int
     */
    public function getLubanLivePayOrderCount(): ?int
    {
        return $this->lubanLivePayOrderCount;
    }

    /**
     * 广告成单数，广告引导至直播间的成功支付订单数
     * @param int $lubanLivePayOrderCount
     * @return self
     */
    public function setLubanLivePayOrderCount(?int $lubanLivePayOrderCount): self
    {
        $this->lubanLivePayOrderCount = $lubanLivePayOrderCount;
        return $this;
    }

    /**
     * 广告成交金额，广告引导至直播间的成交金额
     * @return float
     */
    public function getLubanLivePayOrderGmv(): ?float
    {
        return $this->lubanLivePayOrderGmv;
    }

    /**
     * 广告成交金额，广告引导至直播间的成交金额
     * @param float $lubanLivePayOrderGmv
     * @return self
     */
    public function setLubanLivePayOrderGmv(?float $lubanLivePayOrderGmv): self
    {
        $this->lubanLivePayOrderGmv = $lubanLivePayOrderGmv;
        return $this;
    }

    /**
     * 广告GPM，广告引导至直播间千次观看成交金额 计算公式：直播间广告成交金额/直播间广告进入次数*1000
     * @return float
     */
    public function getLubanLivePayOrderGpm(): ?float
    {
        return $this->lubanLivePayOrderGpm;
    }

    /**
     * 广告GPM，广告引导至直播间千次观看成交金额 计算公式：直播间广告成交金额/直播间广告进入次数*1000
     * @param float $lubanLivePayOrderGpm
     * @return self
     */
    public function setLubanLivePayOrderGpm(?float $lubanLivePayOrderGpm): self
    {
        $this->lubanLivePayOrderGpm = $lubanLivePayOrderGpm;
        return $this;
    }

    /**
     * 广告预售订单数，广告带来已支付预售定金的预售类订单数量
     * @return int
     */
    public function getLubanLivePrepayOrderCount(): ?int
    {
        return $this->lubanLivePrepayOrderCount;
    }

    /**
     * 广告预售订单数，广告带来已支付预售定金的预售类订单数量
     * @param int $lubanLivePrepayOrderCount
     * @return self
     */
    public function setLubanLivePrepayOrderCount(?int $lubanLivePrepayOrderCount): self
    {
        $this->lubanLivePrepayOrderCount = $lubanLivePrepayOrderCount;
        return $this;
    }

    /**
     * 广告预售订单金额，广告带来的已支付定金的订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @return float
     */
    public function getLubanLivePrepayOrderGmv(): ?float
    {
        return $this->lubanLivePrepayOrderGmv;
    }

    /**
     * 广告预售订单金额，广告带来的已支付定金的订单金额，包含定金和尾款（只包含预售类订单的金额，不判断尾款支付状态）
     * @param float $lubanLivePrepayOrderGmv
     * @return self
     */
    public function setLubanLivePrepayOrderGmv(?float $lubanLivePrepayOrderGmv): self
    {
        $this->lubanLivePrepayOrderGmv = $lubanLivePrepayOrderGmv;
        return $this;
    }

    /**
     * 整体消耗，投放期间的全部广告消耗，数据来自与直客同主体的多个广告账户
     * @return float
     */
    public function getQualificationStatCost(): ?float
    {
        return $this->qualificationStatCost;
    }

    /**
     * 整体消耗，投放期间的全部广告消耗，数据来自与直客同主体的多个广告账户
     * @param float $qualificationStatCost
     * @return self
     */
    public function setQualificationStatCost(?float $qualificationStatCost): self
    {
        $this->qualificationStatCost = $qualificationStatCost;
        return $this;
    }

    /**
     * 消耗，广告投放期间的消耗，当天数据会有波动，次日稳定
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 消耗，广告投放期间的消耗，当天数据会有波动，次日稳定
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 直播间整体评论次数，用户在您直播间输入评论并点击发送消息的次数（包含自然+广告）
     * @return int
     */
    public function getTotalLiveCommentCnt(): ?int
    {
        return $this->totalLiveCommentCnt;
    }

    /**
     * 直播间整体评论次数，用户在您直播间输入评论并点击发送消息的次数（包含自然+广告）
     * @param int $totalLiveCommentCnt
     * @return self
     */
    public function setTotalLiveCommentCnt(?int $totalLiveCommentCnt): self
    {
        $this->totalLiveCommentCnt = $totalLiveCommentCnt;
        return $this;
    }

    /**
     * 直播间整体加团次数，用户在您直播间成功加入粉丝团的次数（包含自然+广告）
     * @return int
     */
    public function getTotalLiveFansClubJoinCnt(): ?int
    {
        return $this->totalLiveFansClubJoinCnt;
    }

    /**
     * 直播间整体加团次数，用户在您直播间成功加入粉丝团的次数（包含自然+广告）
     * @param int $totalLiveFansClubJoinCnt
     * @return self
     */
    public function setTotalLiveFansClubJoinCnt(?int $totalLiveFansClubJoinCnt): self
    {
        $this->totalLiveFansClubJoinCnt = $totalLiveFansClubJoinCnt;
        return $this;
    }

    /**
     * 直播间整体新增粉丝数，直播间新增的关注数（包含自然+广告），注：该数据未去重，包含解除关注后又重新关注情况，每次关注均会记录一次
     * @return int
     */
    public function getTotalLiveFollowCnt(): ?int
    {
        return $this->totalLiveFollowCnt;
    }

    /**
     * 直播间整体新增粉丝数，直播间新增的关注数（包含自然+广告），注：该数据未去重，包含解除关注后又重新关注情况，每次关注均会记录一次
     * @param int $totalLiveFollowCnt
     * @return self
     */
    public function setTotalLiveFollowCnt(?int $totalLiveFollowCnt): self
    {
        $this->totalLiveFollowCnt = $totalLiveFollowCnt;
        return $this;
    }

    /**
     * 直播间整体音浪收入，用户在您直播间打赏的总音浪数（包含自然+广告）
     * @return float
     */
    public function getTotalLiveGiftAmount(): ?float
    {
        return $this->totalLiveGiftAmount;
    }

    /**
     * 直播间整体音浪收入，用户在您直播间打赏的总音浪数（包含自然+广告）
     * @param float $totalLiveGiftAmount
     * @return self
     */
    public function setTotalLiveGiftAmount(?float $totalLiveGiftAmount): self
    {
        $this->totalLiveGiftAmount = $totalLiveGiftAmount;
        return $this;
    }

    /**
     * 直播间整体打赏次数，用户在您直播间成功打赏的次数（包含自然+广告）
     * @return int
     */
    public function getTotalLiveGiftCnt(): ?int
    {
        return $this->totalLiveGiftCnt;
    }

    /**
     * 直播间整体打赏次数，用户在您直播间成功打赏的次数（包含自然+广告）
     * @param int $totalLiveGiftCnt
     * @return self
     */
    public function setTotalLiveGiftCnt(?int $totalLiveGiftCnt): self
    {
        $this->totalLiveGiftCnt = $totalLiveGiftCnt;
        return $this;
    }

    /**
     * GPM，直播间千次观看成交金额 计算公式：直播间整体成交金额/直播间整体进入次数*1000
     * @return float
     */
    public function getTotalLivePayOrderGpm(): ?float
    {
        return $this->totalLivePayOrderGpm;
    }

    /**
     * GPM，直播间千次观看成交金额 计算公式：直播间整体成交金额/直播间整体进入次数*1000
     * @param float $totalLivePayOrderGpm
     * @return self
     */
    public function setTotalLivePayOrderGpm(?float $totalLivePayOrderGpm): self
    {
        $this->totalLivePayOrderGpm = $totalLivePayOrderGpm;
        return $this;
    }

    /**
     * 直播间整体分享次数，用户在您直播间点击分享的次数（包含自然+广告）
     * @return int
     */
    public function getTotalLiveShareCnt(): ?int
    {
        return $this->totalLiveShareCnt;
    }

    /**
     * 直播间整体分享次数，用户在您直播间点击分享的次数（包含自然+广告）
     * @param int $totalLiveShareCnt
     * @return self
     */
    public function setTotalLiveShareCnt(?int $totalLiveShareCnt): self
    {
        $this->totalLiveShareCnt = $totalLiveShareCnt;
        return $this;
    }

    /**
     * 直播间观看人次，用户进入您直播间的次数（包含自然+广告）
     * @return int
     */
    public function getTotalLiveWatchCnt(): ?int
    {
        return $this->totalLiveWatchCnt;
    }

    /**
     * 直播间观看人次，用户进入您直播间的次数（包含自然+广告）
     * @param int $totalLiveWatchCnt
     * @return self
     */
    public function setTotalLiveWatchCnt(?int $totalLiveWatchCnt): self
    {
        $this->totalLiveWatchCnt = $totalLiveWatchCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adAllOrderGmvSettleRate14d !== null) {
            $result['ad_all_order_gmv_settle_rate_14d'] = $this->adAllOrderGmvSettleRate14d;
        }
        if ($this->adAllOrderGmvSettleRate7d !== null) {
            $result['ad_all_order_gmv_settle_rate_7d'] = $this->adAllOrderGmvSettleRate7d;
        }
        if ($this->adLiveCreateOrderRate !== null) {
            $result['ad_live_create_order_rate'] = $this->adLiveCreateOrderRate;
        }
        if ($this->adLiveOrderSettleCost14d !== null) {
            $result['ad_live_order_settle_cost_14d'] = $this->adLiveOrderSettleCost14d;
        }
        if ($this->adLiveOrderSettleCost7d !== null) {
            $result['ad_live_order_settle_cost_7d'] = $this->adLiveOrderSettleCost7d;
        }
        if ($this->adLiveOrderSettleRoi14d !== null) {
            $result['ad_live_order_settle_roi_14d'] = $this->adLiveOrderSettleRoi14d;
        }
        if ($this->adLiveOrderSettleRoi7d !== null) {
            $result['ad_live_order_settle_roi_7d'] = $this->adLiveOrderSettleRoi7d;
        }
        if ($this->adLivePayOrderGmvAvg !== null) {
            $result['ad_live_pay_order_gmv_avg'] = $this->adLivePayOrderGmvAvg;
        }
        if ($this->adLivePayOrderRate !== null) {
            $result['ad_live_pay_order_rate'] = $this->adLivePayOrderRate;
        }
        if ($this->adLivePrepayAndPayOrderGmvRoi !== null) {
            $result['ad_live_prepay_and_pay_order_gmv_roi'] = $this->adLivePrepayAndPayOrderGmvRoi;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->cpcPlatform !== null) {
            $result['cpc_platform'] = $this->cpcPlatform;
        }
        if ($this->cpmPlatform !== null) {
            $result['cpm_platform'] = $this->cpmPlatform;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
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
        if ($this->liveClickCartCountAlias !== null) {
            $result['live_click_cart_count_alias'] = $this->liveClickCartCountAlias;
        }
        if ($this->liveClickProductCountAlias !== null) {
            $result['live_click_product_count_alias'] = $this->liveClickProductCountAlias;
        }
        if ($this->liveCreateOrderCountAlias !== null) {
            $result['live_create_order_count_alias'] = $this->liveCreateOrderCountAlias;
        }
        if ($this->liveCreateOrderRate !== null) {
            $result['live_create_order_rate'] = $this->liveCreateOrderRate;
        }
        if ($this->liveOrderPayCouponAmount !== null) {
            $result['live_order_pay_coupon_amount'] = $this->liveOrderPayCouponAmount;
        }
        if ($this->liveOrderRefundAmount14d !== null) {
            $result['live_order_refund_amount_14d'] = $this->liveOrderRefundAmount14d;
        }
        if ($this->liveOrderRefundAmount7d !== null) {
            $result['live_order_refund_amount_7d'] = $this->liveOrderRefundAmount7d;
        }
        if ($this->liveOrderRefundCount14d !== null) {
            $result['live_order_refund_count_14d'] = $this->liveOrderRefundCount14d;
        }
        if ($this->liveOrderRefundCount7d !== null) {
            $result['live_order_refund_count_7d'] = $this->liveOrderRefundCount7d;
        }
        if ($this->liveOrderSettleAmount14d !== null) {
            $result['live_order_settle_amount_14d'] = $this->liveOrderSettleAmount14d;
        }
        if ($this->liveOrderSettleAmount7d !== null) {
            $result['live_order_settle_amount_7d'] = $this->liveOrderSettleAmount7d;
        }
        if ($this->liveOrderSettleCount14d !== null) {
            $result['live_order_settle_count_14d'] = $this->liveOrderSettleCount14d;
        }
        if ($this->liveOrderSettleCount7d !== null) {
            $result['live_order_settle_count_7d'] = $this->liveOrderSettleCount7d;
        }
        if ($this->liveOrderSettleCountRate14d !== null) {
            $result['live_order_settle_count_rate_14d'] = $this->liveOrderSettleCountRate14d;
        }
        if ($this->liveOrderSettleCountRate7d !== null) {
            $result['live_order_settle_count_rate_7d'] = $this->liveOrderSettleCountRate7d;
        }
        if ($this->livePayOrderCountAlias !== null) {
            $result['live_pay_order_count_alias'] = $this->livePayOrderCountAlias;
        }
        if ($this->livePayOrderGmvAlias !== null) {
            $result['live_pay_order_gmv_alias'] = $this->livePayOrderGmvAlias;
        }
        if ($this->livePayOrderGmvAvg !== null) {
            $result['live_pay_order_gmv_avg'] = $this->livePayOrderGmvAvg;
        }
        if ($this->livePayOrderGmvRoi !== null) {
            $result['live_pay_order_gmv_roi'] = $this->livePayOrderGmvRoi;
        }
        if ($this->livePayOrderRate !== null) {
            $result['live_pay_order_rate'] = $this->livePayOrderRate;
        }
        if ($this->livePrepayOrderCountAlias !== null) {
            $result['live_prepay_order_count_alias'] = $this->livePrepayOrderCountAlias;
        }
        if ($this->livePrepayOrderGmvAlias !== null) {
            $result['live_prepay_order_gmv_alias'] = $this->livePrepayOrderGmvAlias;
        }
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->lubanLiveOrderCount !== null) {
            $result['luban_live_order_count'] = $this->lubanLiveOrderCount;
        }
        if ($this->lubanLivePayOrderCount !== null) {
            $result['luban_live_pay_order_count'] = $this->lubanLivePayOrderCount;
        }
        if ($this->lubanLivePayOrderGmv !== null) {
            $result['luban_live_pay_order_gmv'] = $this->lubanLivePayOrderGmv;
        }
        if ($this->lubanLivePayOrderGpm !== null) {
            $result['luban_live_pay_order_gpm'] = $this->lubanLivePayOrderGpm;
        }
        if ($this->lubanLivePrepayOrderCount !== null) {
            $result['luban_live_prepay_order_count'] = $this->lubanLivePrepayOrderCount;
        }
        if ($this->lubanLivePrepayOrderGmv !== null) {
            $result['luban_live_prepay_order_gmv'] = $this->lubanLivePrepayOrderGmv;
        }
        if ($this->qualificationStatCost !== null) {
            $result['qualification_stat_cost'] = $this->qualificationStatCost;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalLiveCommentCnt !== null) {
            $result['total_live_comment_cnt'] = $this->totalLiveCommentCnt;
        }
        if ($this->totalLiveFansClubJoinCnt !== null) {
            $result['total_live_fans_club_join_cnt'] = $this->totalLiveFansClubJoinCnt;
        }
        if ($this->totalLiveFollowCnt !== null) {
            $result['total_live_follow_cnt'] = $this->totalLiveFollowCnt;
        }
        if ($this->totalLiveGiftAmount !== null) {
            $result['total_live_gift_amount'] = $this->totalLiveGiftAmount;
        }
        if ($this->totalLiveGiftCnt !== null) {
            $result['total_live_gift_cnt'] = $this->totalLiveGiftCnt;
        }
        if ($this->totalLivePayOrderGpm !== null) {
            $result['total_live_pay_order_gpm'] = $this->totalLivePayOrderGpm;
        }
        if ($this->totalLiveShareCnt !== null) {
            $result['total_live_share_cnt'] = $this->totalLiveShareCnt;
        }
        if ($this->totalLiveWatchCnt !== null) {
            $result['total_live_watch_cnt'] = $this->totalLiveWatchCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_all_order_gmv_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_live_create_order_rate'] ?? null) !== null) {
            $obj->adLiveCreateOrderRate = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_cost_14d'] ?? null) !== null) {
            $obj->adLiveOrderSettleCost14d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_cost_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleCost7d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_roi_14d'] ?? null) !== null) {
            $obj->adLiveOrderSettleRoi14d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_roi_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleRoi7d = (float) $v;
        }
        if (($v = $data['ad_live_pay_order_gmv_avg'] ?? null) !== null) {
            $obj->adLivePayOrderGmvAvg = (float) $v;
        }
        if (($v = $data['ad_live_pay_order_rate'] ?? null) !== null) {
            $obj->adLivePayOrderRate = (float) $v;
        }
        if (($v = $data['ad_live_prepay_and_pay_order_gmv_roi'] ?? null) !== null) {
            $obj->adLivePrepayAndPayOrderGmvRoi = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['cpc_platform'] ?? null) !== null) {
            $obj->cpcPlatform = (float) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
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
        if (($v = $data['live_click_cart_count_alias'] ?? null) !== null) {
            $obj->liveClickCartCountAlias = (int) $v;
        }
        if (($v = $data['live_click_product_count_alias'] ?? null) !== null) {
            $obj->liveClickProductCountAlias = (int) $v;
        }
        if (($v = $data['live_create_order_count_alias'] ?? null) !== null) {
            $obj->liveCreateOrderCountAlias = (int) $v;
        }
        if (($v = $data['live_create_order_rate'] ?? null) !== null) {
            $obj->liveCreateOrderRate = (float) $v;
        }
        if (($v = $data['live_order_pay_coupon_amount'] ?? null) !== null) {
            $obj->liveOrderPayCouponAmount = (float) $v;
        }
        if (($v = $data['live_order_refund_amount_14d'] ?? null) !== null) {
            $obj->liveOrderRefundAmount14d = (float) $v;
        }
        if (($v = $data['live_order_refund_amount_7d'] ?? null) !== null) {
            $obj->liveOrderRefundAmount7d = (float) $v;
        }
        if (($v = $data['live_order_refund_count_14d'] ?? null) !== null) {
            $obj->liveOrderRefundCount14d = (int) $v;
        }
        if (($v = $data['live_order_refund_count_7d'] ?? null) !== null) {
            $obj->liveOrderRefundCount7d = (int) $v;
        }
        if (($v = $data['live_order_settle_amount_14d'] ?? null) !== null) {
            $obj->liveOrderSettleAmount14d = (float) $v;
        }
        if (($v = $data['live_order_settle_amount_7d'] ?? null) !== null) {
            $obj->liveOrderSettleAmount7d = (float) $v;
        }
        if (($v = $data['live_order_settle_count_14d'] ?? null) !== null) {
            $obj->liveOrderSettleCount14d = (int) $v;
        }
        if (($v = $data['live_order_settle_count_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCount7d = (int) $v;
        }
        if (($v = $data['live_order_settle_count_rate_14d'] ?? null) !== null) {
            $obj->liveOrderSettleCountRate14d = (float) $v;
        }
        if (($v = $data['live_order_settle_count_rate_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCountRate7d = (float) $v;
        }
        if (($v = $data['live_pay_order_count_alias'] ?? null) !== null) {
            $obj->livePayOrderCountAlias = (int) $v;
        }
        if (($v = $data['live_pay_order_gmv_alias'] ?? null) !== null) {
            $obj->livePayOrderGmvAlias = (float) $v;
        }
        if (($v = $data['live_pay_order_gmv_avg'] ?? null) !== null) {
            $obj->livePayOrderGmvAvg = (float) $v;
        }
        if (($v = $data['live_pay_order_gmv_roi'] ?? null) !== null) {
            $obj->livePayOrderGmvRoi = (float) $v;
        }
        if (($v = $data['live_pay_order_rate'] ?? null) !== null) {
            $obj->livePayOrderRate = (float) $v;
        }
        if (($v = $data['live_prepay_order_count_alias'] ?? null) !== null) {
            $obj->livePrepayOrderCountAlias = (float) $v;
        }
        if (($v = $data['live_prepay_order_gmv_alias'] ?? null) !== null) {
            $obj->livePrepayOrderGmvAlias = (float) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (int) $v;
        }
        if (($v = $data['luban_live_order_count'] ?? null) !== null) {
            $obj->lubanLiveOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_count'] ?? null) !== null) {
            $obj->lubanLivePayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_gmv'] ?? null) !== null) {
            $obj->lubanLivePayOrderGmv = (float) $v;
        }
        if (($v = $data['luban_live_pay_order_gpm'] ?? null) !== null) {
            $obj->lubanLivePayOrderGpm = (float) $v;
        }
        if (($v = $data['luban_live_prepay_order_count'] ?? null) !== null) {
            $obj->lubanLivePrepayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_prepay_order_gmv'] ?? null) !== null) {
            $obj->lubanLivePrepayOrderGmv = (float) $v;
        }
        if (($v = $data['qualification_stat_cost'] ?? null) !== null) {
            $obj->qualificationStatCost = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_live_comment_cnt'] ?? null) !== null) {
            $obj->totalLiveCommentCnt = (int) $v;
        }
        if (($v = $data['total_live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->totalLiveFansClubJoinCnt = (int) $v;
        }
        if (($v = $data['total_live_follow_cnt'] ?? null) !== null) {
            $obj->totalLiveFollowCnt = (int) $v;
        }
        if (($v = $data['total_live_gift_amount'] ?? null) !== null) {
            $obj->totalLiveGiftAmount = (float) $v;
        }
        if (($v = $data['total_live_gift_cnt'] ?? null) !== null) {
            $obj->totalLiveGiftCnt = (int) $v;
        }
        if (($v = $data['total_live_pay_order_gpm'] ?? null) !== null) {
            $obj->totalLivePayOrderGpm = (float) $v;
        }
        if (($v = $data['total_live_share_cnt'] ?? null) !== null) {
            $obj->totalLiveShareCnt = (int) $v;
        }
        if (($v = $data['total_live_watch_cnt'] ?? null) !== null) {
            $obj->totalLiveWatchCnt = (int) $v;
        }
        return $obj;
    }
}
