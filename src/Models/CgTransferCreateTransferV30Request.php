<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCreateTransferV30Request implements \JsonSerializable
{
    /**
     * 锚定账户id，1:N的1
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 代理商账户id，用于鉴权
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     * @var \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInner[]
     */
    protected ?array $targetAccountDetailList = null;

    /**
     * @var \Oceanengine\Models\CgTransferCreateTransferV30TransferDirection
     */
    protected ?string $transferDirection = null;

    /**
     * 锚定账户id，1:N的1
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 锚定账户id，1:N的1
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 代理商账户id，用于鉴权
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户id，用于鉴权
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @return string
     */
    public function getBizRequestNo(): ?string
    {
        return $this->bizRequestNo;
    }

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @param string $bizRequestNo
     * @return self
     */
    public function setBizRequestNo(?string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     * @return \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInner[]
     */
    public function getTargetAccountDetailList(): ?array
    {
        return $this->targetAccountDetailList;
    }

    /**
     * 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     * @param \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInner[] $targetAccountDetailList
     * @return self
     */
    public function setTargetAccountDetailList(?array $targetAccountDetailList): self
    {
        $this->targetAccountDetailList = $targetAccountDetailList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferCreateTransferV30TransferDirection
     */
    public function getTransferDirection(): ?string
    {
        return $this->transferDirection;
    }

    /**
     * @param \Oceanengine\Models\CgTransferCreateTransferV30TransferDirection $transferDirection
     * @return self
     */
    public function setTransferDirection(?string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
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
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->bizRequestNo !== null) {
            $result['biz_request_no'] = $this->bizRequestNo;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->targetAccountDetailList !== null) {
            $result['target_account_detail_list'] = $this->targetAccountDetailList;
        }
        if ($this->transferDirection !== null) {
            $result['transfer_direction'] = $this->transferDirection;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['target_account_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->targetAccountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_direction'] ?? null) !== null) {
            $obj->transferDirection = (string) $v;
        }
        return $obj;
    }
}
