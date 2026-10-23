<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProviderTaskItemListV2ResponseDataItemListInner implements \JsonSerializable
{
    /**
     * 整体消耗，单位：厘
     * @var int
     */
    protected ?int $adCost = null;

    /**
     * 达人预估投放分成收益，单位：厘
     * @var int
     */
    protected ?int $authorEstimatedAdShareIncome = null;

    /**
     * 达人预估新手激励，单位：厘
     * @var int
     */
    protected ?int $authorEstimatedNewbieIncentive = null;

    /**
     * 达人预估收益，单位：厘
     * @var int
     */
    protected ?int $authorEstimatedTotalIncome = null;

    /**
     * 星图达人ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人预估投放分成收益-推直播，单位：厘
     * @var int
     */
    protected ?int $authorLiveEstimatedAdShareIncome = null;

    /**
     * 达人已结算投放分成收益-推直播，单位：厘
     * @var int
     */
    protected ?int $authorLiveSettledAdIncome = null;

    /**
     * 星图达人昵称
     * @var string
     */
    protected ?string $authorNickName = null;

    /**
     * 达人预估投放分成收益-推商品，单位：厘
     * @var int
     */
    protected ?int $authorProductEstimatedAdShareIncome = null;

    /**
     * 达人已结算投放分成收益-推商品，单位：厘
     * @var int
     */
    protected ?int $authorProductSettledAdIncome = null;

    /**
     * 达人已结算收益，单位：厘
     * @var int
     */
    protected ?int $authorSettledIncome = null;

    /**
     * 达人已结算新手激励，单位：厘
     * @var int
     */
    protected ?int $authorSettledNewbieIncentive = null;

    /**
     * 视频平均观看时长，单位：秒
     * @var int
     */
    protected ?int $avgWatchDuration = null;

    /**
     * 视频评论数
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * 达人UID
     * @var int
     */
    protected ?int $coreUserId = null;

    /**
     * 视频完播率，单位：百分数 x 100，展示时需 /100 后加 %
     * @var int
     */
    protected ?int $finishRate = null;

    /**
     * 视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $itemTitle = null;

    /**
     * 视频URL
     * @var string
     */
    protected ?string $itemUrl = null;

    /**
     * 视频点赞数
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * 整体消耗-推直播，单位：厘
     * @var int
     */
    protected ?int $liveAdCost = null;

    /**
     * 展示次数-推直播
     * @var int
     */
    protected ?int $liveAdShowCnt = null;

    /**
     * 素材ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 视频10秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @var int
     */
    protected ?int $play10sRate = null;

    /**
     * 视频2秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @var int
     */
    protected ?int $play2sRate = null;

    /**
     * 视频3秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @var int
     */
    protected ?int $play3sRate = null;

    /**
     * 视频5秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @var int
     */
    protected ?int $play5sRate = null;

    /**
     * 视频播放数
     * @var int
     */
    protected ?int $playCnt = null;

    /**
     * 整体消耗-推商品，单位：厘
     * @var int
     */
    protected ?int $productAdCost = null;

    /**
     * 展示次数-推商品
     * @var int
     */
    protected ?int $productAdShowCnt = null;

    /**
     * 关联推商品计划数
     * @var int
     */
    protected ?int $productPlanCnt = null;

    /**
     * 服务商预估总收益，单位：厘
     * @var int
     */
    protected ?int $providerEstimatedIncome = null;

    /**
     * 服务商预估总收益-推直播，单位：厘
     * @var int
     */
    protected ?int $providerLiveEstimatedIncome = null;

    /**
     * 服务商已结算收益-推直播，单位：厘
     * @var int
     */
    protected ?int $providerLiveSettledIncome = null;

    /**
     * 服务商预估总收益-推商品，单位：厘
     * @var int
     */
    protected ?int $providerProductEstimatedIncome = null;

    /**
     * 服务商已结算收益-推商品，单位：厘
     * @var int
     */
    protected ?int $providerProductSettledIncome = null;

    /**
     * 服务商已结算收益，单位：厘
     * @var int
     */
    protected ?int $providerSettledIncome = null;

    /**
     * 视频发布时间，秒级时间戳
     * @var int
     */
    protected ?int $publishTime = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 整体消耗，单位：厘
     * @return int
     */
    public function getAdCost(): ?int
    {
        return $this->adCost;
    }

    /**
     * 整体消耗，单位：厘
     * @param int $adCost
     * @return self
     */
    public function setAdCost(?int $adCost): self
    {
        $this->adCost = $adCost;
        return $this;
    }

    /**
     * 达人预估投放分成收益，单位：厘
     * @return int
     */
    public function getAuthorEstimatedAdShareIncome(): ?int
    {
        return $this->authorEstimatedAdShareIncome;
    }

    /**
     * 达人预估投放分成收益，单位：厘
     * @param int $authorEstimatedAdShareIncome
     * @return self
     */
    public function setAuthorEstimatedAdShareIncome(?int $authorEstimatedAdShareIncome): self
    {
        $this->authorEstimatedAdShareIncome = $authorEstimatedAdShareIncome;
        return $this;
    }

    /**
     * 达人预估新手激励，单位：厘
     * @return int
     */
    public function getAuthorEstimatedNewbieIncentive(): ?int
    {
        return $this->authorEstimatedNewbieIncentive;
    }

    /**
     * 达人预估新手激励，单位：厘
     * @param int $authorEstimatedNewbieIncentive
     * @return self
     */
    public function setAuthorEstimatedNewbieIncentive(?int $authorEstimatedNewbieIncentive): self
    {
        $this->authorEstimatedNewbieIncentive = $authorEstimatedNewbieIncentive;
        return $this;
    }

    /**
     * 达人预估收益，单位：厘
     * @return int
     */
    public function getAuthorEstimatedTotalIncome(): ?int
    {
        return $this->authorEstimatedTotalIncome;
    }

    /**
     * 达人预估收益，单位：厘
     * @param int $authorEstimatedTotalIncome
     * @return self
     */
    public function setAuthorEstimatedTotalIncome(?int $authorEstimatedTotalIncome): self
    {
        $this->authorEstimatedTotalIncome = $authorEstimatedTotalIncome;
        return $this;
    }

    /**
     * 星图达人ID
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 星图达人ID
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人预估投放分成收益-推直播，单位：厘
     * @return int
     */
    public function getAuthorLiveEstimatedAdShareIncome(): ?int
    {
        return $this->authorLiveEstimatedAdShareIncome;
    }

    /**
     * 达人预估投放分成收益-推直播，单位：厘
     * @param int $authorLiveEstimatedAdShareIncome
     * @return self
     */
    public function setAuthorLiveEstimatedAdShareIncome(?int $authorLiveEstimatedAdShareIncome): self
    {
        $this->authorLiveEstimatedAdShareIncome = $authorLiveEstimatedAdShareIncome;
        return $this;
    }

    /**
     * 达人已结算投放分成收益-推直播，单位：厘
     * @return int
     */
    public function getAuthorLiveSettledAdIncome(): ?int
    {
        return $this->authorLiveSettledAdIncome;
    }

    /**
     * 达人已结算投放分成收益-推直播，单位：厘
     * @param int $authorLiveSettledAdIncome
     * @return self
     */
    public function setAuthorLiveSettledAdIncome(?int $authorLiveSettledAdIncome): self
    {
        $this->authorLiveSettledAdIncome = $authorLiveSettledAdIncome;
        return $this;
    }

    /**
     * 星图达人昵称
     * @return string
     */
    public function getAuthorNickName(): ?string
    {
        return $this->authorNickName;
    }

    /**
     * 星图达人昵称
     * @param string $authorNickName
     * @return self
     */
    public function setAuthorNickName(?string $authorNickName): self
    {
        $this->authorNickName = $authorNickName;
        return $this;
    }

    /**
     * 达人预估投放分成收益-推商品，单位：厘
     * @return int
     */
    public function getAuthorProductEstimatedAdShareIncome(): ?int
    {
        return $this->authorProductEstimatedAdShareIncome;
    }

    /**
     * 达人预估投放分成收益-推商品，单位：厘
     * @param int $authorProductEstimatedAdShareIncome
     * @return self
     */
    public function setAuthorProductEstimatedAdShareIncome(?int $authorProductEstimatedAdShareIncome): self
    {
        $this->authorProductEstimatedAdShareIncome = $authorProductEstimatedAdShareIncome;
        return $this;
    }

    /**
     * 达人已结算投放分成收益-推商品，单位：厘
     * @return int
     */
    public function getAuthorProductSettledAdIncome(): ?int
    {
        return $this->authorProductSettledAdIncome;
    }

    /**
     * 达人已结算投放分成收益-推商品，单位：厘
     * @param int $authorProductSettledAdIncome
     * @return self
     */
    public function setAuthorProductSettledAdIncome(?int $authorProductSettledAdIncome): self
    {
        $this->authorProductSettledAdIncome = $authorProductSettledAdIncome;
        return $this;
    }

    /**
     * 达人已结算收益，单位：厘
     * @return int
     */
    public function getAuthorSettledIncome(): ?int
    {
        return $this->authorSettledIncome;
    }

    /**
     * 达人已结算收益，单位：厘
     * @param int $authorSettledIncome
     * @return self
     */
    public function setAuthorSettledIncome(?int $authorSettledIncome): self
    {
        $this->authorSettledIncome = $authorSettledIncome;
        return $this;
    }

    /**
     * 达人已结算新手激励，单位：厘
     * @return int
     */
    public function getAuthorSettledNewbieIncentive(): ?int
    {
        return $this->authorSettledNewbieIncentive;
    }

    /**
     * 达人已结算新手激励，单位：厘
     * @param int $authorSettledNewbieIncentive
     * @return self
     */
    public function setAuthorSettledNewbieIncentive(?int $authorSettledNewbieIncentive): self
    {
        $this->authorSettledNewbieIncentive = $authorSettledNewbieIncentive;
        return $this;
    }

    /**
     * 视频平均观看时长，单位：秒
     * @return int
     */
    public function getAvgWatchDuration(): ?int
    {
        return $this->avgWatchDuration;
    }

    /**
     * 视频平均观看时长，单位：秒
     * @param int $avgWatchDuration
     * @return self
     */
    public function setAvgWatchDuration(?int $avgWatchDuration): self
    {
        $this->avgWatchDuration = $avgWatchDuration;
        return $this;
    }

    /**
     * 视频评论数
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * 视频评论数
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * 达人UID
     * @return int
     */
    public function getCoreUserId(): ?int
    {
        return $this->coreUserId;
    }

    /**
     * 达人UID
     * @param int $coreUserId
     * @return self
     */
    public function setCoreUserId(?int $coreUserId): self
    {
        $this->coreUserId = $coreUserId;
        return $this;
    }

    /**
     * 视频完播率，单位：百分数 x 100，展示时需 /100 后加 %
     * @return int
     */
    public function getFinishRate(): ?int
    {
        return $this->finishRate;
    }

    /**
     * 视频完播率，单位：百分数 x 100，展示时需 /100 后加 %
     * @param int $finishRate
     * @return self
     */
    public function setFinishRate(?int $finishRate): self
    {
        $this->finishRate = $finishRate;
        return $this;
    }

    /**
     * 视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
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
     * 视频URL
     * @return string
     */
    public function getItemUrl(): ?string
    {
        return $this->itemUrl;
    }

    /**
     * 视频URL
     * @param string $itemUrl
     * @return self
     */
    public function setItemUrl(?string $itemUrl): self
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * 视频点赞数
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * 视频点赞数
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * 整体消耗-推直播，单位：厘
     * @return int
     */
    public function getLiveAdCost(): ?int
    {
        return $this->liveAdCost;
    }

    /**
     * 整体消耗-推直播，单位：厘
     * @param int $liveAdCost
     * @return self
     */
    public function setLiveAdCost(?int $liveAdCost): self
    {
        $this->liveAdCost = $liveAdCost;
        return $this;
    }

    /**
     * 展示次数-推直播
     * @return int
     */
    public function getLiveAdShowCnt(): ?int
    {
        return $this->liveAdShowCnt;
    }

    /**
     * 展示次数-推直播
     * @param int $liveAdShowCnt
     * @return self
     */
    public function setLiveAdShowCnt(?int $liveAdShowCnt): self
    {
        $this->liveAdShowCnt = $liveAdShowCnt;
        return $this;
    }

    /**
     * 素材ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 视频10秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @return int
     */
    public function getPlay10sRate(): ?int
    {
        return $this->play10sRate;
    }

    /**
     * 视频10秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @param int $play10sRate
     * @return self
     */
    public function setPlay10sRate(?int $play10sRate): self
    {
        $this->play10sRate = $play10sRate;
        return $this;
    }

    /**
     * 视频2秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @return int
     */
    public function getPlay2sRate(): ?int
    {
        return $this->play2sRate;
    }

    /**
     * 视频2秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @param int $play2sRate
     * @return self
     */
    public function setPlay2sRate(?int $play2sRate): self
    {
        $this->play2sRate = $play2sRate;
        return $this;
    }

    /**
     * 视频3秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @return int
     */
    public function getPlay3sRate(): ?int
    {
        return $this->play3sRate;
    }

    /**
     * 视频3秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @param int $play3sRate
     * @return self
     */
    public function setPlay3sRate(?int $play3sRate): self
    {
        $this->play3sRate = $play3sRate;
        return $this;
    }

    /**
     * 视频5秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @return int
     */
    public function getPlay5sRate(): ?int
    {
        return $this->play5sRate;
    }

    /**
     * 视频5秒播放率，单位：百分数 x 100，展示时需 /100 后加 %
     * @param int $play5sRate
     * @return self
     */
    public function setPlay5sRate(?int $play5sRate): self
    {
        $this->play5sRate = $play5sRate;
        return $this;
    }

    /**
     * 视频播放数
     * @return int
     */
    public function getPlayCnt(): ?int
    {
        return $this->playCnt;
    }

    /**
     * 视频播放数
     * @param int $playCnt
     * @return self
     */
    public function setPlayCnt(?int $playCnt): self
    {
        $this->playCnt = $playCnt;
        return $this;
    }

    /**
     * 整体消耗-推商品，单位：厘
     * @return int
     */
    public function getProductAdCost(): ?int
    {
        return $this->productAdCost;
    }

    /**
     * 整体消耗-推商品，单位：厘
     * @param int $productAdCost
     * @return self
     */
    public function setProductAdCost(?int $productAdCost): self
    {
        $this->productAdCost = $productAdCost;
        return $this;
    }

    /**
     * 展示次数-推商品
     * @return int
     */
    public function getProductAdShowCnt(): ?int
    {
        return $this->productAdShowCnt;
    }

    /**
     * 展示次数-推商品
     * @param int $productAdShowCnt
     * @return self
     */
    public function setProductAdShowCnt(?int $productAdShowCnt): self
    {
        $this->productAdShowCnt = $productAdShowCnt;
        return $this;
    }

    /**
     * 关联推商品计划数
     * @return int
     */
    public function getProductPlanCnt(): ?int
    {
        return $this->productPlanCnt;
    }

    /**
     * 关联推商品计划数
     * @param int $productPlanCnt
     * @return self
     */
    public function setProductPlanCnt(?int $productPlanCnt): self
    {
        $this->productPlanCnt = $productPlanCnt;
        return $this;
    }

    /**
     * 服务商预估总收益，单位：厘
     * @return int
     */
    public function getProviderEstimatedIncome(): ?int
    {
        return $this->providerEstimatedIncome;
    }

    /**
     * 服务商预估总收益，单位：厘
     * @param int $providerEstimatedIncome
     * @return self
     */
    public function setProviderEstimatedIncome(?int $providerEstimatedIncome): self
    {
        $this->providerEstimatedIncome = $providerEstimatedIncome;
        return $this;
    }

    /**
     * 服务商预估总收益-推直播，单位：厘
     * @return int
     */
    public function getProviderLiveEstimatedIncome(): ?int
    {
        return $this->providerLiveEstimatedIncome;
    }

    /**
     * 服务商预估总收益-推直播，单位：厘
     * @param int $providerLiveEstimatedIncome
     * @return self
     */
    public function setProviderLiveEstimatedIncome(?int $providerLiveEstimatedIncome): self
    {
        $this->providerLiveEstimatedIncome = $providerLiveEstimatedIncome;
        return $this;
    }

    /**
     * 服务商已结算收益-推直播，单位：厘
     * @return int
     */
    public function getProviderLiveSettledIncome(): ?int
    {
        return $this->providerLiveSettledIncome;
    }

    /**
     * 服务商已结算收益-推直播，单位：厘
     * @param int $providerLiveSettledIncome
     * @return self
     */
    public function setProviderLiveSettledIncome(?int $providerLiveSettledIncome): self
    {
        $this->providerLiveSettledIncome = $providerLiveSettledIncome;
        return $this;
    }

    /**
     * 服务商预估总收益-推商品，单位：厘
     * @return int
     */
    public function getProviderProductEstimatedIncome(): ?int
    {
        return $this->providerProductEstimatedIncome;
    }

    /**
     * 服务商预估总收益-推商品，单位：厘
     * @param int $providerProductEstimatedIncome
     * @return self
     */
    public function setProviderProductEstimatedIncome(?int $providerProductEstimatedIncome): self
    {
        $this->providerProductEstimatedIncome = $providerProductEstimatedIncome;
        return $this;
    }

    /**
     * 服务商已结算收益-推商品，单位：厘
     * @return int
     */
    public function getProviderProductSettledIncome(): ?int
    {
        return $this->providerProductSettledIncome;
    }

    /**
     * 服务商已结算收益-推商品，单位：厘
     * @param int $providerProductSettledIncome
     * @return self
     */
    public function setProviderProductSettledIncome(?int $providerProductSettledIncome): self
    {
        $this->providerProductSettledIncome = $providerProductSettledIncome;
        return $this;
    }

    /**
     * 服务商已结算收益，单位：厘
     * @return int
     */
    public function getProviderSettledIncome(): ?int
    {
        return $this->providerSettledIncome;
    }

    /**
     * 服务商已结算收益，单位：厘
     * @param int $providerSettledIncome
     * @return self
     */
    public function setProviderSettledIncome(?int $providerSettledIncome): self
    {
        $this->providerSettledIncome = $providerSettledIncome;
        return $this;
    }

    /**
     * 视频发布时间，秒级时间戳
     * @return int
     */
    public function getPublishTime(): ?int
    {
        return $this->publishTime;
    }

    /**
     * 视频发布时间，秒级时间戳
     * @param int $publishTime
     * @return self
     */
    public function setPublishTime(?int $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 任务ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCost !== null) {
            $result['ad_cost'] = $this->adCost;
        }
        if ($this->authorEstimatedAdShareIncome !== null) {
            $result['author_estimated_ad_share_income'] = $this->authorEstimatedAdShareIncome;
        }
        if ($this->authorEstimatedNewbieIncentive !== null) {
            $result['author_estimated_newbie_incentive'] = $this->authorEstimatedNewbieIncentive;
        }
        if ($this->authorEstimatedTotalIncome !== null) {
            $result['author_estimated_total_income'] = $this->authorEstimatedTotalIncome;
        }
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorLiveEstimatedAdShareIncome !== null) {
            $result['author_live_estimated_ad_share_income'] = $this->authorLiveEstimatedAdShareIncome;
        }
        if ($this->authorLiveSettledAdIncome !== null) {
            $result['author_live_settled_ad_income'] = $this->authorLiveSettledAdIncome;
        }
        if ($this->authorNickName !== null) {
            $result['author_nick_name'] = $this->authorNickName;
        }
        if ($this->authorProductEstimatedAdShareIncome !== null) {
            $result['author_product_estimated_ad_share_income'] = $this->authorProductEstimatedAdShareIncome;
        }
        if ($this->authorProductSettledAdIncome !== null) {
            $result['author_product_settled_ad_income'] = $this->authorProductSettledAdIncome;
        }
        if ($this->authorSettledIncome !== null) {
            $result['author_settled_income'] = $this->authorSettledIncome;
        }
        if ($this->authorSettledNewbieIncentive !== null) {
            $result['author_settled_newbie_incentive'] = $this->authorSettledNewbieIncentive;
        }
        if ($this->avgWatchDuration !== null) {
            $result['avg_watch_duration'] = $this->avgWatchDuration;
        }
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->coreUserId !== null) {
            $result['core_user_id'] = $this->coreUserId;
        }
        if ($this->finishRate !== null) {
            $result['finish_rate'] = $this->finishRate;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->itemTitle !== null) {
            $result['item_title'] = $this->itemTitle;
        }
        if ($this->itemUrl !== null) {
            $result['item_url'] = $this->itemUrl;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->liveAdCost !== null) {
            $result['live_ad_cost'] = $this->liveAdCost;
        }
        if ($this->liveAdShowCnt !== null) {
            $result['live_ad_show_cnt'] = $this->liveAdShowCnt;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->play10sRate !== null) {
            $result['play10s_rate'] = $this->play10sRate;
        }
        if ($this->play2sRate !== null) {
            $result['play2s_rate'] = $this->play2sRate;
        }
        if ($this->play3sRate !== null) {
            $result['play3s_rate'] = $this->play3sRate;
        }
        if ($this->play5sRate !== null) {
            $result['play5s_rate'] = $this->play5sRate;
        }
        if ($this->playCnt !== null) {
            $result['play_cnt'] = $this->playCnt;
        }
        if ($this->productAdCost !== null) {
            $result['product_ad_cost'] = $this->productAdCost;
        }
        if ($this->productAdShowCnt !== null) {
            $result['product_ad_show_cnt'] = $this->productAdShowCnt;
        }
        if ($this->productPlanCnt !== null) {
            $result['product_plan_cnt'] = $this->productPlanCnt;
        }
        if ($this->providerEstimatedIncome !== null) {
            $result['provider_estimated_income'] = $this->providerEstimatedIncome;
        }
        if ($this->providerLiveEstimatedIncome !== null) {
            $result['provider_live_estimated_income'] = $this->providerLiveEstimatedIncome;
        }
        if ($this->providerLiveSettledIncome !== null) {
            $result['provider_live_settled_income'] = $this->providerLiveSettledIncome;
        }
        if ($this->providerProductEstimatedIncome !== null) {
            $result['provider_product_estimated_income'] = $this->providerProductEstimatedIncome;
        }
        if ($this->providerProductSettledIncome !== null) {
            $result['provider_product_settled_income'] = $this->providerProductSettledIncome;
        }
        if ($this->providerSettledIncome !== null) {
            $result['provider_settled_income'] = $this->providerSettledIncome;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_cost'] ?? null) !== null) {
            $obj->adCost = (int) $v;
        }
        if (($v = $data['author_estimated_ad_share_income'] ?? null) !== null) {
            $obj->authorEstimatedAdShareIncome = (int) $v;
        }
        if (($v = $data['author_estimated_newbie_incentive'] ?? null) !== null) {
            $obj->authorEstimatedNewbieIncentive = (int) $v;
        }
        if (($v = $data['author_estimated_total_income'] ?? null) !== null) {
            $obj->authorEstimatedTotalIncome = (int) $v;
        }
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_live_estimated_ad_share_income'] ?? null) !== null) {
            $obj->authorLiveEstimatedAdShareIncome = (int) $v;
        }
        if (($v = $data['author_live_settled_ad_income'] ?? null) !== null) {
            $obj->authorLiveSettledAdIncome = (int) $v;
        }
        if (($v = $data['author_nick_name'] ?? null) !== null) {
            $obj->authorNickName = (string) $v;
        }
        if (($v = $data['author_product_estimated_ad_share_income'] ?? null) !== null) {
            $obj->authorProductEstimatedAdShareIncome = (int) $v;
        }
        if (($v = $data['author_product_settled_ad_income'] ?? null) !== null) {
            $obj->authorProductSettledAdIncome = (int) $v;
        }
        if (($v = $data['author_settled_income'] ?? null) !== null) {
            $obj->authorSettledIncome = (int) $v;
        }
        if (($v = $data['author_settled_newbie_incentive'] ?? null) !== null) {
            $obj->authorSettledNewbieIncentive = (int) $v;
        }
        if (($v = $data['avg_watch_duration'] ?? null) !== null) {
            $obj->avgWatchDuration = (int) $v;
        }
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['core_user_id'] ?? null) !== null) {
            $obj->coreUserId = (int) $v;
        }
        if (($v = $data['finish_rate'] ?? null) !== null) {
            $obj->finishRate = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['item_title'] ?? null) !== null) {
            $obj->itemTitle = (string) $v;
        }
        if (($v = $data['item_url'] ?? null) !== null) {
            $obj->itemUrl = (string) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['live_ad_cost'] ?? null) !== null) {
            $obj->liveAdCost = (int) $v;
        }
        if (($v = $data['live_ad_show_cnt'] ?? null) !== null) {
            $obj->liveAdShowCnt = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['play10s_rate'] ?? null) !== null) {
            $obj->play10sRate = (int) $v;
        }
        if (($v = $data['play2s_rate'] ?? null) !== null) {
            $obj->play2sRate = (int) $v;
        }
        if (($v = $data['play3s_rate'] ?? null) !== null) {
            $obj->play3sRate = (int) $v;
        }
        if (($v = $data['play5s_rate'] ?? null) !== null) {
            $obj->play5sRate = (int) $v;
        }
        if (($v = $data['play_cnt'] ?? null) !== null) {
            $obj->playCnt = (int) $v;
        }
        if (($v = $data['product_ad_cost'] ?? null) !== null) {
            $obj->productAdCost = (int) $v;
        }
        if (($v = $data['product_ad_show_cnt'] ?? null) !== null) {
            $obj->productAdShowCnt = (int) $v;
        }
        if (($v = $data['product_plan_cnt'] ?? null) !== null) {
            $obj->productPlanCnt = (int) $v;
        }
        if (($v = $data['provider_estimated_income'] ?? null) !== null) {
            $obj->providerEstimatedIncome = (int) $v;
        }
        if (($v = $data['provider_live_estimated_income'] ?? null) !== null) {
            $obj->providerLiveEstimatedIncome = (int) $v;
        }
        if (($v = $data['provider_live_settled_income'] ?? null) !== null) {
            $obj->providerLiveSettledIncome = (int) $v;
        }
        if (($v = $data['provider_product_estimated_income'] ?? null) !== null) {
            $obj->providerProductEstimatedIncome = (int) $v;
        }
        if (($v = $data['provider_product_settled_income'] ?? null) !== null) {
            $obj->providerProductSettledIncome = (int) $v;
        }
        if (($v = $data['provider_settled_income'] ?? null) !== null) {
            $obj->providerSettledIncome = (int) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null) {
            $obj->publishTime = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
