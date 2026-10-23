<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletTransferCreateV30Request implements \JsonSerializable
{
    /**
     * 幂等唯一转账请求ID
     * @var string
     */
    protected ?string $bizRequestId = null;

    /**
     * 组织id
     * @var int
     */
    protected ?int $organizationId = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30Origin
     */
    protected ?string $origin = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 转账参与方列表，最多支持100个
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInner[]
     */
    protected ?array $transferParticipantList = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30UserType
     */
    protected ?string $userType = null;

    /**
     * 幂等唯一转账请求ID
     * @return string
     */
    public function getBizRequestId(): ?string
    {
        return $this->bizRequestId;
    }

    /**
     * 幂等唯一转账请求ID
     * @param string $bizRequestId
     * @return self
     */
    public function setBizRequestId(?string $bizRequestId): self
    {
        $this->bizRequestId = $bizRequestId;
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
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30Origin
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30Origin $origin
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;
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
     * 转账参与方列表，最多支持100个
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInner[]
     */
    public function getTransferParticipantList(): ?array
    {
        return $this->transferParticipantList;
    }

    /**
     * 转账参与方列表，最多支持100个
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInner[] $transferParticipantList
     * @return self
     */
    public function setTransferParticipantList(?array $transferParticipantList): self
    {
        $this->transferParticipantList = $transferParticipantList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30UserType
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30UserType $userType
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bizRequestId !== null) {
            $result['biz_request_id'] = $this->bizRequestId;
        }
        if ($this->organizationId !== null) {
            $result['organization_id'] = $this->organizationId;
        }
        if ($this->origin !== null) {
            $result['origin'] = $this->origin;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->transferParticipantList !== null) {
            $result['transfer_participant_list'] = $this->transferParticipantList;
        }
        if ($this->userType !== null) {
            $result['user_type'] = $this->userType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_request_id'] ?? null) !== null) {
            $obj->bizRequestId = (string) $v;
        }
        if (($v = $data['organization_id'] ?? null) !== null) {
            $obj->organizationId = (int) $v;
        }
        if (($v = $data['origin'] ?? null) !== null) {
            $obj->origin = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['transfer_participant_list'] ?? null) !== null && is_array($v)) {
            $obj->transferParticipantList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInner::fromArray($vv), $v);
        }
        if (($v = $data['user_type'] ?? null) !== null) {
            $obj->userType = (string) $v;
        }
        return $obj;
    }
}
