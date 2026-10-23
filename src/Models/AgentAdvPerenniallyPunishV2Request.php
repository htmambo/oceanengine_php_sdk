<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvPerenniallyPunishV2Request implements \JsonSerializable
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
     * @var \Oceanengine\Models\AgentAdvPerenniallyPunishV2PunishReason
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
     * @return \Oceanengine\Models\AgentAdvPerenniallyPunishV2PunishReason
     */
    public function getPunishReason(): ?string
    {
        return $this->punishReason;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvPerenniallyPunishV2PunishReason $punishReason
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
        if (($v = $data['punish_reason'] ?? null) !== null) {
            $obj->punishReason = (string) $v;
        }
        return $obj;
    }
}
