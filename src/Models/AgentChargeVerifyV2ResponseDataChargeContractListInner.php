<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentChargeVerifyV2ResponseDataChargeContractListInner implements \JsonSerializable
{
    /**
     * 允许的资金池投放方式
     * @var \Oceanengine\Models\AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList[]
     */
    protected ?array $allowDeliveryTypeList = null;

    /**
     * 合同生效时间，格式：yyyy-MM-dd
     * @var string
     */
    protected ?string $contBeginDate = null;

    /**
     * 合同结束时间，格式：yyyy-MM-dd
     * @var string
     */
    protected ?string $contEndDate = null;

    /**
     * 合同ID
     * @var int
     */
    protected ?int $contractId = null;

    /**
     * 合同名称
     * @var string
     */
    protected ?string $contractName = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 代理商客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 签约主体名称
     * @var string
     */
    protected ?string $subjectName = null;

    /**
     * 允许的资金池投放方式
     * @return \Oceanengine\Models\AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList[]
     */
    public function getAllowDeliveryTypeList(): ?array
    {
        return $this->allowDeliveryTypeList;
    }

    /**
     * 允许的资金池投放方式
     * @param \Oceanengine\Models\AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList[] $allowDeliveryTypeList
     * @return self
     */
    public function setAllowDeliveryTypeList(?array $allowDeliveryTypeList): self
    {
        $this->allowDeliveryTypeList = $allowDeliveryTypeList;
        return $this;
    }

    /**
     * 合同生效时间，格式：yyyy-MM-dd
     * @return string
     */
    public function getContBeginDate(): ?string
    {
        return $this->contBeginDate;
    }

    /**
     * 合同生效时间，格式：yyyy-MM-dd
     * @param string $contBeginDate
     * @return self
     */
    public function setContBeginDate(?string $contBeginDate): self
    {
        $this->contBeginDate = $contBeginDate;
        return $this;
    }

    /**
     * 合同结束时间，格式：yyyy-MM-dd
     * @return string
     */
    public function getContEndDate(): ?string
    {
        return $this->contEndDate;
    }

    /**
     * 合同结束时间，格式：yyyy-MM-dd
     * @param string $contEndDate
     * @return self
     */
    public function setContEndDate(?string $contEndDate): self
    {
        $this->contEndDate = $contEndDate;
        return $this;
    }

    /**
     * 合同ID
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * 合同ID
     * @param int $contractId
     * @return self
     */
    public function setContractId(?int $contractId): self
    {
        $this->contractId = $contractId;
        return $this;
    }

    /**
     * 合同名称
     * @return string
     */
    public function getContractName(): ?string
    {
        return $this->contractName;
    }

    /**
     * 合同名称
     * @param string $contractName
     * @return self
     */
    public function setContractName(?string $contractName): self
    {
        $this->contractName = $contractName;
        return $this;
    }

    /**
     * 合同编号
     * @return string
     */
    public function getContractSerial(): ?string
    {
        return $this->contractSerial;
    }

    /**
     * 合同编号
     * @param string $contractSerial
     * @return self
     */
    public function setContractSerial(?string $contractSerial): self
    {
        $this->contractSerial = $contractSerial;
        return $this;
    }

    /**
     * 代理商客户名称
     * @return string
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * 代理商客户名称
     * @param string $customerName
     * @return self
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * 签约主体名称
     * @return string
     */
    public function getSubjectName(): ?string
    {
        return $this->subjectName;
    }

    /**
     * 签约主体名称
     * @param string $subjectName
     * @return self
     */
    public function setSubjectName(?string $subjectName): self
    {
        $this->subjectName = $subjectName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowDeliveryTypeList !== null) {
            $result['allow_delivery_type_list'] = $this->allowDeliveryTypeList;
        }
        if ($this->contBeginDate !== null) {
            $result['cont_begin_date'] = $this->contBeginDate;
        }
        if ($this->contEndDate !== null) {
            $result['cont_end_date'] = $this->contEndDate;
        }
        if ($this->contractId !== null) {
            $result['contract_id'] = $this->contractId;
        }
        if ($this->contractName !== null) {
            $result['contract_name'] = $this->contractName;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->subjectName !== null) {
            $result['subject_name'] = $this->subjectName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_delivery_type_list'] ?? null) !== null && is_array($v)) {
            $obj->allowDeliveryTypeList = $v;
        }
        if (($v = $data['cont_begin_date'] ?? null) !== null) {
            $obj->contBeginDate = (string) $v;
        }
        if (($v = $data['cont_end_date'] ?? null) !== null) {
            $obj->contEndDate = (string) $v;
        }
        if (($v = $data['contract_id'] ?? null) !== null) {
            $obj->contractId = (int) $v;
        }
        if (($v = $data['contract_name'] ?? null) !== null) {
            $obj->contractName = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['subject_name'] ?? null) !== null) {
            $obj->subjectName = (string) $v;
        }
        return $obj;
    }
}
