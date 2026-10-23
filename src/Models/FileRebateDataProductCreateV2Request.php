<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateDataProductCreateV2Request implements \JsonSerializable
{
    /**
     * 代理商账户id
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * @var \Oceanengine\Models\FileRebateDataProductCreateV2SubscribeStatus
     */
    protected ?string $subscribeStatus = null;

    /**
     * 代理商账户id
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户id
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileRebateDataProductCreateV2SubscribeStatus
     */
    public function getSubscribeStatus(): ?string
    {
        return $this->subscribeStatus;
    }

    /**
     * @param \Oceanengine\Models\FileRebateDataProductCreateV2SubscribeStatus $subscribeStatus
     * @return self
     */
    public function setSubscribeStatus(?string $subscribeStatus): self
    {
        $this->subscribeStatus = $subscribeStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->subscribeStatus !== null) {
            $result['subscribe_status'] = $this->subscribeStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['subscribe_status'] ?? null) !== null) {
            $obj->subscribeStatus = (string) $v;
        }
        return $obj;
    }
}
