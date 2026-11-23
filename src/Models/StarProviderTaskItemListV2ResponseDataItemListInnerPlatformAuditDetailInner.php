<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProviderTaskItemListV2ResponseDataItemListInnerPlatformAuditDetailInner implements \JsonSerializable
{
    /**
     * 平台审核展示名：视频重复、内容审核、安全初审、电商预审、巨量千川预审
     * @var string
     */
    protected ?string $amuDisplayName = null;

    /**
     * 审核原因，原样透传；未设置时不返回
     * @var string
     */
    protected ?string $banReason = null;

    /**
     * AMUAuditStatus 原值：0 未送审，1 审核中，4 通过，5 拒绝，6 忽略送审（通过），7 取消；保留未知值
     * @var int
     */
    protected ?int $status = null;

    /**
     * 平台审核展示名：视频重复、内容审核、安全初审、电商预审、巨量千川预审
     * @return string
     */
    public function getAmuDisplayName(): ?string
    {
        return $this->amuDisplayName;
    }

    /**
     * 平台审核展示名：视频重复、内容审核、安全初审、电商预审、巨量千川预审
     * @param string $amuDisplayName
     * @return self
     */
    public function setAmuDisplayName(?string $amuDisplayName): self
    {
        $this->amuDisplayName = $amuDisplayName;
        return $this;
    }

    /**
     * 审核原因，原样透传；未设置时不返回
     * @return string
     */
    public function getBanReason(): ?string
    {
        return $this->banReason;
    }

    /**
     * 审核原因，原样透传；未设置时不返回
     * @param string $banReason
     * @return self
     */
    public function setBanReason(?string $banReason): self
    {
        $this->banReason = $banReason;
        return $this;
    }

    /**
     * AMUAuditStatus 原值：0 未送审，1 审核中，4 通过，5 拒绝，6 忽略送审（通过），7 取消；保留未知值
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * AMUAuditStatus 原值：0 未送审，1 审核中，4 通过，5 拒绝，6 忽略送审（通过），7 取消；保留未知值
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amuDisplayName !== null) {
            $result['amu_display_name'] = $this->amuDisplayName;
        }
        if ($this->banReason !== null) {
            $result['ban_reason'] = $this->banReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amu_display_name'] ?? null) !== null) {
            $obj->amuDisplayName = (string) $v;
        }
        if (($v = $data['ban_reason'] ?? null) !== null) {
            $obj->banReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
