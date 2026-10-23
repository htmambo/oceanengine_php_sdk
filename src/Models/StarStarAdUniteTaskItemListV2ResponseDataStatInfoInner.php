<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskItemListV2ResponseDataStatInfoInner implements \JsonSerializable
{
    /**
     * 激活量，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $activeCnt = null;

    /**
     * 首次付费数，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $activePayCnt = null;

    /**
     * 首次付费率（首次付费数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $activePayRate = null;

    /**
     * 广告点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $adClickRate = null;

    /**
     * 预估实时广告消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $adCost = null;

    /**
     * 达人id
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人昵称
     * @var string
     */
    protected ?string $authorNickName = null;

    /**
     * 激活率（激活量/点击量），仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $avtiveRate = null;

    /**
     * 总点击量，实时更新（自然流量组件点击量+广告点击量）
     * @var int
     */
    protected ?int $click = null;

    /**
     * 总点击率=总点击量/总展示量
     * @var float
     */
    protected ?float $clickRate = null;

    /**
     * 评论数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $comment = null;

    /**
     * 转化数，实时更新
     * @var int
     */
    protected ?int $convert = null;

    /**
     * 预估实时消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @var int
     */
    protected ?int $cost = null;

    /**
     * 激活成本（预估实时消耗/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $costPerActive = null;

    /**
     * 首次付费成本（预估实时消耗/首次付费数），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $costPerActivePay = null;

    /**
     * 次留成本（预估实时消耗/次留数），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $costPerNextDayOpen = null;

    /**
     * 付费成本（预估实时消耗/付费次数），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $costPerPay = null;

    /**
     * 注册成本（预估实时消耗/注册量），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $costPerRegister = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 安装完成量，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $installFinishCnt = null;

    /**
     * 互动数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $interact = null;

    /**
     * 互动率，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $interactRate = null;

    /**
     * 视频id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskItemListV2DataStatInfoItemStatus
     */
    protected ?string $itemStatus = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $itemTitle = null;

    /**
     * 视频链接
     * @var string
     */
    protected ?string $itemUrl = null;

    /**
     * 点赞数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $like = null;

    /**
     * 自然点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $naturalClickRate = null;

    /**
     * 预估实时自然消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $naturalCost = null;

    /**
     * 次留数，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $nextDayOpenCnt = null;

    /**
     * 次留率（次留数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $nextDayOpenRate = null;

    /**
     * 激活当日付费ROI（激活当日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $pay1dayRoi = null;

    /**
     * 激活后7日付费ROI（激活后7日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $pay7daysRoi = null;

    /**
     * 回传的付费金额，回传后更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @var int
     */
    protected ?int $payAmount = null;

    /**
     * 激活当日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $payAmount1day = null;

    /**
     * 激活后7日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $payAmount7days = null;

    /**
     * 付费次数，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $payCnt = null;

    /**
     * 付费率（付费次数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $payRate = null;

    /**
     * 付费ROI（付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $payRoi = null;

    /**
     * 3s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $play3sRate = null;

    /**
     * 5s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $play5sRate = null;

    /**
     * 播放量，T+1更新
     * @var int
     */
    protected ?int $playCnt = null;

    /**
     * 完播率，仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $playFinishRate = null;

    /**
     * 注册量，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $registerCnt = null;

    /**
     * 注册率（注册量/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @var float
     */
    protected ?float $registerRate = null;

    /**
     * 视频发布日期
     * @var int
     */
    protected ?int $releaseTime = null;

    /**
     * 累计已结算消耗，T+1更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @var int
     */
    protected ?int $settledCost = null;

    /**
     * 分享数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @var int
     */
    protected ?int $share = null;

    /**
     * 总展示量，实时更新（自然流量组件展示量+广告展示量）
     * @var int
     */
    protected ?int $show = null;

    /**
     * 客户的星图id
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 数据日期，格式yyyy-mm-dd，只和播放量、转化数、预估消耗相关
     * @var string
     */
    protected ?string $statDate = null;

    /**
     * 激活量，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getActiveCnt(): ?int
    {
        return $this->activeCnt;
    }

    /**
     * 激活量，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $activeCnt
     * @return self
     */
    public function setActiveCnt(?int $activeCnt): self
    {
        $this->activeCnt = $activeCnt;
        return $this;
    }

    /**
     * 首次付费数，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getActivePayCnt(): ?int
    {
        return $this->activePayCnt;
    }

    /**
     * 首次付费数，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $activePayCnt
     * @return self
     */
    public function setActivePayCnt(?int $activePayCnt): self
    {
        $this->activePayCnt = $activePayCnt;
        return $this;
    }

    /**
     * 首次付费率（首次付费数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getActivePayRate(): ?float
    {
        return $this->activePayRate;
    }

    /**
     * 首次付费率（首次付费数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @param float $activePayRate
     * @return self
     */
    public function setActivePayRate(?float $activePayRate): self
    {
        $this->activePayRate = $activePayRate;
        return $this;
    }

    /**
     * 广告点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getAdClickRate(): ?float
    {
        return $this->adClickRate;
    }

    /**
     * 广告点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @param float $adClickRate
     * @return self
     */
    public function setAdClickRate(?float $adClickRate): self
    {
        $this->adClickRate = $adClickRate;
        return $this;
    }

    /**
     * 预估实时广告消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getAdCost(): ?int
    {
        return $this->adCost;
    }

    /**
     * 预估实时广告消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $adCost
     * @return self
     */
    public function setAdCost(?int $adCost): self
    {
        $this->adCost = $adCost;
        return $this;
    }

    /**
     * 达人id
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人id
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人昵称
     * @return string
     */
    public function getAuthorNickName(): ?string
    {
        return $this->authorNickName;
    }

    /**
     * 达人昵称
     * @param string $authorNickName
     * @return self
     */
    public function setAuthorNickName(?string $authorNickName): self
    {
        $this->authorNickName = $authorNickName;
        return $this;
    }

    /**
     * 激活率（激活量/点击量），仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getAvtiveRate(): ?float
    {
        return $this->avtiveRate;
    }

    /**
     * 激活率（激活量/点击量），仅部分客户返回，如有疑问可咨询对接人员
     * @param float $avtiveRate
     * @return self
     */
    public function setAvtiveRate(?float $avtiveRate): self
    {
        $this->avtiveRate = $avtiveRate;
        return $this;
    }

    /**
     * 总点击量，实时更新（自然流量组件点击量+广告点击量）
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * 总点击量，实时更新（自然流量组件点击量+广告点击量）
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * 总点击率=总点击量/总展示量
     * @return float
     */
    public function getClickRate(): ?float
    {
        return $this->clickRate;
    }

    /**
     * 总点击率=总点击量/总展示量
     * @param float $clickRate
     * @return self
     */
    public function setClickRate(?float $clickRate): self
    {
        $this->clickRate = $clickRate;
        return $this;
    }

    /**
     * 评论数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getComment(): ?int
    {
        return $this->comment;
    }

    /**
     * 评论数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $comment
     * @return self
     */
    public function setComment(?int $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * 转化数，实时更新
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * 转化数，实时更新
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * 预估实时消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @return int
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * 预估实时消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @param int $cost
     * @return self
     */
    public function setCost(?int $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 激活成本（预估实时消耗/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getCostPerActive(): ?int
    {
        return $this->costPerActive;
    }

    /**
     * 激活成本（预估实时消耗/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $costPerActive
     * @return self
     */
    public function setCostPerActive(?int $costPerActive): self
    {
        $this->costPerActive = $costPerActive;
        return $this;
    }

    /**
     * 首次付费成本（预估实时消耗/首次付费数），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getCostPerActivePay(): ?int
    {
        return $this->costPerActivePay;
    }

    /**
     * 首次付费成本（预估实时消耗/首次付费数），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $costPerActivePay
     * @return self
     */
    public function setCostPerActivePay(?int $costPerActivePay): self
    {
        $this->costPerActivePay = $costPerActivePay;
        return $this;
    }

    /**
     * 次留成本（预估实时消耗/次留数），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getCostPerNextDayOpen(): ?int
    {
        return $this->costPerNextDayOpen;
    }

    /**
     * 次留成本（预估实时消耗/次留数），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $costPerNextDayOpen
     * @return self
     */
    public function setCostPerNextDayOpen(?int $costPerNextDayOpen): self
    {
        $this->costPerNextDayOpen = $costPerNextDayOpen;
        return $this;
    }

    /**
     * 付费成本（预估实时消耗/付费次数），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getCostPerPay(): ?int
    {
        return $this->costPerPay;
    }

    /**
     * 付费成本（预估实时消耗/付费次数），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $costPerPay
     * @return self
     */
    public function setCostPerPay(?int $costPerPay): self
    {
        $this->costPerPay = $costPerPay;
        return $this;
    }

    /**
     * 注册成本（预估实时消耗/注册量），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getCostPerRegister(): ?int
    {
        return $this->costPerRegister;
    }

    /**
     * 注册成本（预估实时消耗/注册量），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $costPerRegister
     * @return self
     */
    public function setCostPerRegister(?int $costPerRegister): self
    {
        $this->costPerRegister = $costPerRegister;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 安装完成量，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getInstallFinishCnt(): ?int
    {
        return $this->installFinishCnt;
    }

    /**
     * 安装完成量，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $installFinishCnt
     * @return self
     */
    public function setInstallFinishCnt(?int $installFinishCnt): self
    {
        $this->installFinishCnt = $installFinishCnt;
        return $this;
    }

    /**
     * 互动数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getInteract(): ?int
    {
        return $this->interact;
    }

    /**
     * 互动数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $interact
     * @return self
     */
    public function setInteract(?int $interact): self
    {
        $this->interact = $interact;
        return $this;
    }

    /**
     * 互动率，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getInteractRate(): ?int
    {
        return $this->interactRate;
    }

    /**
     * 互动率，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $interactRate
     * @return self
     */
    public function setInteractRate(?int $interactRate): self
    {
        $this->interactRate = $interactRate;
        return $this;
    }

    /**
     * 视频id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskItemListV2DataStatInfoItemStatus
     */
    public function getItemStatus(): ?string
    {
        return $this->itemStatus;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskItemListV2DataStatInfoItemStatus $itemStatus
     * @return self
     */
    public function setItemStatus(?string $itemStatus): self
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getItemTitle(): ?string
    {
        return $this->itemTitle;
    }

    /**
     * 视频标题
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle(?string $itemTitle): self
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * 视频链接
     * @return string
     */
    public function getItemUrl(): ?string
    {
        return $this->itemUrl;
    }

    /**
     * 视频链接
     * @param string $itemUrl
     * @return self
     */
    public function setItemUrl(?string $itemUrl): self
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * 点赞数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getLike(): ?int
    {
        return $this->like;
    }

    /**
     * 点赞数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $like
     * @return self
     */
    public function setLike(?int $like): self
    {
        $this->like = $like;
        return $this;
    }

    /**
     * 自然点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getNaturalClickRate(): ?float
    {
        return $this->naturalClickRate;
    }

    /**
     * 自然点击率，仅部分客户返回，如有疑问可咨询对接人员
     * @param float $naturalClickRate
     * @return self
     */
    public function setNaturalClickRate(?float $naturalClickRate): self
    {
        $this->naturalClickRate = $naturalClickRate;
        return $this;
    }

    /**
     * 预估实时自然消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getNaturalCost(): ?int
    {
        return $this->naturalCost;
    }

    /**
     * 预估实时自然消耗，实时更新，单位：元*100000，建议获取后除以100000展示为元单位，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $naturalCost
     * @return self
     */
    public function setNaturalCost(?int $naturalCost): self
    {
        $this->naturalCost = $naturalCost;
        return $this;
    }

    /**
     * 次留数，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getNextDayOpenCnt(): ?int
    {
        return $this->nextDayOpenCnt;
    }

    /**
     * 次留数，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $nextDayOpenCnt
     * @return self
     */
    public function setNextDayOpenCnt(?int $nextDayOpenCnt): self
    {
        $this->nextDayOpenCnt = $nextDayOpenCnt;
        return $this;
    }

    /**
     * 次留率（次留数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getNextDayOpenRate(): ?float
    {
        return $this->nextDayOpenRate;
    }

    /**
     * 次留率（次留数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @param float $nextDayOpenRate
     * @return self
     */
    public function setNextDayOpenRate(?float $nextDayOpenRate): self
    {
        $this->nextDayOpenRate = $nextDayOpenRate;
        return $this;
    }

    /**
     * 激活当日付费ROI（激活当日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPay1dayRoi(): ?int
    {
        return $this->pay1dayRoi;
    }

    /**
     * 激活当日付费ROI（激活当日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $pay1dayRoi
     * @return self
     */
    public function setPay1dayRoi(?int $pay1dayRoi): self
    {
        $this->pay1dayRoi = $pay1dayRoi;
        return $this;
    }

    /**
     * 激活后7日付费ROI（激活后7日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPay7daysRoi(): ?int
    {
        return $this->pay7daysRoi;
    }

    /**
     * 激活后7日付费ROI（激活后7日付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $pay7daysRoi
     * @return self
     */
    public function setPay7daysRoi(?int $pay7daysRoi): self
    {
        $this->pay7daysRoi = $pay7daysRoi;
        return $this;
    }

    /**
     * 回传的付费金额，回传后更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @return int
     */
    public function getPayAmount(): ?int
    {
        return $this->payAmount;
    }

    /**
     * 回传的付费金额，回传后更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @param int $payAmount
     * @return self
     */
    public function setPayAmount(?int $payAmount): self
    {
        $this->payAmount = $payAmount;
        return $this;
    }

    /**
     * 激活当日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPayAmount1day(): ?int
    {
        return $this->payAmount1day;
    }

    /**
     * 激活当日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $payAmount1day
     * @return self
     */
    public function setPayAmount1day(?int $payAmount1day): self
    {
        $this->payAmount1day = $payAmount1day;
        return $this;
    }

    /**
     * 激活后7日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPayAmount7days(): ?int
    {
        return $this->payAmount7days;
    }

    /**
     * 激活后7日付费金额，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $payAmount7days
     * @return self
     */
    public function setPayAmount7days(?int $payAmount7days): self
    {
        $this->payAmount7days = $payAmount7days;
        return $this;
    }

    /**
     * 付费次数，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPayCnt(): ?int
    {
        return $this->payCnt;
    }

    /**
     * 付费次数，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $payCnt
     * @return self
     */
    public function setPayCnt(?int $payCnt): self
    {
        $this->payCnt = $payCnt;
        return $this;
    }

    /**
     * 付费率（付费次数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getPayRate(): ?float
    {
        return $this->payRate;
    }

    /**
     * 付费率（付费次数/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @param float $payRate
     * @return self
     */
    public function setPayRate(?float $payRate): self
    {
        $this->payRate = $payRate;
        return $this;
    }

    /**
     * 付费ROI（付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getPayRoi(): ?int
    {
        return $this->payRoi;
    }

    /**
     * 付费ROI（付费金额/预估实时消耗），仅部分客户返回，如有疑问可咨询对接人员
     * @param int $payRoi
     * @return self
     */
    public function setPayRoi(?int $payRoi): self
    {
        $this->payRoi = $payRoi;
        return $this;
    }

    /**
     * 3s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getPlay3sRate(): ?float
    {
        return $this->play3sRate;
    }

    /**
     * 3s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @param float $play3sRate
     * @return self
     */
    public function setPlay3sRate(?float $play3sRate): self
    {
        $this->play3sRate = $play3sRate;
        return $this;
    }

    /**
     * 5s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getPlay5sRate(): ?float
    {
        return $this->play5sRate;
    }

    /**
     * 5s播放率，仅部分客户返回，如有疑问可咨询对接人员
     * @param float $play5sRate
     * @return self
     */
    public function setPlay5sRate(?float $play5sRate): self
    {
        $this->play5sRate = $play5sRate;
        return $this;
    }

    /**
     * 播放量，T+1更新
     * @return int
     */
    public function getPlayCnt(): ?int
    {
        return $this->playCnt;
    }

    /**
     * 播放量，T+1更新
     * @param int $playCnt
     * @return self
     */
    public function setPlayCnt(?int $playCnt): self
    {
        $this->playCnt = $playCnt;
        return $this;
    }

    /**
     * 完播率，仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getPlayFinishRate(): ?float
    {
        return $this->playFinishRate;
    }

    /**
     * 完播率，仅部分客户返回，如有疑问可咨询对接人员
     * @param float $playFinishRate
     * @return self
     */
    public function setPlayFinishRate(?float $playFinishRate): self
    {
        $this->playFinishRate = $playFinishRate;
        return $this;
    }

    /**
     * 注册量，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getRegisterCnt(): ?int
    {
        return $this->registerCnt;
    }

    /**
     * 注册量，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $registerCnt
     * @return self
     */
    public function setRegisterCnt(?int $registerCnt): self
    {
        $this->registerCnt = $registerCnt;
        return $this;
    }

    /**
     * 注册率（注册量/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @return float
     */
    public function getRegisterRate(): ?float
    {
        return $this->registerRate;
    }

    /**
     * 注册率（注册量/激活量），仅部分客户返回，如有疑问可咨询对接人员
     * @param float $registerRate
     * @return self
     */
    public function setRegisterRate(?float $registerRate): self
    {
        $this->registerRate = $registerRate;
        return $this;
    }

    /**
     * 视频发布日期
     * @return int
     */
    public function getReleaseTime(): ?int
    {
        return $this->releaseTime;
    }

    /**
     * 视频发布日期
     * @param int $releaseTime
     * @return self
     */
    public function setReleaseTime(?int $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * 累计已结算消耗，T+1更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @return int
     */
    public function getSettledCost(): ?int
    {
        return $this->settledCost;
    }

    /**
     * 累计已结算消耗，T+1更新，单位：元*100000，建议获取后除以100000展示为元单位
     * @param int $settledCost
     * @return self
     */
    public function setSettledCost(?int $settledCost): self
    {
        $this->settledCost = $settledCost;
        return $this;
    }

    /**
     * 分享数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @return int
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

    /**
     * 分享数，T+1更新，仅部分客户返回，如有疑问可咨询对接人员
     * @param int $share
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;
        return $this;
    }

    /**
     * 总展示量，实时更新（自然流量组件展示量+广告展示量）
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * 总展示量，实时更新（自然流量组件展示量+广告展示量）
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
        return $this;
    }

    /**
     * 客户的星图id
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户的星图id
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 数据日期，格式yyyy-mm-dd，只和播放量、转化数、预估消耗相关
     * @return string
     */
    public function getStatDate(): ?string
    {
        return $this->statDate;
    }

    /**
     * 数据日期，格式yyyy-mm-dd，只和播放量、转化数、预估消耗相关
     * @param string $statDate
     * @return self
     */
    public function setStatDate(?string $statDate): self
    {
        $this->statDate = $statDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activeCnt !== null) {
            $result['active_cnt'] = $this->activeCnt;
        }
        if ($this->activePayCnt !== null) {
            $result['active_pay_cnt'] = $this->activePayCnt;
        }
        if ($this->activePayRate !== null) {
            $result['active_pay_rate'] = $this->activePayRate;
        }
        if ($this->adClickRate !== null) {
            $result['ad_click_rate'] = $this->adClickRate;
        }
        if ($this->adCost !== null) {
            $result['ad_cost'] = $this->adCost;
        }
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorNickName !== null) {
            $result['author_nick_name'] = $this->authorNickName;
        }
        if ($this->avtiveRate !== null) {
            $result['avtive_rate'] = $this->avtiveRate;
        }
        if ($this->click !== null) {
            $result['click'] = $this->click;
        }
        if ($this->clickRate !== null) {
            $result['click_rate'] = $this->clickRate;
        }
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->costPerActive !== null) {
            $result['cost_per_active'] = $this->costPerActive;
        }
        if ($this->costPerActivePay !== null) {
            $result['cost_per_active_pay'] = $this->costPerActivePay;
        }
        if ($this->costPerNextDayOpen !== null) {
            $result['cost_per_next_day_open'] = $this->costPerNextDayOpen;
        }
        if ($this->costPerPay !== null) {
            $result['cost_per_pay'] = $this->costPerPay;
        }
        if ($this->costPerRegister !== null) {
            $result['cost_per_register'] = $this->costPerRegister;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->installFinishCnt !== null) {
            $result['install_finish_cnt'] = $this->installFinishCnt;
        }
        if ($this->interact !== null) {
            $result['interact'] = $this->interact;
        }
        if ($this->interactRate !== null) {
            $result['interact_rate'] = $this->interactRate;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->itemStatus !== null) {
            $result['item_status'] = $this->itemStatus;
        }
        if ($this->itemTitle !== null) {
            $result['item_title'] = $this->itemTitle;
        }
        if ($this->itemUrl !== null) {
            $result['item_url'] = $this->itemUrl;
        }
        if ($this->like !== null) {
            $result['like'] = $this->like;
        }
        if ($this->naturalClickRate !== null) {
            $result['natural_click_rate'] = $this->naturalClickRate;
        }
        if ($this->naturalCost !== null) {
            $result['natural_cost'] = $this->naturalCost;
        }
        if ($this->nextDayOpenCnt !== null) {
            $result['next_day_open_cnt'] = $this->nextDayOpenCnt;
        }
        if ($this->nextDayOpenRate !== null) {
            $result['next_day_open_rate'] = $this->nextDayOpenRate;
        }
        if ($this->pay1dayRoi !== null) {
            $result['pay_1day_roi'] = $this->pay1dayRoi;
        }
        if ($this->pay7daysRoi !== null) {
            $result['pay_7days_roi'] = $this->pay7daysRoi;
        }
        if ($this->payAmount !== null) {
            $result['pay_amount'] = $this->payAmount;
        }
        if ($this->payAmount1day !== null) {
            $result['pay_amount_1day'] = $this->payAmount1day;
        }
        if ($this->payAmount7days !== null) {
            $result['pay_amount_7days'] = $this->payAmount7days;
        }
        if ($this->payCnt !== null) {
            $result['pay_cnt'] = $this->payCnt;
        }
        if ($this->payRate !== null) {
            $result['pay_rate'] = $this->payRate;
        }
        if ($this->payRoi !== null) {
            $result['pay_roi'] = $this->payRoi;
        }
        if ($this->play3sRate !== null) {
            $result['play_3s_rate'] = $this->play3sRate;
        }
        if ($this->play5sRate !== null) {
            $result['play_5s_rate'] = $this->play5sRate;
        }
        if ($this->playCnt !== null) {
            $result['play_cnt'] = $this->playCnt;
        }
        if ($this->playFinishRate !== null) {
            $result['play_finish_rate'] = $this->playFinishRate;
        }
        if ($this->registerCnt !== null) {
            $result['register_cnt'] = $this->registerCnt;
        }
        if ($this->registerRate !== null) {
            $result['register_rate'] = $this->registerRate;
        }
        if ($this->releaseTime !== null) {
            $result['release_time'] = $this->releaseTime;
        }
        if ($this->settledCost !== null) {
            $result['settled_cost'] = $this->settledCost;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->statDate !== null) {
            $result['stat_date'] = $this->statDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['active_cnt'] ?? null) !== null) {
            $obj->activeCnt = (int) $v;
        }
        if (($v = $data['active_pay_cnt'] ?? null) !== null) {
            $obj->activePayCnt = (int) $v;
        }
        if (($v = $data['active_pay_rate'] ?? null) !== null) {
            $obj->activePayRate = (float) $v;
        }
        if (($v = $data['ad_click_rate'] ?? null) !== null) {
            $obj->adClickRate = (float) $v;
        }
        if (($v = $data['ad_cost'] ?? null) !== null) {
            $obj->adCost = (int) $v;
        }
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_nick_name'] ?? null) !== null) {
            $obj->authorNickName = (string) $v;
        }
        if (($v = $data['avtive_rate'] ?? null) !== null) {
            $obj->avtiveRate = (float) $v;
        }
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['click_rate'] ?? null) !== null) {
            $obj->clickRate = (float) $v;
        }
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (int) $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (int) $v;
        }
        if (($v = $data['cost_per_active'] ?? null) !== null) {
            $obj->costPerActive = (int) $v;
        }
        if (($v = $data['cost_per_active_pay'] ?? null) !== null) {
            $obj->costPerActivePay = (int) $v;
        }
        if (($v = $data['cost_per_next_day_open'] ?? null) !== null) {
            $obj->costPerNextDayOpen = (int) $v;
        }
        if (($v = $data['cost_per_pay'] ?? null) !== null) {
            $obj->costPerPay = (int) $v;
        }
        if (($v = $data['cost_per_register'] ?? null) !== null) {
            $obj->costPerRegister = (int) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['install_finish_cnt'] ?? null) !== null) {
            $obj->installFinishCnt = (int) $v;
        }
        if (($v = $data['interact'] ?? null) !== null) {
            $obj->interact = (int) $v;
        }
        if (($v = $data['interact_rate'] ?? null) !== null) {
            $obj->interactRate = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['item_status'] ?? null) !== null) {
            $obj->itemStatus = (string) $v;
        }
        if (($v = $data['item_title'] ?? null) !== null) {
            $obj->itemTitle = (string) $v;
        }
        if (($v = $data['item_url'] ?? null) !== null) {
            $obj->itemUrl = (string) $v;
        }
        if (($v = $data['like'] ?? null) !== null) {
            $obj->like = (int) $v;
        }
        if (($v = $data['natural_click_rate'] ?? null) !== null) {
            $obj->naturalClickRate = (float) $v;
        }
        if (($v = $data['natural_cost'] ?? null) !== null) {
            $obj->naturalCost = (int) $v;
        }
        if (($v = $data['next_day_open_cnt'] ?? null) !== null) {
            $obj->nextDayOpenCnt = (int) $v;
        }
        if (($v = $data['next_day_open_rate'] ?? null) !== null) {
            $obj->nextDayOpenRate = (float) $v;
        }
        if (($v = $data['pay_1day_roi'] ?? null) !== null) {
            $obj->pay1dayRoi = (int) $v;
        }
        if (($v = $data['pay_7days_roi'] ?? null) !== null) {
            $obj->pay7daysRoi = (int) $v;
        }
        if (($v = $data['pay_amount'] ?? null) !== null) {
            $obj->payAmount = (int) $v;
        }
        if (($v = $data['pay_amount_1day'] ?? null) !== null) {
            $obj->payAmount1day = (int) $v;
        }
        if (($v = $data['pay_amount_7days'] ?? null) !== null) {
            $obj->payAmount7days = (int) $v;
        }
        if (($v = $data['pay_cnt'] ?? null) !== null) {
            $obj->payCnt = (int) $v;
        }
        if (($v = $data['pay_rate'] ?? null) !== null) {
            $obj->payRate = (float) $v;
        }
        if (($v = $data['pay_roi'] ?? null) !== null) {
            $obj->payRoi = (int) $v;
        }
        if (($v = $data['play_3s_rate'] ?? null) !== null) {
            $obj->play3sRate = (float) $v;
        }
        if (($v = $data['play_5s_rate'] ?? null) !== null) {
            $obj->play5sRate = (float) $v;
        }
        if (($v = $data['play_cnt'] ?? null) !== null) {
            $obj->playCnt = (int) $v;
        }
        if (($v = $data['play_finish_rate'] ?? null) !== null) {
            $obj->playFinishRate = (float) $v;
        }
        if (($v = $data['register_cnt'] ?? null) !== null) {
            $obj->registerCnt = (int) $v;
        }
        if (($v = $data['register_rate'] ?? null) !== null) {
            $obj->registerRate = (float) $v;
        }
        if (($v = $data['release_time'] ?? null) !== null) {
            $obj->releaseTime = (int) $v;
        }
        if (($v = $data['settled_cost'] ?? null) !== null) {
            $obj->settledCost = (int) $v;
        }
        if (($v = $data['share'] ?? null) !== null) {
            $obj->share = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['stat_date'] ?? null) !== null) {
            $obj->statDate = (string) $v;
        }
        return $obj;
    }
}
