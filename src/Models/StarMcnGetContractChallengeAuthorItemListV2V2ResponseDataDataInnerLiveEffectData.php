<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData implements \JsonSerializable
{
    /**
     * 涨粉人数(只看点击关注的人数，不关心取关)
     * @var int
     */
    protected ?int $followUv = null;

    /**
     * 分享率(0.XXXX)
     * @var float
     */
    protected ?float $shareRate = null;

    /**
     * 直播观看次数
     * @var int
     */
    protected ?int $watchCnt = null;

    /**
     * #直播平均观看时长-s (总观看时长/观看人数)
     * @var float
     */
    protected ?float $watchDurationAvgS = null;

    /**
     * 直播观看人数
     * @var int
     */
    protected ?int $watchUv = null;

    /**
     * 涨粉人数(只看点击关注的人数，不关心取关)
     * @return int
     */
    public function getFollowUv(): ?int
    {
        return $this->followUv;
    }

    /**
     * 涨粉人数(只看点击关注的人数，不关心取关)
     * @param int $followUv
     * @return self
     */
    public function setFollowUv(?int $followUv): self
    {
        $this->followUv = $followUv;
        return $this;
    }

    /**
     * 分享率(0.XXXX)
     * @return float
     */
    public function getShareRate(): ?float
    {
        return $this->shareRate;
    }

    /**
     * 分享率(0.XXXX)
     * @param float $shareRate
     * @return self
     */
    public function setShareRate(?float $shareRate): self
    {
        $this->shareRate = $shareRate;
        return $this;
    }

    /**
     * 直播观看次数
     * @return int
     */
    public function getWatchCnt(): ?int
    {
        return $this->watchCnt;
    }

    /**
     * 直播观看次数
     * @param int $watchCnt
     * @return self
     */
    public function setWatchCnt(?int $watchCnt): self
    {
        $this->watchCnt = $watchCnt;
        return $this;
    }

    /**
     * #直播平均观看时长-s (总观看时长/观看人数)
     * @return float
     */
    public function getWatchDurationAvgS(): ?float
    {
        return $this->watchDurationAvgS;
    }

    /**
     * #直播平均观看时长-s (总观看时长/观看人数)
     * @param float $watchDurationAvgS
     * @return self
     */
    public function setWatchDurationAvgS(?float $watchDurationAvgS): self
    {
        $this->watchDurationAvgS = $watchDurationAvgS;
        return $this;
    }

    /**
     * 直播观看人数
     * @return int
     */
    public function getWatchUv(): ?int
    {
        return $this->watchUv;
    }

    /**
     * 直播观看人数
     * @param int $watchUv
     * @return self
     */
    public function setWatchUv(?int $watchUv): self
    {
        $this->watchUv = $watchUv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->followUv !== null) {
            $result['follow_uv'] = $this->followUv;
        }
        if ($this->shareRate !== null) {
            $result['share_rate'] = $this->shareRate;
        }
        if ($this->watchCnt !== null) {
            $result['watch_cnt'] = $this->watchCnt;
        }
        if ($this->watchDurationAvgS !== null) {
            $result['watch_duration_avg_s'] = $this->watchDurationAvgS;
        }
        if ($this->watchUv !== null) {
            $result['watch_uv'] = $this->watchUv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['follow_uv'] ?? null) !== null) {
            $obj->followUv = (int) $v;
        }
        if (($v = $data['share_rate'] ?? null) !== null) {
            $obj->shareRate = (float) $v;
        }
        if (($v = $data['watch_cnt'] ?? null) !== null) {
            $obj->watchCnt = (int) $v;
        }
        if (($v = $data['watch_duration_avg_s'] ?? null) !== null) {
            $obj->watchDurationAvgS = (float) $v;
        }
        if (($v = $data['watch_uv'] ?? null) !== null) {
            $obj->watchUv = (int) $v;
        }
        return $obj;
    }
}
