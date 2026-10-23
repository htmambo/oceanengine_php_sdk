<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo implements \JsonSerializable
{
    /**
     * 评论数
     * @var int
     */
    protected ?int $comment = null;

    /**
     * 组件点击数，仅BoostAction=LINK_ACTION有效
     * @var int
     */
    protected ?int $componentClickPv = null;

    /**
     * 组件CTR，百分数*100取整，如:1% -> 100，仅BoostAction=LINK_ACTION有效
     * @var int
     */
    protected ?int $componentCtr = null;

    /**
     * 转化数，仅BoostAction=LINK_ACTION有效
     * @var int
     */
    protected ?int $convertCount = null;

    /**
     * 业务目标人群实际覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @var int
     */
    protected ?int $finishedWatcherUv = null;

    /**
     * 点赞数
     * @var int
     */
    protected ?int $like = null;

    /**
     * 播放数
     * @var int
     */
    protected ?int $play = null;

    /**
     * 五秒播放率
     * @var int
     */
    protected ?int $playRateWith5s = null;

    /**
     * 分享数
     * @var int
     */
    protected ?int $share = null;

    /**
     * 业务目标人群预期覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @var int
     */
    protected ?int $targetWatcherUv = null;

    /**
     * 视频总人群覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @var int
     */
    protected ?int $totalWatcherUv = null;

    /**
     * 评论数
     * @return int
     */
    public function getComment(): ?int
    {
        return $this->comment;
    }

    /**
     * 评论数
     * @param int $comment
     * @return self
     */
    public function setComment(?int $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * 组件点击数，仅BoostAction=LINK_ACTION有效
     * @return int
     */
    public function getComponentClickPv(): ?int
    {
        return $this->componentClickPv;
    }

    /**
     * 组件点击数，仅BoostAction=LINK_ACTION有效
     * @param int $componentClickPv
     * @return self
     */
    public function setComponentClickPv(?int $componentClickPv): self
    {
        $this->componentClickPv = $componentClickPv;
        return $this;
    }

    /**
     * 组件CTR，百分数*100取整，如:1% -> 100，仅BoostAction=LINK_ACTION有效
     * @return int
     */
    public function getComponentCtr(): ?int
    {
        return $this->componentCtr;
    }

    /**
     * 组件CTR，百分数*100取整，如:1% -> 100，仅BoostAction=LINK_ACTION有效
     * @param int $componentCtr
     * @return self
     */
    public function setComponentCtr(?int $componentCtr): self
    {
        $this->componentCtr = $componentCtr;
        return $this;
    }

    /**
     * 转化数，仅BoostAction=LINK_ACTION有效
     * @return int
     */
    public function getConvertCount(): ?int
    {
        return $this->convertCount;
    }

    /**
     * 转化数，仅BoostAction=LINK_ACTION有效
     * @param int $convertCount
     * @return self
     */
    public function setConvertCount(?int $convertCount): self
    {
        $this->convertCount = $convertCount;
        return $this;
    }

    /**
     * 业务目标人群实际覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @return int
     */
    public function getFinishedWatcherUv(): ?int
    {
        return $this->finishedWatcherUv;
    }

    /**
     * 业务目标人群实际覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @param int $finishedWatcherUv
     * @return self
     */
    public function setFinishedWatcherUv(?int $finishedWatcherUv): self
    {
        $this->finishedWatcherUv = $finishedWatcherUv;
        return $this;
    }

    /**
     * 点赞数
     * @return int
     */
    public function getLike(): ?int
    {
        return $this->like;
    }

    /**
     * 点赞数
     * @param int $like
     * @return self
     */
    public function setLike(?int $like): self
    {
        $this->like = $like;
        return $this;
    }

    /**
     * 播放数
     * @return int
     */
    public function getPlay(): ?int
    {
        return $this->play;
    }

    /**
     * 播放数
     * @param int $play
     * @return self
     */
    public function setPlay(?int $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * 五秒播放率
     * @return int
     */
    public function getPlayRateWith5s(): ?int
    {
        return $this->playRateWith5s;
    }

    /**
     * 五秒播放率
     * @param int $playRateWith5s
     * @return self
     */
    public function setPlayRateWith5s(?int $playRateWith5s): self
    {
        $this->playRateWith5s = $playRateWith5s;
        return $this;
    }

    /**
     * 分享数
     * @return int
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

    /**
     * 分享数
     * @param int $share
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;
        return $this;
    }

    /**
     * 业务目标人群预期覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @return int
     */
    public function getTargetWatcherUv(): ?int
    {
        return $this->targetWatcherUv;
    }

    /**
     * 业务目标人群预期覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @param int $targetWatcherUv
     * @return self
     */
    public function setTargetWatcherUv(?int $targetWatcherUv): self
    {
        $this->targetWatcherUv = $targetWatcherUv;
        return $this;
    }

    /**
     * 视频总人群覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @return int
     */
    public function getTotalWatcherUv(): ?int
    {
        return $this->totalWatcherUv;
    }

    /**
     * 视频总人群覆盖数，仅BoostType=CUSTOM_PACKAGE&& BoostAction=NATIVE_ACTION有效
     * @param int $totalWatcherUv
     * @return self
     */
    public function setTotalWatcherUv(?int $totalWatcherUv): self
    {
        $this->totalWatcherUv = $totalWatcherUv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->componentClickPv !== null) {
            $result['component_click_pv'] = $this->componentClickPv;
        }
        if ($this->componentCtr !== null) {
            $result['component_ctr'] = $this->componentCtr;
        }
        if ($this->convertCount !== null) {
            $result['convert_count'] = $this->convertCount;
        }
        if ($this->finishedWatcherUv !== null) {
            $result['finished_watcher_uv'] = $this->finishedWatcherUv;
        }
        if ($this->like !== null) {
            $result['like'] = $this->like;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->playRateWith5s !== null) {
            $result['play_rate_with5s'] = $this->playRateWith5s;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        if ($this->targetWatcherUv !== null) {
            $result['target_watcher_uv'] = $this->targetWatcherUv;
        }
        if ($this->totalWatcherUv !== null) {
            $result['total_watcher_uv'] = $this->totalWatcherUv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (int) $v;
        }
        if (($v = $data['component_click_pv'] ?? null) !== null) {
            $obj->componentClickPv = (int) $v;
        }
        if (($v = $data['component_ctr'] ?? null) !== null) {
            $obj->componentCtr = (int) $v;
        }
        if (($v = $data['convert_count'] ?? null) !== null) {
            $obj->convertCount = (int) $v;
        }
        if (($v = $data['finished_watcher_uv'] ?? null) !== null) {
            $obj->finishedWatcherUv = (int) $v;
        }
        if (($v = $data['like'] ?? null) !== null) {
            $obj->like = (int) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (int) $v;
        }
        if (($v = $data['play_rate_with5s'] ?? null) !== null) {
            $obj->playRateWith5s = (int) $v;
        }
        if (($v = $data['share'] ?? null) !== null) {
            $obj->share = (int) $v;
        }
        if (($v = $data['target_watcher_uv'] ?? null) !== null) {
            $obj->targetWatcherUv = (int) $v;
        }
        if (($v = $data['total_watcher_uv'] ?? null) !== null) {
            $obj->totalWatcherUv = (int) $v;
        }
        return $obj;
    }
}
