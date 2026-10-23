<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferCreateV30Request implements \JsonSerializable
{
    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * 锚定账户id，1:N的1
     * @var int
     */
    protected ?int $opponentTargetId = null;

    /**
     * 组织id
     * @var int
     */
    protected ?int $organizationId = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferCreateV30Platform
     */
    protected ?string $platform = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     * @var \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInner[]
     */
    protected ?array $targetDetailList = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferCreateV30TransferDirection
     */
    protected ?string $transferDirection = null;

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
     * 锚定账户id，1:N的1
     * @return int
     */
    public function getOpponentTargetId(): ?int
    {
        return $this->opponentTargetId;
    }

    /**
     * 锚定账户id，1:N的1
     * @param int $opponentTargetId
     * @return self
     */
    public function setOpponentTargetId(?int $opponentTargetId): self
    {
        $this->opponentTargetId = $opponentTargetId;
        return $this;
    }

    /**
     * 组织id
     * @return int
     */
    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    /**
     * 组织id
     * @param int $organizationId
     * @return self
     */
    public function setOrganizationId(?int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferCreateV30Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferCreateV30Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
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
     * @return \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInner[]
     */
    public function getTargetDetailList(): ?array
    {
        return $this->targetDetailList;
    }

    /**
     * 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     * @param \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInner[] $targetDetailList
     * @return self
     */
    public function setTargetDetailList(?array $targetDetailList): self
    {
        $this->targetDetailList = $targetDetailList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferCreateV30TransferDirection
     */
    public function getTransferDirection(): ?string
    {
        return $this->transferDirection;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferCreateV30TransferDirection $transferDirection
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
        if ($this->bizRequestNo !== null) {
            $result['biz_request_no'] = $this->bizRequestNo;
        }
        if ($this->opponentTargetId !== null) {
            $result['opponent_target_id'] = $this->opponentTargetId;
        }
        if ($this->organizationId !== null) {
            $result['organization_id'] = $this->organizationId;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->targetDetailList !== null) {
            $result['target_detail_list'] = $this->targetDetailList;
        }
        if ($this->transferDirection !== null) {
            $result['transfer_direction'] = $this->transferDirection;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['opponent_target_id'] ?? null) !== null) {
            $obj->opponentTargetId = (int) $v;
        }
        if (($v = $data['organization_id'] ?? null) !== null) {
            $obj->organizationId = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['target_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->targetDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_direction'] ?? null) !== null) {
            $obj->transferDirection = (string) $v;
        }
        return $obj;
    }
}
