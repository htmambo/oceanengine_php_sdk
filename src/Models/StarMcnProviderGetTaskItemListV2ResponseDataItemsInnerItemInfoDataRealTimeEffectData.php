<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData implements \JsonSerializable
{
    /**
     * 人均观看时长
     * @var int
     */
    protected ?int $avgWatchDura = null;

    /**
     * 评论数（端上实时）
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * 收藏数（端上实时）
     * @var int
     */
    protected ?int $favoriteCnt = null;

    /**
     * 完播率
     * @var float
     */
    protected ?float $finishRate = null;

    /**
     * 互动量（端上实时）
     * @var int
     */
    protected ?int $interactCnt = null;

    /**
     * 互动率（点赞+评论+转发）/播放(rate * 100)（端上实时）
     * @var float
     */
    protected ?float $interactRate = null;

    /**
     * 点赞数（端上实时）
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * 完播率（客户端完播量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @var int
     */
    protected ?int $playFinishRate = null;

    /**
     * 3S播放率（客户端3S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @var int
     */
    protected ?int $playRate3s = null;

    /**
     * 5S播放率 （客户端5S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @var int
     */
    protected ?int $playRate5s = null;

    /**
     * 分享数（端上实时）
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * 播放量（端上实时）
     * @var int
     */
    protected ?int $watchCnt = null;

    /**
     * 人均观看时长
     * @return int
     */
    public function getAvgWatchDura(): ?int
    {
        return $this->avgWatchDura;
    }

    /**
     * 人均观看时长
     * @param int $avgWatchDura
     * @return self
     */
    public function setAvgWatchDura(?int $avgWatchDura): self
    {
        $this->avgWatchDura = $avgWatchDura;
        return $this;
    }

    /**
     * 评论数（端上实时）
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * 评论数（端上实时）
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * 收藏数（端上实时）
     * @return int
     */
    public function getFavoriteCnt(): ?int
    {
        return $this->favoriteCnt;
    }

    /**
     * 收藏数（端上实时）
     * @param int $favoriteCnt
     * @return self
     */
    public function setFavoriteCnt(?int $favoriteCnt): self
    {
        $this->favoriteCnt = $favoriteCnt;
        return $this;
    }

    /**
     * 完播率
     * @return float
     */
    public function getFinishRate(): ?float
    {
        return $this->finishRate;
    }

    /**
     * 完播率
     * @param float $finishRate
     * @return self
     */
    public function setFinishRate(?float $finishRate): self
    {
        $this->finishRate = $finishRate;
        return $this;
    }

    /**
     * 互动量（端上实时）
     * @return int
     */
    public function getInteractCnt(): ?int
    {
        return $this->interactCnt;
    }

    /**
     * 互动量（端上实时）
     * @param int $interactCnt
     * @return self
     */
    public function setInteractCnt(?int $interactCnt): self
    {
        $this->interactCnt = $interactCnt;
        return $this;
    }

    /**
     * 互动率（点赞+评论+转发）/播放(rate * 100)（端上实时）
     * @return float
     */
    public function getInteractRate(): ?float
    {
        return $this->interactRate;
    }

    /**
     * 互动率（点赞+评论+转发）/播放(rate * 100)（端上实时）
     * @param float $interactRate
     * @return self
     */
    public function setInteractRate(?float $interactRate): self
    {
        $this->interactRate = $interactRate;
        return $this;
    }

    /**
     * 点赞数（端上实时）
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * 点赞数（端上实时）
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * 完播率（客户端完播量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @return int
     */
    public function getPlayFinishRate(): ?int
    {
        return $this->playFinishRate;
    }

    /**
     * 完播率（客户端完播量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @param int $playFinishRate
     * @return self
     */
    public function setPlayFinishRate(?int $playFinishRate): self
    {
        $this->playFinishRate = $playFinishRate;
        return $this;
    }

    /**
     * 3S播放率（客户端3S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @return int
     */
    public function getPlayRate3s(): ?int
    {
        return $this->playRate3s;
    }

    /**
     * 3S播放率（客户端3S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @param int $playRate3s
     * @return self
     */
    public function setPlayRate3s(?int $playRate3s): self
    {
        $this->playRate3s = $playRate3s;
        return $this;
    }

    /**
     * 5S播放率 （客户端5S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @return int
     */
    public function getPlayRate5s(): ?int
    {
        return $this->playRate5s;
    }

    /**
     * 5S播放率 （客户端5S播放量/客户端播放量）（单位：万分比 小数扩大了1W倍）
     * @param int $playRate5s
     * @return self
     */
    public function setPlayRate5s(?int $playRate5s): self
    {
        $this->playRate5s = $playRate5s;
        return $this;
    }

    /**
     * 分享数（端上实时）
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * 分享数（端上实时）
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
        return $this;
    }

    /**
     * 播放量（端上实时）
     * @return int
     */
    public function getWatchCnt(): ?int
    {
        return $this->watchCnt;
    }

    /**
     * 播放量（端上实时）
     * @param int $watchCnt
     * @return self
     */
    public function setWatchCnt(?int $watchCnt): self
    {
        $this->watchCnt = $watchCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->avgWatchDura !== null) {
            $result['avg_watch_dura'] = $this->avgWatchDura;
        }
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->favoriteCnt !== null) {
            $result['favorite_cnt'] = $this->favoriteCnt;
        }
        if ($this->finishRate !== null) {
            $result['finish_rate'] = $this->finishRate;
        }
        if ($this->interactCnt !== null) {
            $result['interact_cnt'] = $this->interactCnt;
        }
        if ($this->interactRate !== null) {
            $result['interact_rate'] = $this->interactRate;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->playFinishRate !== null) {
            $result['play_finish_rate'] = $this->playFinishRate;
        }
        if ($this->playRate3s !== null) {
            $result['play_rate3s'] = $this->playRate3s;
        }
        if ($this->playRate5s !== null) {
            $result['play_rate5s'] = $this->playRate5s;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        if ($this->watchCnt !== null) {
            $result['watch_cnt'] = $this->watchCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['avg_watch_dura'] ?? null) !== null) {
            $obj->avgWatchDura = (int) $v;
        }
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['favorite_cnt'] ?? null) !== null) {
            $obj->favoriteCnt = (int) $v;
        }
        if (($v = $data['finish_rate'] ?? null) !== null) {
            $obj->finishRate = (float) $v;
        }
        if (($v = $data['interact_cnt'] ?? null) !== null) {
            $obj->interactCnt = (int) $v;
        }
        if (($v = $data['interact_rate'] ?? null) !== null) {
            $obj->interactRate = (float) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['play_finish_rate'] ?? null) !== null) {
            $obj->playFinishRate = (int) $v;
        }
        if (($v = $data['play_rate3s'] ?? null) !== null) {
            $obj->playRate3s = (int) $v;
        }
        if (($v = $data['play_rate5s'] ?? null) !== null) {
            $obj->playRate5s = (int) $v;
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        if (($v = $data['watch_cnt'] ?? null) !== null) {
            $obj->watchCnt = (int) $v;
        }
        return $obj;
    }
}
