<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $customConvertCost = null;

    /**
     * @var int
     */
    protected ?int $customLike = null;

    /**
     * @var int
     */
    protected ?int $douplusLiveFollowCount = null;

    /**
     * @var int
     */
    protected ?int $dpTargetConvertCnt = null;

    /**
     * @var int
     */
    protected ?int $dyComment = null;

    /**
     * @var int
     */
    protected ?int $dyFollow = null;

    /**
     * @var int
     */
    protected ?int $dyHomeVisited = null;

    /**
     * @var int
     */
    protected ?int $dyShare = null;

    /**
     * @var int
     */
    protected ?int $liveClickSourceCnt = null;

    /**
     * @var int
     */
    protected ?int $liveCommentCnt = null;

    /**
     * @var int
     */
    protected ?int $liveGiftAmount = null;

    /**
     * @var int
     */
    protected ?int $liveGiftCnt = null;

    /**
     * @var int
     */
    protected ?int $liveGiftUv = null;

    /**
     * @var float
     */
    protected ?float $playDuration5sRank = null;

    /**
     * @var int
     */
    protected ?int $showCnt = null;

    /**
     * @var int
     */
    protected ?int $statCost = null;

    /**
     * @var int
     */
    protected ?int $totalPlay = null;

    /**
     * @return int
     */
    public function getCustomConvertCost(): ?int
    {
        return $this->customConvertCost;
    }

    /**
     * @param int $customConvertCost
     * @return self
     */
    public function setCustomConvertCost(?int $customConvertCost): self
    {
        $this->customConvertCost = $customConvertCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomLike(): ?int
    {
        return $this->customLike;
    }

    /**
     * @param int $customLike
     * @return self
     */
    public function setCustomLike(?int $customLike): self
    {
        $this->customLike = $customLike;
        return $this;
    }

    /**
     * @return int
     */
    public function getDouplusLiveFollowCount(): ?int
    {
        return $this->douplusLiveFollowCount;
    }

    /**
     * @param int $douplusLiveFollowCount
     * @return self
     */
    public function setDouplusLiveFollowCount(?int $douplusLiveFollowCount): self
    {
        $this->douplusLiveFollowCount = $douplusLiveFollowCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpTargetConvertCnt(): ?int
    {
        return $this->dpTargetConvertCnt;
    }

    /**
     * @param int $dpTargetConvertCnt
     * @return self
     */
    public function setDpTargetConvertCnt(?int $dpTargetConvertCnt): self
    {
        $this->dpTargetConvertCnt = $dpTargetConvertCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyComment(): ?int
    {
        return $this->dyComment;
    }

    /**
     * @param int $dyComment
     * @return self
     */
    public function setDyComment(?int $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyFollow(): ?int
    {
        return $this->dyFollow;
    }

    /**
     * @param int $dyFollow
     * @return self
     */
    public function setDyFollow(?int $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyHomeVisited(): ?int
    {
        return $this->dyHomeVisited;
    }

    /**
     * @param int $dyHomeVisited
     * @return self
     */
    public function setDyHomeVisited(?int $dyHomeVisited): self
    {
        $this->dyHomeVisited = $dyHomeVisited;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyShare(): ?int
    {
        return $this->dyShare;
    }

    /**
     * @param int $dyShare
     * @return self
     */
    public function setDyShare(?int $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveClickSourceCnt(): ?int
    {
        return $this->liveClickSourceCnt;
    }

    /**
     * @param int $liveClickSourceCnt
     * @return self
     */
    public function setLiveClickSourceCnt(?int $liveClickSourceCnt): self
    {
        $this->liveClickSourceCnt = $liveClickSourceCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveCommentCnt(): ?int
    {
        return $this->liveCommentCnt;
    }

    /**
     * @param int $liveCommentCnt
     * @return self
     */
    public function setLiveCommentCnt(?int $liveCommentCnt): self
    {
        $this->liveCommentCnt = $liveCommentCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveGiftAmount(): ?int
    {
        return $this->liveGiftAmount;
    }

    /**
     * @param int $liveGiftAmount
     * @return self
     */
    public function setLiveGiftAmount(?int $liveGiftAmount): self
    {
        $this->liveGiftAmount = $liveGiftAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveGiftCnt(): ?int
    {
        return $this->liveGiftCnt;
    }

    /**
     * @param int $liveGiftCnt
     * @return self
     */
    public function setLiveGiftCnt(?int $liveGiftCnt): self
    {
        $this->liveGiftCnt = $liveGiftCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveGiftUv(): ?int
    {
        return $this->liveGiftUv;
    }

    /**
     * @param int $liveGiftUv
     * @return self
     */
    public function setLiveGiftUv(?int $liveGiftUv): self
    {
        $this->liveGiftUv = $liveGiftUv;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDuration5sRank(): ?float
    {
        return $this->playDuration5sRank;
    }

    /**
     * @param float $playDuration5sRank
     * @return self
     */
    public function setPlayDuration5sRank(?float $playDuration5sRank): self
    {
        $this->playDuration5sRank = $playDuration5sRank;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowCnt(): ?int
    {
        return $this->showCnt;
    }

    /**
     * @param int $showCnt
     * @return self
     */
    public function setShowCnt(?int $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatCost(): ?int
    {
        return $this->statCost;
    }

    /**
     * @param int $statCost
     * @return self
     */
    public function setStatCost(?int $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPlay(): ?int
    {
        return $this->totalPlay;
    }

    /**
     * @param int $totalPlay
     * @return self
     */
    public function setTotalPlay(?int $totalPlay): self
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
        if ($this->customConvertCost !== null) {
            $result['custom_convert_cost'] = $this->customConvertCost;
        }
        if ($this->customLike !== null) {
            $result['custom_like'] = $this->customLike;
        }
        if ($this->douplusLiveFollowCount !== null) {
            $result['douplus_live_follow_count'] = $this->douplusLiveFollowCount;
        }
        if ($this->dpTargetConvertCnt !== null) {
            $result['dp_target_convert_cnt'] = $this->dpTargetConvertCnt;
        }
        if ($this->dyComment !== null) {
            $result['dy_comment'] = $this->dyComment;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
        }
        if ($this->dyHomeVisited !== null) {
            $result['dy_home_visited'] = $this->dyHomeVisited;
        }
        if ($this->dyShare !== null) {
            $result['dy_share'] = $this->dyShare;
        }
        if ($this->liveClickSourceCnt !== null) {
            $result['live_click_source_cnt'] = $this->liveClickSourceCnt;
        }
        if ($this->liveCommentCnt !== null) {
            $result['live_comment_cnt'] = $this->liveCommentCnt;
        }
        if ($this->liveGiftAmount !== null) {
            $result['live_gift_amount'] = $this->liveGiftAmount;
        }
        if ($this->liveGiftCnt !== null) {
            $result['live_gift_cnt'] = $this->liveGiftCnt;
        }
        if ($this->liveGiftUv !== null) {
            $result['live_gift_uv'] = $this->liveGiftUv;
        }
        if ($this->playDuration5sRank !== null) {
            $result['play_duration_5s_rank'] = $this->playDuration5sRank;
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
        if (($v = $data['custom_convert_cost'] ?? null) !== null) {
            $obj->customConvertCost = (int) $v;
        }
        if (($v = $data['custom_like'] ?? null) !== null) {
            $obj->customLike = (int) $v;
        }
        if (($v = $data['douplus_live_follow_count'] ?? null) !== null) {
            $obj->douplusLiveFollowCount = (int) $v;
        }
        if (($v = $data['dp_target_convert_cnt'] ?? null) !== null) {
            $obj->dpTargetConvertCnt = (int) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (int) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (int) $v;
        }
        if (($v = $data['dy_home_visited'] ?? null) !== null) {
            $obj->dyHomeVisited = (int) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (int) $v;
        }
        if (($v = $data['live_click_source_cnt'] ?? null) !== null) {
            $obj->liveClickSourceCnt = (int) $v;
        }
        if (($v = $data['live_comment_cnt'] ?? null) !== null) {
            $obj->liveCommentCnt = (int) $v;
        }
        if (($v = $data['live_gift_amount'] ?? null) !== null) {
            $obj->liveGiftAmount = (int) $v;
        }
        if (($v = $data['live_gift_cnt'] ?? null) !== null) {
            $obj->liveGiftCnt = (int) $v;
        }
        if (($v = $data['live_gift_uv'] ?? null) !== null) {
            $obj->liveGiftUv = (int) $v;
        }
        if (($v = $data['play_duration_5s_rank'] ?? null) !== null) {
            $obj->playDuration5sRank = (float) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (int) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (int) $v;
        }
        return $obj;
    }
}
