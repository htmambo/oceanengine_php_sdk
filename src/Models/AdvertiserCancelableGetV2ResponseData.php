<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserCancelableGetV2ResponseData implements \JsonSerializable
{
    /**
     * 账户类型：1直客 2虚客
     * @var int
     */
    protected ?int $accountType = null;

    /**
     * 虚客对应的服务商公司名称
     * @var string
     */
    protected ?string $agentCompanyName = null;

    /**
     * 话术8：不满足注销的原因列表
     * @var string[]
     */
    protected ?array $cancelBlockReasons = null;

    /**
     * 是否可注销
     * @var bool
     */
    protected ?bool $deletable = null;

    /**
     * 账户类型：1直客 2虚客
     * @return int
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * 账户类型：1直客 2虚客
     * @param int $accountType
     * @return self
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 虚客对应的服务商公司名称
     * @return string
     */
    public function getAgentCompanyName(): ?string
    {
        return $this->agentCompanyName;
    }

    /**
     * 虚客对应的服务商公司名称
     * @param string $agentCompanyName
     * @return self
     */
    public function setAgentCompanyName(?string $agentCompanyName): self
    {
        $this->agentCompanyName = $agentCompanyName;
        return $this;
    }

    /**
     * 话术8：不满足注销的原因列表
     * @return string[]
     */
    public function getCancelBlockReasons(): ?array
    {
        return $this->cancelBlockReasons;
    }

    /**
     * 话术8：不满足注销的原因列表
     * @param string[] $cancelBlockReasons
     * @return self
     */
    public function setCancelBlockReasons(?array $cancelBlockReasons): self
    {
        $this->cancelBlockReasons = $cancelBlockReasons;
        return $this;
    }

    /**
     * 是否可注销
     * @return bool
     */
    public function getDeletable(): ?bool
    {
        return $this->deletable;
    }

    /**
     * 是否可注销
     * @param bool $deletable
     * @return self
     */
    public function setDeletable(?bool $deletable): self
    {
        $this->deletable = $deletable;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->agentCompanyName !== null) {
            $result['agent_company_name'] = $this->agentCompanyName;
        }
        if ($this->cancelBlockReasons !== null) {
            $result['cancel_block_reasons'] = $this->cancelBlockReasons;
        }
        if ($this->deletable !== null) {
            $result['deletable'] = $this->deletable;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (int) $v;
        }
        if (($v = $data['agent_company_name'] ?? null) !== null) {
            $obj->agentCompanyName = (string) $v;
        }
        if (($v = $data['cancel_block_reasons'] ?? null) !== null && is_array($v)) {
            $obj->cancelBlockReasons = $v;
        }
        if (($v = $data['deletable'] ?? null) !== null) {
            $obj->deletable = (bool) $v;
        }
        return $obj;
    }
}
