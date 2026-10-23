<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserAssignV2Request implements \JsonSerializable
{
    /**
     * 广告主账户ID，最多支持100个
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 待分配广告主账户的所属代理商账户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 待分配的员工id
     * @var int
     */
    protected ?int $employeeId = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserAssignV2Role
     */
    protected ?string $role = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserAssignV2Type
     */
    protected ?string $type = null;

    /**
     * 广告主账户ID，最多支持100个
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主账户ID，最多支持100个
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 待分配广告主账户的所属代理商账户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 待分配广告主账户的所属代理商账户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 待分配的员工id
     * @return int
     */
    public function getEmployeeId(): ?int
    {
        return $this->employeeId;
    }

    /**
     * 待分配的员工id
     * @param int $employeeId
     * @return self
     */
    public function setEmployeeId(?int $employeeId): self
    {
        $this->employeeId = $employeeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserAssignV2Role
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserAssignV2Role $role
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserAssignV2Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserAssignV2Type $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->employeeId !== null) {
            $result['employee_id'] = $this->employeeId;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
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
        if (($v = $data['employee_id'] ?? null) !== null) {
            $obj->employeeId = (int) $v;
        }
        if (($v = $data['role'] ?? null) !== null) {
            $obj->role = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
