<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserUnassignV2Request implements \JsonSerializable
{
    /**
     * 广告主账户ID，最多支持500个
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 待解绑广告主账户所属的代理商账户id
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 待解绑的员工id
     * @var int
     */
    protected ?int $employeeId = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserUnassignV2Role
     */
    protected ?string $role = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserUnassignV2Type
     */
    protected ?string $type = null;

    /**
     * 广告主账户ID，最多支持500个
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主账户ID，最多支持500个
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 待解绑广告主账户所属的代理商账户id
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 待解绑广告主账户所属的代理商账户id
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 待解绑的员工id
     * @return int
     */
    public function getEmployeeId(): ?int
    {
        return $this->employeeId;
    }

    /**
     * 待解绑的员工id
     * @param int $employeeId
     * @return self
     */
    public function setEmployeeId(?int $employeeId): self
    {
        $this->employeeId = $employeeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserUnassignV2Role
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserUnassignV2Role $role
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserUnassignV2Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserUnassignV2Type $type
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
