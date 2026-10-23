<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $androidActivateCnt = null;

    /**
     * 星图达人ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人名称
     * @var string
     */
    protected ?string $authorNickname = null;

    /**
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * @var int
     */
    protected ?int $componentClickCnt = null;

    /**
     * 预估广告消耗金额 预估广告消耗金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @var string
     */
    protected ?string $estAdCost = null;

    /**
     * 预估付费流水金额 预估付费流水、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @var string
     */
    protected ?string $estSales = null;

    /**
     * @var int
     */
    protected ?int $iaaCostHour = null;

    /**
     * @var int
     */
    protected ?int $iapCostHour = null;

    /**
     * @var int
     */
    protected ?int $iosActivateCnt = null;

    /**
     * 视频ID/图文ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 分天统计数据
     * @var \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInnerItemInfoDailyListInner[]
     */
    protected ?array $itemInfoDailyList = null;

    /**
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * @var string
     */
    protected ?string $link = null;

    /**
     * 播放量 视频播放量、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @var string
     */
    protected ?string $play = null;

    /**
     * @var int
     */
    protected ?int $playVv = null;

    /**
     * @var int
     */
    protected ?int $promoteCnt = null;

    /**
     * 撮合服务商ID
     * @var int
     */
    protected ?int $providerId = null;

    /**
     * 发布时间 秒级时间戳，1658073600 则表示 2022-07-18 00:00:00
     * @var int
     */
    protected ?int $releaseTime = null;

    /**
     * @var int
     */
    protected ?int $relevanceAuditResult = null;

    /**
     * @var int
     */
    protected ?int $rewardAmount = null;

    /**
     * @var int
     */
    protected ?int $rewardLevel = null;

    /**
     * 已发放达人分成金额 已发放达人分成金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @var string
     */
    protected ?string $settleAdShare = null;

    /**
     * 已发放达人分佣金额 已发放达人分佣金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @var string
     */
    protected ?string $settleCps = null;

    /**
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 抖音id
     * @var int
     */
    protected ?int $uid = null;

    /**
     * @var int
     */
    protected ?int $validLikeCnt = null;

    /**
     * @var int
     */
    protected ?int $validPlayVv = null;

    /**
     * @return int
     */
    public function getAndroidActivateCnt(): ?int
    {
        return $this->androidActivateCnt;
    }

    /**
     * @param int $androidActivateCnt
     * @return self
     */
    public function setAndroidActivateCnt(?int $androidActivateCnt): self
    {
        $this->androidActivateCnt = $androidActivateCnt;
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
     * 达人名称
     * @return string
     */
    public function getAuthorNickname(): ?string
    {
        return $this->authorNickname;
    }

    /**
     * 达人名称
     * @param string $authorNickname
     * @return self
     */
    public function setAuthorNickname(?string $authorNickname): self
    {
        $this->authorNickname = $authorNickname;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentClickCnt(): ?int
    {
        return $this->componentClickCnt;
    }

    /**
     * @param int $componentClickCnt
     * @return self
     */
    public function setComponentClickCnt(?int $componentClickCnt): self
    {
        $this->componentClickCnt = $componentClickCnt;
        return $this;
    }

    /**
     * 预估广告消耗金额 预估广告消耗金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @return string
     */
    public function getEstAdCost(): ?string
    {
        return $this->estAdCost;
    }

    /**
     * 预估广告消耗金额 预估广告消耗金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @param string $estAdCost
     * @return self
     */
    public function setEstAdCost(?string $estAdCost): self
    {
        $this->estAdCost = $estAdCost;
        return $this;
    }

    /**
     * 预估付费流水金额 预估付费流水、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @return string
     */
    public function getEstSales(): ?string
    {
        return $this->estSales;
    }

    /**
     * 预估付费流水金额 预估付费流水、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @param string $estSales
     * @return self
     */
    public function setEstSales(?string $estSales): self
    {
        $this->estSales = $estSales;
        return $this;
    }

    /**
     * @return int
     */
    public function getIaaCostHour(): ?int
    {
        return $this->iaaCostHour;
    }

    /**
     * @param int $iaaCostHour
     * @return self
     */
    public function setIaaCostHour(?int $iaaCostHour): self
    {
        $this->iaaCostHour = $iaaCostHour;
        return $this;
    }

    /**
     * @return int
     */
    public function getIapCostHour(): ?int
    {
        return $this->iapCostHour;
    }

    /**
     * @param int $iapCostHour
     * @return self
     */
    public function setIapCostHour(?int $iapCostHour): self
    {
        $this->iapCostHour = $iapCostHour;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosActivateCnt(): ?int
    {
        return $this->iosActivateCnt;
    }

    /**
     * @param int $iosActivateCnt
     * @return self
     */
    public function setIosActivateCnt(?int $iosActivateCnt): self
    {
        $this->iosActivateCnt = $iosActivateCnt;
        return $this;
    }

    /**
     * 视频ID/图文ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID/图文ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 分天统计数据
     * @return \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInnerItemInfoDailyListInner[]
     */
    public function getItemInfoDailyList(): ?array
    {
        return $this->itemInfoDailyList;
    }

    /**
     * 分天统计数据
     * @param \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInnerItemInfoDailyListInner[] $itemInfoDailyList
     * @return self
     */
    public function setItemInfoDailyList(?array $itemInfoDailyList): self
    {
        $this->itemInfoDailyList = $itemInfoDailyList;
        return $this;
    }

    /**
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * 播放量 视频播放量、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @return string
     */
    public function getPlay(): ?string
    {
        return $this->play;
    }

    /**
     * 播放量 视频播放量、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @param string $play
     * @return self
     */
    public function setPlay(?string $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayVv(): ?int
    {
        return $this->playVv;
    }

    /**
     * @param int $playVv
     * @return self
     */
    public function setPlayVv(?int $playVv): self
    {
        $this->playVv = $playVv;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromoteCnt(): ?int
    {
        return $this->promoteCnt;
    }

    /**
     * @param int $promoteCnt
     * @return self
     */
    public function setPromoteCnt(?int $promoteCnt): self
    {
        $this->promoteCnt = $promoteCnt;
        return $this;
    }

    /**
     * 撮合服务商ID
     * @return int
     */
    public function getProviderId(): ?int
    {
        return $this->providerId;
    }

    /**
     * 撮合服务商ID
     * @param int $providerId
     * @return self
     */
    public function setProviderId(?int $providerId): self
    {
        $this->providerId = $providerId;
        return $this;
    }

    /**
     * 发布时间 秒级时间戳，1658073600 则表示 2022-07-18 00:00:00
     * @return int
     */
    public function getReleaseTime(): ?int
    {
        return $this->releaseTime;
    }

    /**
     * 发布时间 秒级时间戳，1658073600 则表示 2022-07-18 00:00:00
     * @param int $releaseTime
     * @return self
     */
    public function setReleaseTime(?int $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelevanceAuditResult(): ?int
    {
        return $this->relevanceAuditResult;
    }

    /**
     * @param int $relevanceAuditResult
     * @return self
     */
    public function setRelevanceAuditResult(?int $relevanceAuditResult): self
    {
        $this->relevanceAuditResult = $relevanceAuditResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardAmount(): ?int
    {
        return $this->rewardAmount;
    }

    /**
     * @param int $rewardAmount
     * @return self
     */
    public function setRewardAmount(?int $rewardAmount): self
    {
        $this->rewardAmount = $rewardAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardLevel(): ?int
    {
        return $this->rewardLevel;
    }

    /**
     * @param int $rewardLevel
     * @return self
     */
    public function setRewardLevel(?int $rewardLevel): self
    {
        $this->rewardLevel = $rewardLevel;
        return $this;
    }

    /**
     * 已发放达人分成金额 已发放达人分成金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @return string
     */
    public function getSettleAdShare(): ?string
    {
        return $this->settleAdShare;
    }

    /**
     * 已发放达人分成金额 已发放达人分成金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @param string $settleAdShare
     * @return self
     */
    public function setSettleAdShare(?string $settleAdShare): self
    {
        $this->settleAdShare = $settleAdShare;
        return $this;
    }

    /**
     * 已发放达人分佣金额 已发放达人分佣金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @return string
     */
    public function getSettleCps(): ?string
    {
        return $this->settleCps;
    }

    /**
     * 已发放达人分佣金额 已发放达人分佣金额、数据更新秒级时间戳，示例：{\"value\": 1, \"time\":1703606399}，其中value为视频播放量，time为数据更新秒级时间戳
     * @param string $settleCps
     * @return self
     */
    public function setSettleCps(?string $settleCps): self
    {
        $this->settleCps = $settleCps;
        return $this;
    }

    /**
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 抖音id
     * @return int
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * 抖音id
     * @param int $uid
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidLikeCnt(): ?int
    {
        return $this->validLikeCnt;
    }

    /**
     * @param int $validLikeCnt
     * @return self
     */
    public function setValidLikeCnt(?int $validLikeCnt): self
    {
        $this->validLikeCnt = $validLikeCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidPlayVv(): ?int
    {
        return $this->validPlayVv;
    }

    /**
     * @param int $validPlayVv
     * @return self
     */
    public function setValidPlayVv(?int $validPlayVv): self
    {
        $this->validPlayVv = $validPlayVv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidActivateCnt !== null) {
            $result['android_activate_cnt'] = $this->androidActivateCnt;
        }
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorNickname !== null) {
            $result['author_nickname'] = $this->authorNickname;
        }
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->componentClickCnt !== null) {
            $result['component_click_cnt'] = $this->componentClickCnt;
        }
        if ($this->estAdCost !== null) {
            $result['est_ad_cost'] = $this->estAdCost;
        }
        if ($this->estSales !== null) {
            $result['est_sales'] = $this->estSales;
        }
        if ($this->iaaCostHour !== null) {
            $result['iaa_cost_hour'] = $this->iaaCostHour;
        }
        if ($this->iapCostHour !== null) {
            $result['iap_cost_hour'] = $this->iapCostHour;
        }
        if ($this->iosActivateCnt !== null) {
            $result['ios_activate_cnt'] = $this->iosActivateCnt;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->itemInfoDailyList !== null) {
            $result['item_info_daily_list'] = $this->itemInfoDailyList;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->playVv !== null) {
            $result['play_vv'] = $this->playVv;
        }
        if ($this->promoteCnt !== null) {
            $result['promote_cnt'] = $this->promoteCnt;
        }
        if ($this->providerId !== null) {
            $result['provider_id'] = $this->providerId;
        }
        if ($this->releaseTime !== null) {
            $result['release_time'] = $this->releaseTime;
        }
        if ($this->relevanceAuditResult !== null) {
            $result['relevance_audit_result'] = $this->relevanceAuditResult;
        }
        if ($this->rewardAmount !== null) {
            $result['reward_amount'] = $this->rewardAmount;
        }
        if ($this->rewardLevel !== null) {
            $result['reward_level'] = $this->rewardLevel;
        }
        if ($this->settleAdShare !== null) {
            $result['settle_ad_share'] = $this->settleAdShare;
        }
        if ($this->settleCps !== null) {
            $result['settle_cps'] = $this->settleCps;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->uid !== null) {
            $result['uid'] = $this->uid;
        }
        if ($this->validLikeCnt !== null) {
            $result['valid_like_cnt'] = $this->validLikeCnt;
        }
        if ($this->validPlayVv !== null) {
            $result['valid_play_vv'] = $this->validPlayVv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_activate_cnt'] ?? null) !== null) {
            $obj->androidActivateCnt = (int) $v;
        }
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_nickname'] ?? null) !== null) {
            $obj->authorNickname = (string) $v;
        }
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['component_click_cnt'] ?? null) !== null) {
            $obj->componentClickCnt = (int) $v;
        }
        if (($v = $data['est_ad_cost'] ?? null) !== null) {
            $obj->estAdCost = (string) $v;
        }
        if (($v = $data['est_sales'] ?? null) !== null) {
            $obj->estSales = (string) $v;
        }
        if (($v = $data['iaa_cost_hour'] ?? null) !== null) {
            $obj->iaaCostHour = (int) $v;
        }
        if (($v = $data['iap_cost_hour'] ?? null) !== null) {
            $obj->iapCostHour = (int) $v;
        }
        if (($v = $data['ios_activate_cnt'] ?? null) !== null) {
            $obj->iosActivateCnt = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['item_info_daily_list'] ?? null) !== null && is_array($v)) {
            $obj->itemInfoDailyList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInnerItemInfoDailyListInner::fromArray($vv), $v);
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (string) $v;
        }
        if (($v = $data['play_vv'] ?? null) !== null) {
            $obj->playVv = (int) $v;
        }
        if (($v = $data['promote_cnt'] ?? null) !== null) {
            $obj->promoteCnt = (int) $v;
        }
        if (($v = $data['provider_id'] ?? null) !== null) {
            $obj->providerId = (int) $v;
        }
        if (($v = $data['release_time'] ?? null) !== null) {
            $obj->releaseTime = (int) $v;
        }
        if (($v = $data['relevance_audit_result'] ?? null) !== null) {
            $obj->relevanceAuditResult = (int) $v;
        }
        if (($v = $data['reward_amount'] ?? null) !== null) {
            $obj->rewardAmount = (int) $v;
        }
        if (($v = $data['reward_level'] ?? null) !== null) {
            $obj->rewardLevel = (int) $v;
        }
        if (($v = $data['settle_ad_share'] ?? null) !== null) {
            $obj->settleAdShare = (string) $v;
        }
        if (($v = $data['settle_cps'] ?? null) !== null) {
            $obj->settleCps = (string) $v;
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['uid'] ?? null) !== null) {
            $obj->uid = (int) $v;
        }
        if (($v = $data['valid_like_cnt'] ?? null) !== null) {
            $obj->validLikeCnt = (int) $v;
        }
        if (($v = $data['valid_play_vv'] ?? null) !== null) {
            $obj->validPlayVv = (int) $v;
        }
        return $obj;
    }
}
