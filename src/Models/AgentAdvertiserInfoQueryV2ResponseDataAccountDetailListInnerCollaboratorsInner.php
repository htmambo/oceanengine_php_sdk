<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerCollaboratorsInner implements \JsonSerializable
{
    /**
     * 竞价权限协作者id
     * @var int
     */
    protected ?int $employeId = null;

    /**
     * 竞价权限协作者姓名
     * @var string
     */
    protected ?string $employeeName = null;

    /**
     * 竞价权限协作者id
     * @return int
     */
    public function getEmployeId(): ?int
    {
        return $this->employeId;
    }

    /**
     * 竞价权限协作者id
     * @param int $employeId
     * @return self
     */
    public function setEmployeId(?int $employeId): self
    {
        $this->employeId = $employeId;
        return $this;
    }

    /**
     * 竞价权限协作者姓名
     * @return string
     */
    public function getEmployeeName(): ?string
    {
        return $this->employeeName;
    }

    /**
     * 竞价权限协作者姓名
     * @param string $employeeName
     * @return self
     */
    public function setEmployeeName(?string $employeeName): self
    {
        $this->employeeName = $employeeName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->employeId !== null) {
            $result['employe_id'] = $this->employeId;
        }
        if ($this->employeeName !== null) {
            $result['employee_name'] = $this->employeeName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['employe_id'] ?? null) !== null) {
            $obj->employeId = (int) $v;
        }
        if (($v = $data['employee_name'] ?? null) !== null) {
            $obj->employeeName = (string) $v;
        }
        return $obj;
    }
}
