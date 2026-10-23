<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeItemsDataV2ResponseDataDataListInner implements \JsonSerializable
{
    /**
     * Android激活数
     * @var int
     */
    protected ?int $androidActivateCnt = null;

    /**
     * 已发放收益（单位：分）
     * @var int
     */
    protected ?int $authorAmount = null;

    /**
     * 作者昵称
     * @var string
     */
    protected ?string $authorNickname = null;

    /**
     * 评论量
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * 组件点击数
     * @var int
     */
    protected ?int $componentClickCnt = null;

    /**
     * 预估广告流水（单位：分）
     * @var int
     */
    protected ?int $iaaAmountEstimated = null;

    /**
     * 已发放广告分成（单位：分）
     * @var int
     */
    protected ?int $iaaAuthorAmount = null;

    /**
     * 预估广告分成金额（单位：分）
     * @var int
     */
    protected ?int $iaaBill = null;

    /**
     * 预估付费分佣金额（单位：分）
     * @var int
     */
    protected ?int $iapBill = null;

    /**
     * iOS激活数
     * @var int
     */
    protected ?int $iosActivateCnt = null;

    /**
     * 作品ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 点赞量
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * 作品链接
     * @var string
     */
    protected ?string $link = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $mid = null;

    /**
     * 原生短剧的album_id不全，因此针对原生短剧，playlet是seriesId，原生短剧的album_id如有需要，可用该字段
     * @var string
     */
    protected ?string $nativePlayletAlbumId = null;

    /**
     * 预估付费流水（单位：分）
     * @var int
     */
    protected ?int $payAmountEstimated = null;

    /**
     * 播放量
     * @var int
     */
    protected ?int $playVv = null;

    /**
     * 短剧id
     * @var int
     */
    protected ?int $playletId = null;

    /**
     * 短剧名称
     * @var string
     */
    protected ?string $playletName = null;

    /**
     * 促活转化数
     * @var int
     */
    protected ?int $promoteCnt = null;

    /**
     * 发布时间
     * @var int
     */
    protected ?int $releaseTime = null;

    /**
     * 1：审核中 2：相关 3：不相关
     * @var int
     */
    protected ?int $relevanceAuditResult = null;

    /**
     * 获奖金额（分）
     * @var int
     */
    protected ?int $rewardAmount = null;

    /**
     * 获奖等级
     * @var int
     */
    protected ?int $rewardLevel = null;

    /**
     * 分享量
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * 作品标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 作者uid
     * @var int
     */
    protected ?int $uid = null;

    /**
     * 有效点赞量
     * @var int
     */
    protected ?int $validLikeCnt = null;

    /**
     * 有效播放量
     * @var int
     */
    protected ?int $validPlayVv = null;

    /**
     * Android激活数
     * @return int
     */
    public function getAndroidActivateCnt(): ?int
    {
        return $this->androidActivateCnt;
    }

    /**
     * Android激活数
     * @param int $androidActivateCnt
     * @return self
     */
    public function setAndroidActivateCnt(?int $androidActivateCnt): self
    {
        $this->androidActivateCnt = $androidActivateCnt;
        return $this;
    }

    /**
     * 已发放收益（单位：分）
     * @return int
     */
    public function getAuthorAmount(): ?int
    {
        return $this->authorAmount;
    }

    /**
     * 已发放收益（单位：分）
     * @param int $authorAmount
     * @return self
     */
    public function setAuthorAmount(?int $authorAmount): self
    {
        $this->authorAmount = $authorAmount;
        return $this;
    }

    /**
     * 作者昵称
     * @return string
     */
    public function getAuthorNickname(): ?string
    {
        return $this->authorNickname;
    }

    /**
     * 作者昵称
     * @param string $authorNickname
     * @return self
     */
    public function setAuthorNickname(?string $authorNickname): self
    {
        $this->authorNickname = $authorNickname;
        return $this;
    }

    /**
     * 评论量
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * 评论量
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * 组件点击数
     * @return int
     */
    public function getComponentClickCnt(): ?int
    {
        return $this->componentClickCnt;
    }

    /**
     * 组件点击数
     * @param int $componentClickCnt
     * @return self
     */
    public function setComponentClickCnt(?int $componentClickCnt): self
    {
        $this->componentClickCnt = $componentClickCnt;
        return $this;
    }

    /**
     * 预估广告流水（单位：分）
     * @return int
     */
    public function getIaaAmountEstimated(): ?int
    {
        return $this->iaaAmountEstimated;
    }

    /**
     * 预估广告流水（单位：分）
     * @param int $iaaAmountEstimated
     * @return self
     */
    public function setIaaAmountEstimated(?int $iaaAmountEstimated): self
    {
        $this->iaaAmountEstimated = $iaaAmountEstimated;
        return $this;
    }

    /**
     * 已发放广告分成（单位：分）
     * @return int
     */
    public function getIaaAuthorAmount(): ?int
    {
        return $this->iaaAuthorAmount;
    }

    /**
     * 已发放广告分成（单位：分）
     * @param int $iaaAuthorAmount
     * @return self
     */
    public function setIaaAuthorAmount(?int $iaaAuthorAmount): self
    {
        $this->iaaAuthorAmount = $iaaAuthorAmount;
        return $this;
    }

    /**
     * 预估广告分成金额（单位：分）
     * @return int
     */
    public function getIaaBill(): ?int
    {
        return $this->iaaBill;
    }

    /**
     * 预估广告分成金额（单位：分）
     * @param int $iaaBill
     * @return self
     */
    public function setIaaBill(?int $iaaBill): self
    {
        $this->iaaBill = $iaaBill;
        return $this;
    }

    /**
     * 预估付费分佣金额（单位：分）
     * @return int
     */
    public function getIapBill(): ?int
    {
        return $this->iapBill;
    }

    /**
     * 预估付费分佣金额（单位：分）
     * @param int $iapBill
     * @return self
     */
    public function setIapBill(?int $iapBill): self
    {
        $this->iapBill = $iapBill;
        return $this;
    }

    /**
     * iOS激活数
     * @return int
     */
    public function getIosActivateCnt(): ?int
    {
        return $this->iosActivateCnt;
    }

    /**
     * iOS激活数
     * @param int $iosActivateCnt
     * @return self
     */
    public function setIosActivateCnt(?int $iosActivateCnt): self
    {
        $this->iosActivateCnt = $iosActivateCnt;
        return $this;
    }

    /**
     * 作品ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 作品ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 点赞量
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * 点赞量
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * 作品链接
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * 作品链接
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMid(): ?int
    {
        return $this->mid;
    }

    /**
     * 素材id
     * @param int $mid
     * @return self
     */
    public function setMid(?int $mid): self
    {
        $this->mid = $mid;
        return $this;
    }

    /**
     * 原生短剧的album_id不全，因此针对原生短剧，playlet是seriesId，原生短剧的album_id如有需要，可用该字段
     * @return string
     */
    public function getNativePlayletAlbumId(): ?string
    {
        return $this->nativePlayletAlbumId;
    }

    /**
     * 原生短剧的album_id不全，因此针对原生短剧，playlet是seriesId，原生短剧的album_id如有需要，可用该字段
     * @param string $nativePlayletAlbumId
     * @return self
     */
    public function setNativePlayletAlbumId(?string $nativePlayletAlbumId): self
    {
        $this->nativePlayletAlbumId = $nativePlayletAlbumId;
        return $this;
    }

    /**
     * 预估付费流水（单位：分）
     * @return int
     */
    public function getPayAmountEstimated(): ?int
    {
        return $this->payAmountEstimated;
    }

    /**
     * 预估付费流水（单位：分）
     * @param int $payAmountEstimated
     * @return self
     */
    public function setPayAmountEstimated(?int $payAmountEstimated): self
    {
        $this->payAmountEstimated = $payAmountEstimated;
        return $this;
    }

    /**
     * 播放量
     * @return int
     */
    public function getPlayVv(): ?int
    {
        return $this->playVv;
    }

    /**
     * 播放量
     * @param int $playVv
     * @return self
     */
    public function setPlayVv(?int $playVv): self
    {
        $this->playVv = $playVv;
        return $this;
    }

    /**
     * 短剧id
     * @return int
     */
    public function getPlayletId(): ?int
    {
        return $this->playletId;
    }

    /**
     * 短剧id
     * @param int $playletId
     * @return self
     */
    public function setPlayletId(?int $playletId): self
    {
        $this->playletId = $playletId;
        return $this;
    }

    /**
     * 短剧名称
     * @return string
     */
    public function getPlayletName(): ?string
    {
        return $this->playletName;
    }

    /**
     * 短剧名称
     * @param string $playletName
     * @return self
     */
    public function setPlayletName(?string $playletName): self
    {
        $this->playletName = $playletName;
        return $this;
    }

    /**
     * 促活转化数
     * @return int
     */
    public function getPromoteCnt(): ?int
    {
        return $this->promoteCnt;
    }

    /**
     * 促活转化数
     * @param int $promoteCnt
     * @return self
     */
    public function setPromoteCnt(?int $promoteCnt): self
    {
        $this->promoteCnt = $promoteCnt;
        return $this;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getReleaseTime(): ?int
    {
        return $this->releaseTime;
    }

    /**
     * 发布时间
     * @param int $releaseTime
     * @return self
     */
    public function setReleaseTime(?int $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * 1：审核中 2：相关 3：不相关
     * @return int
     */
    public function getRelevanceAuditResult(): ?int
    {
        return $this->relevanceAuditResult;
    }

    /**
     * 1：审核中 2：相关 3：不相关
     * @param int $relevanceAuditResult
     * @return self
     */
    public function setRelevanceAuditResult(?int $relevanceAuditResult): self
    {
        $this->relevanceAuditResult = $relevanceAuditResult;
        return $this;
    }

    /**
     * 获奖金额（分）
     * @return int
     */
    public function getRewardAmount(): ?int
    {
        return $this->rewardAmount;
    }

    /**
     * 获奖金额（分）
     * @param int $rewardAmount
     * @return self
     */
    public function setRewardAmount(?int $rewardAmount): self
    {
        $this->rewardAmount = $rewardAmount;
        return $this;
    }

    /**
     * 获奖等级
     * @return int
     */
    public function getRewardLevel(): ?int
    {
        return $this->rewardLevel;
    }

    /**
     * 获奖等级
     * @param int $rewardLevel
     * @return self
     */
    public function setRewardLevel(?int $rewardLevel): self
    {
        $this->rewardLevel = $rewardLevel;
        return $this;
    }

    /**
     * 分享量
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * 分享量
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
        return $this;
    }

    /**
     * 作品标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 作品标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 作者uid
     * @return int
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * 作者uid
     * @param int $uid
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * 有效点赞量
     * @return int
     */
    public function getValidLikeCnt(): ?int
    {
        return $this->validLikeCnt;
    }

    /**
     * 有效点赞量
     * @param int $validLikeCnt
     * @return self
     */
    public function setValidLikeCnt(?int $validLikeCnt): self
    {
        $this->validLikeCnt = $validLikeCnt;
        return $this;
    }

    /**
     * 有效播放量
     * @return int
     */
    public function getValidPlayVv(): ?int
    {
        return $this->validPlayVv;
    }

    /**
     * 有效播放量
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
        if ($this->authorAmount !== null) {
            $result['author_amount'] = $this->authorAmount;
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
        if ($this->iaaAmountEstimated !== null) {
            $result['iaa_amount_estimated'] = $this->iaaAmountEstimated;
        }
        if ($this->iaaAuthorAmount !== null) {
            $result['iaa_author_amount'] = $this->iaaAuthorAmount;
        }
        if ($this->iaaBill !== null) {
            $result['iaa_bill'] = $this->iaaBill;
        }
        if ($this->iapBill !== null) {
            $result['iap_bill'] = $this->iapBill;
        }
        if ($this->iosActivateCnt !== null) {
            $result['ios_activate_cnt'] = $this->iosActivateCnt;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->mid !== null) {
            $result['mid'] = $this->mid;
        }
        if ($this->nativePlayletAlbumId !== null) {
            $result['native_playlet_album_id'] = $this->nativePlayletAlbumId;
        }
        if ($this->payAmountEstimated !== null) {
            $result['pay_amount_estimated'] = $this->payAmountEstimated;
        }
        if ($this->playVv !== null) {
            $result['play_vv'] = $this->playVv;
        }
        if ($this->playletId !== null) {
            $result['playlet_id'] = $this->playletId;
        }
        if ($this->playletName !== null) {
            $result['playlet_name'] = $this->playletName;
        }
        if ($this->promoteCnt !== null) {
            $result['promote_cnt'] = $this->promoteCnt;
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
        if (($v = $data['author_amount'] ?? null) !== null) {
            $obj->authorAmount = (int) $v;
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
        if (($v = $data['iaa_amount_estimated'] ?? null) !== null) {
            $obj->iaaAmountEstimated = (int) $v;
        }
        if (($v = $data['iaa_author_amount'] ?? null) !== null) {
            $obj->iaaAuthorAmount = (int) $v;
        }
        if (($v = $data['iaa_bill'] ?? null) !== null) {
            $obj->iaaBill = (int) $v;
        }
        if (($v = $data['iap_bill'] ?? null) !== null) {
            $obj->iapBill = (int) $v;
        }
        if (($v = $data['ios_activate_cnt'] ?? null) !== null) {
            $obj->iosActivateCnt = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['mid'] ?? null) !== null) {
            $obj->mid = (int) $v;
        }
        if (($v = $data['native_playlet_album_id'] ?? null) !== null) {
            $obj->nativePlayletAlbumId = (string) $v;
        }
        if (($v = $data['pay_amount_estimated'] ?? null) !== null) {
            $obj->payAmountEstimated = (int) $v;
        }
        if (($v = $data['play_vv'] ?? null) !== null) {
            $obj->playVv = (int) $v;
        }
        if (($v = $data['playlet_id'] ?? null) !== null) {
            $obj->playletId = (int) $v;
        }
        if (($v = $data['playlet_name'] ?? null) !== null) {
            $obj->playletName = (string) $v;
        }
        if (($v = $data['promote_cnt'] ?? null) !== null) {
            $obj->promoteCnt = (int) $v;
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
