<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvTemporaryPunishV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 临时惩罚截止时间，格式：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $punishEndTime = null;

    /**
     * 惩罚原因
     * @var string
     */
    protected ?string $punishReason = null;

    /**
     * 广告主id
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主id
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 临时惩罚截止时间，格式：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getPunishEndTime(): ?string
    {
        return $this->punishEndTime;
    }

    /**
     * 临时惩罚截止时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $punishEndTime
     * @return self
     */
    public function setPunishEndTime(?string $punishEndTime): self
    {
        $this->punishEndTime = $punishEndTime;
        return $this;
    }

    /**
     * 惩罚原因
     * @return string
     */
    public function getPunishReason(): ?string
    {
        return $this->punishReason;
    }

    /**
     * 惩罚原因
     * @param string $punishReason
     * @return self
     */
    public function setPunishReason(?string $punishReason): self
    {
        $this->punishReason = $punishReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->punishEndTime !== null) {
            $result['punish_end_time'] = $this->punishEndTime;
        }
        if ($this->punishReason !== null) {
            $result['punish_reason'] = $this->punishReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['punish_end_time'] ?? null) !== null) {
            $obj->punishEndTime = (string) $v;
        }
        if (($v = $data['punish_reason'] ?? null) !== null) {
            $obj->punishReason = (string) $v;
        }
        return $obj;
    }
}
