<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStat implements \JsonSerializable
{
    /**
     * 评论播放时长
     * @var float
     */
    protected ?float $avgPlayTime = null;

    /**
     * 互动成本
     * @var float
     */
    protected ?float $cpe = null;

    /**
     * 千次播放成本
     * @var float
     */
    protected ?float $cpm = null;

    /**
     * 完播率
     * @var float
     */
    protected ?float $finishRate = null;

    /**
     * 触达频次
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStatFrequencyStatsInner[]
     */
    protected ?array $frequencyStats = null;

    /**
     * 互动率
     * @var float
     */
    protected ?float $interactRate = null;

    /**
     * 评论量
     * @var int
     */
    protected ?int $itemCommentCnt = null;

    /**
     * 点赞量
     * @var int
     */
    protected ?int $itemLikeCnt = null;

    /**
     * 播放量
     * @var int
     */
    protected ?int $itemPlayCnt = null;

    /**
     * 分享量
     * @var int
     */
    protected ?int $itemShareCnt = null;

    /**
     * 评论播放时长
     * @return float
     */
    public function getAvgPlayTime(): ?float
    {
        return $this->avgPlayTime;
    }

    /**
     * 评论播放时长
     * @param float $avgPlayTime
     * @return self
     */
    public function setAvgPlayTime(?float $avgPlayTime): self
    {
        $this->avgPlayTime = $avgPlayTime;
        return $this;
    }

    /**
     * 互动成本
     * @return float
     */
    public function getCpe(): ?float
    {
        return $this->cpe;
    }

    /**
     * 互动成本
     * @param float $cpe
     * @return self
     */
    public function setCpe(?float $cpe): self
    {
        $this->cpe = $cpe;
        return $this;
    }

    /**
     * 千次播放成本
     * @return float
     */
    public function getCpm(): ?float
    {
        return $this->cpm;
    }

    /**
     * 千次播放成本
     * @param float $cpm
     * @return self
     */
    public function setCpm(?float $cpm): self
    {
        $this->cpm = $cpm;
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
     * 触达频次
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStatFrequencyStatsInner[]
     */
    public function getFrequencyStats(): ?array
    {
        return $this->frequencyStats;
    }

    /**
     * 触达频次
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStatFrequencyStatsInner[] $frequencyStats
     * @return self
     */
    public function setFrequencyStats(?array $frequencyStats): self
    {
        $this->frequencyStats = $frequencyStats;
        return $this;
    }

    /**
     * 互动率
     * @return float
     */
    public function getInteractRate(): ?float
    {
        return $this->interactRate;
    }

    /**
     * 互动率
     * @param float $interactRate
     * @return self
     */
    public function setInteractRate(?float $interactRate): self
    {
        $this->interactRate = $interactRate;
        return $this;
    }

    /**
     * 评论量
     * @return int
     */
    public function getItemCommentCnt(): ?int
    {
        return $this->itemCommentCnt;
    }

    /**
     * 评论量
     * @param int $itemCommentCnt
     * @return self
     */
    public function setItemCommentCnt(?int $itemCommentCnt): self
    {
        $this->itemCommentCnt = $itemCommentCnt;
        return $this;
    }

    /**
     * 点赞量
     * @return int
     */
    public function getItemLikeCnt(): ?int
    {
        return $this->itemLikeCnt;
    }

    /**
     * 点赞量
     * @param int $itemLikeCnt
     * @return self
     */
    public function setItemLikeCnt(?int $itemLikeCnt): self
    {
        $this->itemLikeCnt = $itemLikeCnt;
        return $this;
    }

    /**
     * 播放量
     * @return int
     */
    public function getItemPlayCnt(): ?int
    {
        return $this->itemPlayCnt;
    }

    /**
     * 播放量
     * @param int $itemPlayCnt
     * @return self
     */
    public function setItemPlayCnt(?int $itemPlayCnt): self
    {
        $this->itemPlayCnt = $itemPlayCnt;
        return $this;
    }

    /**
     * 分享量
     * @return int
     */
    public function getItemShareCnt(): ?int
    {
        return $this->itemShareCnt;
    }

    /**
     * 分享量
     * @param int $itemShareCnt
     * @return self
     */
    public function setItemShareCnt(?int $itemShareCnt): self
    {
        $this->itemShareCnt = $itemShareCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->avgPlayTime !== null) {
            $result['avg_play_time'] = $this->avgPlayTime;
        }
        if ($this->cpe !== null) {
            $result['cpe'] = $this->cpe;
        }
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
        }
        if ($this->finishRate !== null) {
            $result['finish_rate'] = $this->finishRate;
        }
        if ($this->frequencyStats !== null) {
            $result['frequency_stats'] = $this->frequencyStats;
        }
        if ($this->interactRate !== null) {
            $result['interact_rate'] = $this->interactRate;
        }
        if ($this->itemCommentCnt !== null) {
            $result['item_comment_cnt'] = $this->itemCommentCnt;
        }
        if ($this->itemLikeCnt !== null) {
            $result['item_like_cnt'] = $this->itemLikeCnt;
        }
        if ($this->itemPlayCnt !== null) {
            $result['item_play_cnt'] = $this->itemPlayCnt;
        }
        if ($this->itemShareCnt !== null) {
            $result['item_share_cnt'] = $this->itemShareCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['avg_play_time'] ?? null) !== null) {
            $obj->avgPlayTime = (float) $v;
        }
        if (($v = $data['cpe'] ?? null) !== null) {
            $obj->cpe = (float) $v;
        }
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (float) $v;
        }
        if (($v = $data['finish_rate'] ?? null) !== null) {
            $obj->finishRate = (float) $v;
        }
        if (($v = $data['frequency_stats'] ?? null) !== null && is_array($v)) {
            $obj->frequencyStats = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStatFrequencyStatsInner::fromArray($vv), $v);
        }
        if (($v = $data['interact_rate'] ?? null) !== null) {
            $obj->interactRate = (float) $v;
        }
        if (($v = $data['item_comment_cnt'] ?? null) !== null) {
            $obj->itemCommentCnt = (int) $v;
        }
        if (($v = $data['item_like_cnt'] ?? null) !== null) {
            $obj->itemLikeCnt = (int) $v;
        }
        if (($v = $data['item_play_cnt'] ?? null) !== null) {
            $obj->itemPlayCnt = (int) $v;
        }
        if (($v = $data['item_share_cnt'] ?? null) !== null) {
            $obj->itemShareCnt = (int) $v;
        }
        return $obj;
    }
}
