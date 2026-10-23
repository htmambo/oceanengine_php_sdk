<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueContactLogOverviewQueryV2ResponseData implements \JsonSerializable
{
    /**
     * 接通话单平均通话时长。单位秒。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $connectedAverageDuration = null;

    /**
     * 接通话单量。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $connectedContactLogCnt = null;

    /**
     * 话单接通率。时间粒度为话单创建时间。
     * @var float
     */
    protected ?float $connectedContactLogRate = null;

    /**
     * 总话单量。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $contactLogCnt = null;

    /**
     * 深度沟通（通话时长大于3min）线索量。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $deepTalkClueCnt = null;

    /**
     * 深度沟通（通话时长大于3min）话单量。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $deepTalkContactLogCnt = null;

    /**
     * 通话总时长。单位秒。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $totalDuration = null;

    /**
     * 未接通话单平均拨打时长。单位秒。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $unconnectedAverageTryDuration = null;

    /**
     * 未接通话单量。时间粒度为话单创建时间。
     * @var int
     */
    protected ?int $unconnectedContactLogCnt = null;

    /**
     * 接通话单平均通话时长。单位秒。时间粒度为话单创建时间。
     * @return int
     */
    public function getConnectedAverageDuration(): ?int
    {
        return $this->connectedAverageDuration;
    }

    /**
     * 接通话单平均通话时长。单位秒。时间粒度为话单创建时间。
     * @param int $connectedAverageDuration
     * @return self
     */
    public function setConnectedAverageDuration(?int $connectedAverageDuration): self
    {
        $this->connectedAverageDuration = $connectedAverageDuration;
        return $this;
    }

    /**
     * 接通话单量。时间粒度为话单创建时间。
     * @return int
     */
    public function getConnectedContactLogCnt(): ?int
    {
        return $this->connectedContactLogCnt;
    }

    /**
     * 接通话单量。时间粒度为话单创建时间。
     * @param int $connectedContactLogCnt
     * @return self
     */
    public function setConnectedContactLogCnt(?int $connectedContactLogCnt): self
    {
        $this->connectedContactLogCnt = $connectedContactLogCnt;
        return $this;
    }

    /**
     * 话单接通率。时间粒度为话单创建时间。
     * @return float
     */
    public function getConnectedContactLogRate(): ?float
    {
        return $this->connectedContactLogRate;
    }

    /**
     * 话单接通率。时间粒度为话单创建时间。
     * @param float $connectedContactLogRate
     * @return self
     */
    public function setConnectedContactLogRate(?float $connectedContactLogRate): self
    {
        $this->connectedContactLogRate = $connectedContactLogRate;
        return $this;
    }

    /**
     * 总话单量。时间粒度为话单创建时间。
     * @return int
     */
    public function getContactLogCnt(): ?int
    {
        return $this->contactLogCnt;
    }

    /**
     * 总话单量。时间粒度为话单创建时间。
     * @param int $contactLogCnt
     * @return self
     */
    public function setContactLogCnt(?int $contactLogCnt): self
    {
        $this->contactLogCnt = $contactLogCnt;
        return $this;
    }

    /**
     * 深度沟通（通话时长大于3min）线索量。时间粒度为话单创建时间。
     * @return int
     */
    public function getDeepTalkClueCnt(): ?int
    {
        return $this->deepTalkClueCnt;
    }

    /**
     * 深度沟通（通话时长大于3min）线索量。时间粒度为话单创建时间。
     * @param int $deepTalkClueCnt
     * @return self
     */
    public function setDeepTalkClueCnt(?int $deepTalkClueCnt): self
    {
        $this->deepTalkClueCnt = $deepTalkClueCnt;
        return $this;
    }

    /**
     * 深度沟通（通话时长大于3min）话单量。时间粒度为话单创建时间。
     * @return int
     */
    public function getDeepTalkContactLogCnt(): ?int
    {
        return $this->deepTalkContactLogCnt;
    }

    /**
     * 深度沟通（通话时长大于3min）话单量。时间粒度为话单创建时间。
     * @param int $deepTalkContactLogCnt
     * @return self
     */
    public function setDeepTalkContactLogCnt(?int $deepTalkContactLogCnt): self
    {
        $this->deepTalkContactLogCnt = $deepTalkContactLogCnt;
        return $this;
    }

    /**
     * 通话总时长。单位秒。时间粒度为话单创建时间。
     * @return int
     */
    public function getTotalDuration(): ?int
    {
        return $this->totalDuration;
    }

    /**
     * 通话总时长。单位秒。时间粒度为话单创建时间。
     * @param int $totalDuration
     * @return self
     */
    public function setTotalDuration(?int $totalDuration): self
    {
        $this->totalDuration = $totalDuration;
        return $this;
    }

    /**
     * 未接通话单平均拨打时长。单位秒。时间粒度为话单创建时间。
     * @return int
     */
    public function getUnconnectedAverageTryDuration(): ?int
    {
        return $this->unconnectedAverageTryDuration;
    }

    /**
     * 未接通话单平均拨打时长。单位秒。时间粒度为话单创建时间。
     * @param int $unconnectedAverageTryDuration
     * @return self
     */
    public function setUnconnectedAverageTryDuration(?int $unconnectedAverageTryDuration): self
    {
        $this->unconnectedAverageTryDuration = $unconnectedAverageTryDuration;
        return $this;
    }

    /**
     * 未接通话单量。时间粒度为话单创建时间。
     * @return int
     */
    public function getUnconnectedContactLogCnt(): ?int
    {
        return $this->unconnectedContactLogCnt;
    }

    /**
     * 未接通话单量。时间粒度为话单创建时间。
     * @param int $unconnectedContactLogCnt
     * @return self
     */
    public function setUnconnectedContactLogCnt(?int $unconnectedContactLogCnt): self
    {
        $this->unconnectedContactLogCnt = $unconnectedContactLogCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->connectedAverageDuration !== null) {
            $result['connected_average_duration'] = $this->connectedAverageDuration;
        }
        if ($this->connectedContactLogCnt !== null) {
            $result['connected_contact_log_cnt'] = $this->connectedContactLogCnt;
        }
        if ($this->connectedContactLogRate !== null) {
            $result['connected_contact_log_rate'] = $this->connectedContactLogRate;
        }
        if ($this->contactLogCnt !== null) {
            $result['contact_log_cnt'] = $this->contactLogCnt;
        }
        if ($this->deepTalkClueCnt !== null) {
            $result['deep_talk_clue_cnt'] = $this->deepTalkClueCnt;
        }
        if ($this->deepTalkContactLogCnt !== null) {
            $result['deep_talk_contact_log_cnt'] = $this->deepTalkContactLogCnt;
        }
        if ($this->totalDuration !== null) {
            $result['total_duration'] = $this->totalDuration;
        }
        if ($this->unconnectedAverageTryDuration !== null) {
            $result['unconnected_average_try_duration'] = $this->unconnectedAverageTryDuration;
        }
        if ($this->unconnectedContactLogCnt !== null) {
            $result['unconnected_contact_log_cnt'] = $this->unconnectedContactLogCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['connected_average_duration'] ?? null) !== null) {
            $obj->connectedAverageDuration = (int) $v;
        }
        if (($v = $data['connected_contact_log_cnt'] ?? null) !== null) {
            $obj->connectedContactLogCnt = (int) $v;
        }
        if (($v = $data['connected_contact_log_rate'] ?? null) !== null) {
            $obj->connectedContactLogRate = (float) $v;
        }
        if (($v = $data['contact_log_cnt'] ?? null) !== null) {
            $obj->contactLogCnt = (int) $v;
        }
        if (($v = $data['deep_talk_clue_cnt'] ?? null) !== null) {
            $obj->deepTalkClueCnt = (int) $v;
        }
        if (($v = $data['deep_talk_contact_log_cnt'] ?? null) !== null) {
            $obj->deepTalkContactLogCnt = (int) $v;
        }
        if (($v = $data['total_duration'] ?? null) !== null) {
            $obj->totalDuration = (int) $v;
        }
        if (($v = $data['unconnected_average_try_duration'] ?? null) !== null) {
            $obj->unconnectedAverageTryDuration = (int) $v;
        }
        if (($v = $data['unconnected_contact_log_cnt'] ?? null) !== null) {
            $obj->unconnectedContactLogCnt = (int) $v;
        }
        return $obj;
    }
}
