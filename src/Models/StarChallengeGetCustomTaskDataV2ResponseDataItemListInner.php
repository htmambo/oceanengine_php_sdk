<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskDataV2ResponseDataItemListInner implements \JsonSerializable
{
    /**
     * 含作弊的Android下载数/Android激活数
     * @var int
     */
    protected ?int $androidConvertCount = null;

    /**
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo
     */
    protected ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo $authorInfo = null;

    /**
     * channel_id
     * @var string
     */
    protected ?string $channelId = null;

    /**
     * 评论量
     * @var int
     */
    protected ?int $comment = null;

    /**
     * 组件点击量
     * @var int
     */
    protected ?int $componentClickCount = null;

    /**
     * 投稿机构ID
     * @var int
     */
    protected ?int $contractMcnId = null;

    /**
     * 投稿机构名称
     * @var string
     */
    protected ?string $contractMcnName = null;

    /**
     * 促活转化数（线索量/安装量等）
     * @var int
     */
    protected ?int $convertCount = null;

    /**
     * 视频封面图
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 发布时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 去除作弊后的ios下载数/ios激活数
     * @var int
     */
    protected ?int $invalidAndroidConvertCount = null;

    /**
     * 含作弊的ios下载数/ios激活数
     * @var int
     */
    protected ?int $invalidIosConvertCount = null;

    /**
     * 去除作弊后的Android下载数/Android激活数
     * @var int
     */
    protected ?int $iosConvertCount = null;

    /**
     * 作品id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 点赞量
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * acu
     * @var int
     */
    protected ?int $liveAcu = null;

    /**
     * 直播时长
     * @var int
     */
    protected ?int $liveDuration = null;

    /**
     * pcu
     * @var int
     */
    protected ?int $livePcu = null;

    /**
     * 播放量
     * @var int
     */
    protected ?int $play = null;

    /**
     * 预约成功次数（仅安卓）
     * @var int
     */
    protected ?int $reserveCnt = null;

    /**
     * 预约安装完成次数
     * @var int
     */
    protected ?int $reserveInstallCnt = null;

    /**
     * 奖励金额
     * @var int
     */
    protected ?int $rewardAmount = null;

    /**
     * 分享量
     * @var int
     */
    protected ?int $share = null;

    /**
     * 有效播放量
     * @var int
     */
    protected ?int $shareVv = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 相关性审核（1-通过）
     * @var int
     */
    protected ?int $uncorrelated = null;

    /**
     * 链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频时长
     * @var int
     */
    protected ?int $videoDurationMs = null;

    /**
     * pv
     * @var int
     */
    protected ?int $watchCnt = null;

    /**
     * 直播人均时长
     * @var float
     */
    protected ?float $watchDurationAvg = null;

    /**
     * uv
     * @var int
     */
    protected ?int $watchUv = null;

    /**
     * 有效评论量
     * @var int
     */
    protected ?int $whiteComment = null;

    /**
     * 有效点赞量
     * @var int
     */
    protected ?int $whiteLikeCnt = null;

    /**
     * 有效分享量
     * @var int
     */
    protected ?int $whiteShare = null;

    /**
     * 含作弊的Android下载数/Android激活数
     * @return int
     */
    public function getAndroidConvertCount(): ?int
    {
        return $this->androidConvertCount;
    }

    /**
     * 含作弊的Android下载数/Android激活数
     * @param int $androidConvertCount
     * @return self
     */
    public function setAndroidConvertCount(?int $androidConvertCount): self
    {
        $this->androidConvertCount = $androidConvertCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo
     */
    public function getAuthorInfo(): ?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo
    {
        return $this->authorInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo $authorInfo
     * @return self
     */
    public function setAuthorInfo(?\Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo $authorInfo): self
    {
        $this->authorInfo = $authorInfo;
        return $this;
    }

    /**
     * channel_id
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * channel_id
     * @param string $channelId
     * @return self
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * 评论量
     * @return int
     */
    public function getComment(): ?int
    {
        return $this->comment;
    }

    /**
     * 评论量
     * @param int $comment
     * @return self
     */
    public function setComment(?int $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * 组件点击量
     * @return int
     */
    public function getComponentClickCount(): ?int
    {
        return $this->componentClickCount;
    }

    /**
     * 组件点击量
     * @param int $componentClickCount
     * @return self
     */
    public function setComponentClickCount(?int $componentClickCount): self
    {
        $this->componentClickCount = $componentClickCount;
        return $this;
    }

    /**
     * 投稿机构ID
     * @return int
     */
    public function getContractMcnId(): ?int
    {
        return $this->contractMcnId;
    }

    /**
     * 投稿机构ID
     * @param int $contractMcnId
     * @return self
     */
    public function setContractMcnId(?int $contractMcnId): self
    {
        $this->contractMcnId = $contractMcnId;
        return $this;
    }

    /**
     * 投稿机构名称
     * @return string
     */
    public function getContractMcnName(): ?string
    {
        return $this->contractMcnName;
    }

    /**
     * 投稿机构名称
     * @param string $contractMcnName
     * @return self
     */
    public function setContractMcnName(?string $contractMcnName): self
    {
        $this->contractMcnName = $contractMcnName;
        return $this;
    }

    /**
     * 促活转化数（线索量/安装量等）
     * @return int
     */
    public function getConvertCount(): ?int
    {
        return $this->convertCount;
    }

    /**
     * 促活转化数（线索量/安装量等）
     * @param int $convertCount
     * @return self
     */
    public function setConvertCount(?int $convertCount): self
    {
        $this->convertCount = $convertCount;
        return $this;
    }

    /**
     * 视频封面图
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 视频封面图
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 发布时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 去除作弊后的ios下载数/ios激活数
     * @return int
     */
    public function getInvalidAndroidConvertCount(): ?int
    {
        return $this->invalidAndroidConvertCount;
    }

    /**
     * 去除作弊后的ios下载数/ios激活数
     * @param int $invalidAndroidConvertCount
     * @return self
     */
    public function setInvalidAndroidConvertCount(?int $invalidAndroidConvertCount): self
    {
        $this->invalidAndroidConvertCount = $invalidAndroidConvertCount;
        return $this;
    }

    /**
     * 含作弊的ios下载数/ios激活数
     * @return int
     */
    public function getInvalidIosConvertCount(): ?int
    {
        return $this->invalidIosConvertCount;
    }

    /**
     * 含作弊的ios下载数/ios激活数
     * @param int $invalidIosConvertCount
     * @return self
     */
    public function setInvalidIosConvertCount(?int $invalidIosConvertCount): self
    {
        $this->invalidIosConvertCount = $invalidIosConvertCount;
        return $this;
    }

    /**
     * 去除作弊后的Android下载数/Android激活数
     * @return int
     */
    public function getIosConvertCount(): ?int
    {
        return $this->iosConvertCount;
    }

    /**
     * 去除作弊后的Android下载数/Android激活数
     * @param int $iosConvertCount
     * @return self
     */
    public function setIosConvertCount(?int $iosConvertCount): self
    {
        $this->iosConvertCount = $iosConvertCount;
        return $this;
    }

    /**
     * 作品id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 作品id
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
     * acu
     * @return int
     */
    public function getLiveAcu(): ?int
    {
        return $this->liveAcu;
    }

    /**
     * acu
     * @param int $liveAcu
     * @return self
     */
    public function setLiveAcu(?int $liveAcu): self
    {
        $this->liveAcu = $liveAcu;
        return $this;
    }

    /**
     * 直播时长
     * @return int
     */
    public function getLiveDuration(): ?int
    {
        return $this->liveDuration;
    }

    /**
     * 直播时长
     * @param int $liveDuration
     * @return self
     */
    public function setLiveDuration(?int $liveDuration): self
    {
        $this->liveDuration = $liveDuration;
        return $this;
    }

    /**
     * pcu
     * @return int
     */
    public function getLivePcu(): ?int
    {
        return $this->livePcu;
    }

    /**
     * pcu
     * @param int $livePcu
     * @return self
     */
    public function setLivePcu(?int $livePcu): self
    {
        $this->livePcu = $livePcu;
        return $this;
    }

    /**
     * 播放量
     * @return int
     */
    public function getPlay(): ?int
    {
        return $this->play;
    }

    /**
     * 播放量
     * @param int $play
     * @return self
     */
    public function setPlay(?int $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * 预约成功次数（仅安卓）
     * @return int
     */
    public function getReserveCnt(): ?int
    {
        return $this->reserveCnt;
    }

    /**
     * 预约成功次数（仅安卓）
     * @param int $reserveCnt
     * @return self
     */
    public function setReserveCnt(?int $reserveCnt): self
    {
        $this->reserveCnt = $reserveCnt;
        return $this;
    }

    /**
     * 预约安装完成次数
     * @return int
     */
    public function getReserveInstallCnt(): ?int
    {
        return $this->reserveInstallCnt;
    }

    /**
     * 预约安装完成次数
     * @param int $reserveInstallCnt
     * @return self
     */
    public function setReserveInstallCnt(?int $reserveInstallCnt): self
    {
        $this->reserveInstallCnt = $reserveInstallCnt;
        return $this;
    }

    /**
     * 奖励金额
     * @return int
     */
    public function getRewardAmount(): ?int
    {
        return $this->rewardAmount;
    }

    /**
     * 奖励金额
     * @param int $rewardAmount
     * @return self
     */
    public function setRewardAmount(?int $rewardAmount): self
    {
        $this->rewardAmount = $rewardAmount;
        return $this;
    }

    /**
     * 分享量
     * @return int
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

    /**
     * 分享量
     * @param int $share
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;
        return $this;
    }

    /**
     * 有效播放量
     * @return int
     */
    public function getShareVv(): ?int
    {
        return $this->shareVv;
    }

    /**
     * 有效播放量
     * @param int $shareVv
     * @return self
     */
    public function setShareVv(?int $shareVv): self
    {
        $this->shareVv = $shareVv;
        return $this;
    }

    /**
     * 标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 相关性审核（1-通过）
     * @return int
     */
    public function getUncorrelated(): ?int
    {
        return $this->uncorrelated;
    }

    /**
     * 相关性审核（1-通过）
     * @param int $uncorrelated
     * @return self
     */
    public function setUncorrelated(?int $uncorrelated): self
    {
        $this->uncorrelated = $uncorrelated;
        return $this;
    }

    /**
     * 链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 链接
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 视频时长
     * @return int
     */
    public function getVideoDurationMs(): ?int
    {
        return $this->videoDurationMs;
    }

    /**
     * 视频时长
     * @param int $videoDurationMs
     * @return self
     */
    public function setVideoDurationMs(?int $videoDurationMs): self
    {
        $this->videoDurationMs = $videoDurationMs;
        return $this;
    }

    /**
     * pv
     * @return int
     */
    public function getWatchCnt(): ?int
    {
        return $this->watchCnt;
    }

    /**
     * pv
     * @param int $watchCnt
     * @return self
     */
    public function setWatchCnt(?int $watchCnt): self
    {
        $this->watchCnt = $watchCnt;
        return $this;
    }

    /**
     * 直播人均时长
     * @return float
     */
    public function getWatchDurationAvg(): ?float
    {
        return $this->watchDurationAvg;
    }

    /**
     * 直播人均时长
     * @param float $watchDurationAvg
     * @return self
     */
    public function setWatchDurationAvg(?float $watchDurationAvg): self
    {
        $this->watchDurationAvg = $watchDurationAvg;
        return $this;
    }

    /**
     * uv
     * @return int
     */
    public function getWatchUv(): ?int
    {
        return $this->watchUv;
    }

    /**
     * uv
     * @param int $watchUv
     * @return self
     */
    public function setWatchUv(?int $watchUv): self
    {
        $this->watchUv = $watchUv;
        return $this;
    }

    /**
     * 有效评论量
     * @return int
     */
    public function getWhiteComment(): ?int
    {
        return $this->whiteComment;
    }

    /**
     * 有效评论量
     * @param int $whiteComment
     * @return self
     */
    public function setWhiteComment(?int $whiteComment): self
    {
        $this->whiteComment = $whiteComment;
        return $this;
    }

    /**
     * 有效点赞量
     * @return int
     */
    public function getWhiteLikeCnt(): ?int
    {
        return $this->whiteLikeCnt;
    }

    /**
     * 有效点赞量
     * @param int $whiteLikeCnt
     * @return self
     */
    public function setWhiteLikeCnt(?int $whiteLikeCnt): self
    {
        $this->whiteLikeCnt = $whiteLikeCnt;
        return $this;
    }

    /**
     * 有效分享量
     * @return int
     */
    public function getWhiteShare(): ?int
    {
        return $this->whiteShare;
    }

    /**
     * 有效分享量
     * @param int $whiteShare
     * @return self
     */
    public function setWhiteShare(?int $whiteShare): self
    {
        $this->whiteShare = $whiteShare;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidConvertCount !== null) {
            $result['android_convert_count'] = $this->androidConvertCount;
        }
        if ($this->authorInfo !== null) {
            $result['author_info'] = $this->authorInfo;
        }
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->componentClickCount !== null) {
            $result['component_click_count'] = $this->componentClickCount;
        }
        if ($this->contractMcnId !== null) {
            $result['contract_mcn_id'] = $this->contractMcnId;
        }
        if ($this->contractMcnName !== null) {
            $result['contract_mcn_name'] = $this->contractMcnName;
        }
        if ($this->convertCount !== null) {
            $result['convert_count'] = $this->convertCount;
        }
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->invalidAndroidConvertCount !== null) {
            $result['invalid_android_convert_count'] = $this->invalidAndroidConvertCount;
        }
        if ($this->invalidIosConvertCount !== null) {
            $result['invalid_ios_convert_count'] = $this->invalidIosConvertCount;
        }
        if ($this->iosConvertCount !== null) {
            $result['ios_convert_count'] = $this->iosConvertCount;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->liveAcu !== null) {
            $result['live_acu'] = $this->liveAcu;
        }
        if ($this->liveDuration !== null) {
            $result['live_duration'] = $this->liveDuration;
        }
        if ($this->livePcu !== null) {
            $result['live_pcu'] = $this->livePcu;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->reserveCnt !== null) {
            $result['reserve_cnt'] = $this->reserveCnt;
        }
        if ($this->reserveInstallCnt !== null) {
            $result['reserve_install_cnt'] = $this->reserveInstallCnt;
        }
        if ($this->rewardAmount !== null) {
            $result['reward_amount'] = $this->rewardAmount;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        if ($this->shareVv !== null) {
            $result['share_vv'] = $this->shareVv;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->uncorrelated !== null) {
            $result['uncorrelated'] = $this->uncorrelated;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoDurationMs !== null) {
            $result['video_duration_ms'] = $this->videoDurationMs;
        }
        if ($this->watchCnt !== null) {
            $result['watch_cnt'] = $this->watchCnt;
        }
        if ($this->watchDurationAvg !== null) {
            $result['watch_duration_avg'] = $this->watchDurationAvg;
        }
        if ($this->watchUv !== null) {
            $result['watch_uv'] = $this->watchUv;
        }
        if ($this->whiteComment !== null) {
            $result['white_comment'] = $this->whiteComment;
        }
        if ($this->whiteLikeCnt !== null) {
            $result['white_like_cnt'] = $this->whiteLikeCnt;
        }
        if ($this->whiteShare !== null) {
            $result['white_share'] = $this->whiteShare;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_convert_count'] ?? null) !== null) {
            $obj->androidConvertCount = (int) $v;
        }
        if (($v = $data['author_info'] ?? null) !== null && is_array($v)) {
            $obj->authorInfo = \Oceanengine\Models\StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo::fromArray($v);
        }
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (string) $v;
        }
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (int) $v;
        }
        if (($v = $data['component_click_count'] ?? null) !== null) {
            $obj->componentClickCount = (int) $v;
        }
        if (($v = $data['contract_mcn_id'] ?? null) !== null) {
            $obj->contractMcnId = (int) $v;
        }
        if (($v = $data['contract_mcn_name'] ?? null) !== null) {
            $obj->contractMcnName = (string) $v;
        }
        if (($v = $data['convert_count'] ?? null) !== null) {
            $obj->convertCount = (int) $v;
        }
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['invalid_android_convert_count'] ?? null) !== null) {
            $obj->invalidAndroidConvertCount = (int) $v;
        }
        if (($v = $data['invalid_ios_convert_count'] ?? null) !== null) {
            $obj->invalidIosConvertCount = (int) $v;
        }
        if (($v = $data['ios_convert_count'] ?? null) !== null) {
            $obj->iosConvertCount = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['live_acu'] ?? null) !== null) {
            $obj->liveAcu = (int) $v;
        }
        if (($v = $data['live_duration'] ?? null) !== null) {
            $obj->liveDuration = (int) $v;
        }
        if (($v = $data['live_pcu'] ?? null) !== null) {
            $obj->livePcu = (int) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (int) $v;
        }
        if (($v = $data['reserve_cnt'] ?? null) !== null) {
            $obj->reserveCnt = (int) $v;
        }
        if (($v = $data['reserve_install_cnt'] ?? null) !== null) {
            $obj->reserveInstallCnt = (int) $v;
        }
        if (($v = $data['reward_amount'] ?? null) !== null) {
            $obj->rewardAmount = (int) $v;
        }
        if (($v = $data['share'] ?? null) !== null) {
            $obj->share = (int) $v;
        }
        if (($v = $data['share_vv'] ?? null) !== null) {
            $obj->shareVv = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['uncorrelated'] ?? null) !== null) {
            $obj->uncorrelated = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_duration_ms'] ?? null) !== null) {
            $obj->videoDurationMs = (int) $v;
        }
        if (($v = $data['watch_cnt'] ?? null) !== null) {
            $obj->watchCnt = (int) $v;
        }
        if (($v = $data['watch_duration_avg'] ?? null) !== null) {
            $obj->watchDurationAvg = (float) $v;
        }
        if (($v = $data['watch_uv'] ?? null) !== null) {
            $obj->watchUv = (int) $v;
        }
        if (($v = $data['white_comment'] ?? null) !== null) {
            $obj->whiteComment = (int) $v;
        }
        if (($v = $data['white_like_cnt'] ?? null) !== null) {
            $obj->whiteLikeCnt = (int) $v;
        }
        if (($v = $data['white_share'] ?? null) !== null) {
            $obj->whiteShare = (int) $v;
        }
        return $obj;
    }
}
