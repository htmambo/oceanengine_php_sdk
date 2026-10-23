<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateStatementV2Request implements \JsonSerializable
{
    /**
     * 若传入，则校验项目账户ID是否一致
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 代理商账户ID列表
     * @var int[]
     */
    protected ?array $agentIds = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 文件ID，当结算单模版类型为非标，则必须传入文件
     * @var int
     */
    protected ?int $fileId = null;

    /**
     * 结算单名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\CreateStatementV2Platform
     */
    protected ?string $platform = null;

    /**
     * 项目编号列表 200以内
     * @var string[]
     */
    protected ?array $projectSerialList = null;

    /**
     * 请求ID，要求唯一，幂等用，必传
     * @var string
     */
    protected ?string $requestId = null;

    /**
     * @var \Oceanengine\Models\CreateStatementV2TemplateType
     */
    protected ?string $templateType = null;

    /**
     * 若传入，则校验项目账户ID是否一致
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 若传入，则校验项目账户ID是否一致
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 代理商账户ID列表
     * @return int[]
     */
    public function getAgentIds(): ?array
    {
        return $this->agentIds;
    }

    /**
     * 代理商账户ID列表
     * @param int[] $agentIds
     * @return self
     */
    public function setAgentIds(?array $agentIds): self
    {
        $this->agentIds = $agentIds;
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
     * 文件ID，当结算单模版类型为非标，则必须传入文件
     * @return int
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    /**
     * 文件ID，当结算单模版类型为非标，则必须传入文件
     * @param int $fileId
     * @return self
     */
    public function setFileId(?int $fileId): self
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * 结算单名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 结算单名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreateStatementV2Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CreateStatementV2Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 项目编号列表 200以内
     * @return string[]
     */
    public function getProjectSerialList(): ?array
    {
        return $this->projectSerialList;
    }

    /**
     * 项目编号列表 200以内
     * @param string[] $projectSerialList
     * @return self
     */
    public function setProjectSerialList(?array $projectSerialList): self
    {
        $this->projectSerialList = $projectSerialList;
        return $this;
    }

    /**
     * 请求ID，要求唯一，幂等用，必传
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * 请求ID，要求唯一，幂等用，必传
     * @param string $requestId
     * @return self
     */
    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreateStatementV2TemplateType
     */
    public function getTemplateType(): ?string
    {
        return $this->templateType;
    }

    /**
     * @param \Oceanengine\Models\CreateStatementV2TemplateType $templateType
     * @return self
     */
    public function setTemplateType(?string $templateType): self
    {
        $this->templateType = $templateType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->agentIds !== null) {
            $result['agent_ids'] = $this->agentIds;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->fileId !== null) {
            $result['file_id'] = $this->fileId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->projectSerialList !== null) {
            $result['project_serial_list'] = $this->projectSerialList;
        }
        if ($this->requestId !== null) {
            $result['request_id'] = $this->requestId;
        }
        if ($this->templateType !== null) {
            $result['template_type'] = $this->templateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['agent_ids'] ?? null) !== null && is_array($v)) {
            $obj->agentIds = $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['file_id'] ?? null) !== null) {
            $obj->fileId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['project_serial_list'] ?? null) !== null && is_array($v)) {
            $obj->projectSerialList = $v;
        }
        if (($v = $data['request_id'] ?? null) !== null) {
            $obj->requestId = (string) $v;
        }
        if (($v = $data['template_type'] ?? null) !== null) {
            $obj->templateType = (string) $v;
        }
        return $obj;
    }
}
