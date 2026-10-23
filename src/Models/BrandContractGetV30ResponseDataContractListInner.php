<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandContractGetV30ResponseDataContractListInner implements \JsonSerializable
{
    /**
     * 审批状态
     * @var string
     */
    protected ?string $approvalStatusName = null;

    /**
     * 合同类型
     * @var string
     */
    protected ?string $basicContTypeName = null;

    /**
     * 合同ID
     * @var int
     */
    protected ?int $contId = null;

    /**
     * 合同名称
     * @var string
     */
    protected ?string $contName = null;

    /**
     * 结束生效时间
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $serial = null;

    /**
     * 开始生效时间
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * 审批状态
     * @return string
     */
    public function getApprovalStatusName(): ?string
    {
        return $this->approvalStatusName;
    }

    /**
     * 审批状态
     * @param string $approvalStatusName
     * @return self
     */
    public function setApprovalStatusName(?string $approvalStatusName): self
    {
        $this->approvalStatusName = $approvalStatusName;
        return $this;
    }

    /**
     * 合同类型
     * @return string
     */
    public function getBasicContTypeName(): ?string
    {
        return $this->basicContTypeName;
    }

    /**
     * 合同类型
     * @param string $basicContTypeName
     * @return self
     */
    public function setBasicContTypeName(?string $basicContTypeName): self
    {
        $this->basicContTypeName = $basicContTypeName;
        return $this;
    }

    /**
     * 合同ID
     * @return int
     */
    public function getContId(): ?int
    {
        return $this->contId;
    }

    /**
     * 合同ID
     * @param int $contId
     * @return self
     */
    public function setContId(?int $contId): self
    {
        $this->contId = $contId;
        return $this;
    }

    /**
     * 合同名称
     * @return string
     */
    public function getContName(): ?string
    {
        return $this->contName;
    }

    /**
     * 合同名称
     * @param string $contName
     * @return self
     */
    public function setContName(?string $contName): self
    {
        $this->contName = $contName;
        return $this;
    }

    /**
     * 结束生效时间
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * 结束生效时间
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 合同编号
     * @return string
     */
    public function getSerial(): ?string
    {
        return $this->serial;
    }

    /**
     * 合同编号
     * @param string $serial
     * @return self
     */
    public function setSerial(?string $serial): self
    {
        $this->serial = $serial;
        return $this;
    }

    /**
     * 开始生效时间
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * 开始生效时间
     * @param string $startDate
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->approvalStatusName !== null) {
            $result['approval_status_name'] = $this->approvalStatusName;
        }
        if ($this->basicContTypeName !== null) {
            $result['basic_cont_type_name'] = $this->basicContTypeName;
        }
        if ($this->contId !== null) {
            $result['cont_id'] = $this->contId;
        }
        if ($this->contName !== null) {
            $result['cont_name'] = $this->contName;
        }
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->serial !== null) {
            $result['serial'] = $this->serial;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['approval_status_name'] ?? null) !== null) {
            $obj->approvalStatusName = (string) $v;
        }
        if (($v = $data['basic_cont_type_name'] ?? null) !== null) {
            $obj->basicContTypeName = (string) $v;
        }
        if (($v = $data['cont_id'] ?? null) !== null) {
            $obj->contId = (int) $v;
        }
        if (($v = $data['cont_name'] ?? null) !== null) {
            $obj->contName = (string) $v;
        }
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['serial'] ?? null) !== null) {
            $obj->serial = (string) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        return $obj;
    }
}
