<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatPoolListV2ResponseDataItemsInner implements \JsonSerializable
{
    /**
     * 公众号的开发者ID
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var \Oceanengine\Models\ClueWechatPoolListV2DataItemsAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 复制次数
     * @var int
     */
    protected ?int $clueCount = null;

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ClueWechatPoolListV2DataItemsHasQrCode
     */
    protected ?string $hasQrCode = null;

    /**
     * 生效号码包数量
     * @var int
     */
    protected ?int $instanceCount = null;

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $modTime = null;

    /**
     * 微信昵称
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * 审核拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * 启用状态  0启用 1禁用
     * @var int
     */
    protected ?int $status = null;

    /**
     * 尾缀
     * @var string
     */
    protected ?string $suffix = null;

    /**
     * 微信号，企业微信时返回为空
     * @var string
     */
    protected ?string $wechatNumber = null;

    /**
     * @var \Oceanengine\Models\ClueWechatPoolListV2DataItemsWechatType
     */
    protected ?string $wechatType = null;

    /**
     * 公众号的开发者ID
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 公众号的开发者ID
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatPoolListV2DataItemsAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatPoolListV2DataItemsAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 复制次数
     * @return int
     */
    public function getClueCount(): ?int
    {
        return $this->clueCount;
    }

    /**
     * 复制次数
     * @param int $clueCount
     * @return self
     */
    public function setClueCount(?int $clueCount): self
    {
        $this->clueCount = $clueCount;
        return $this;
    }

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatPoolListV2DataItemsHasQrCode
     */
    public function getHasQrCode(): ?string
    {
        return $this->hasQrCode;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatPoolListV2DataItemsHasQrCode $hasQrCode
     * @return self
     */
    public function setHasQrCode(?string $hasQrCode): self
    {
        $this->hasQrCode = $hasQrCode;
        return $this;
    }

    /**
     * 生效号码包数量
     * @return int
     */
    public function getInstanceCount(): ?int
    {
        return $this->instanceCount;
    }

    /**
     * 生效号码包数量
     * @param int $instanceCount
     * @return self
     */
    public function setInstanceCount(?int $instanceCount): self
    {
        $this->instanceCount = $instanceCount;
        return $this;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getModTime(): ?string
    {
        return $this->modTime;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @param string $modTime
     * @return self
     */
    public function setModTime(?string $modTime): self
    {
        $this->modTime = $modTime;
        return $this;
    }

    /**
     * 微信昵称
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * 微信昵称
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
        return $this;
    }

    /**
     * 审核拒绝理由
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * 审核拒绝理由
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * 启用状态  0启用 1禁用
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 启用状态  0启用 1禁用
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 尾缀
     * @return string
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * 尾缀
     * @param string $suffix
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * 微信号，企业微信时返回为空
     * @return string
     */
    public function getWechatNumber(): ?string
    {
        return $this->wechatNumber;
    }

    /**
     * 微信号，企业微信时返回为空
     * @param string $wechatNumber
     * @return self
     */
    public function setWechatNumber(?string $wechatNumber): self
    {
        $this->wechatNumber = $wechatNumber;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatPoolListV2DataItemsWechatType
     */
    public function getWechatType(): ?string
    {
        return $this->wechatType;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatPoolListV2DataItemsWechatType $wechatType
     * @return self
     */
    public function setWechatType(?string $wechatType): self
    {
        $this->wechatType = $wechatType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->clueCount !== null) {
            $result['clue_count'] = $this->clueCount;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->hasQrCode !== null) {
            $result['has_qr_code'] = $this->hasQrCode;
        }
        if ($this->instanceCount !== null) {
            $result['instance_count'] = $this->instanceCount;
        }
        if ($this->modTime !== null) {
            $result['mod_time'] = $this->modTime;
        }
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->suffix !== null) {
            $result['suffix'] = $this->suffix;
        }
        if ($this->wechatNumber !== null) {
            $result['wechat_number'] = $this->wechatNumber;
        }
        if ($this->wechatType !== null) {
            $result['wechat_type'] = $this->wechatType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['clue_count'] ?? null) !== null) {
            $obj->clueCount = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['has_qr_code'] ?? null) !== null) {
            $obj->hasQrCode = (string) $v;
        }
        if (($v = $data['instance_count'] ?? null) !== null) {
            $obj->instanceCount = (int) $v;
        }
        if (($v = $data['mod_time'] ?? null) !== null) {
            $obj->modTime = (string) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['suffix'] ?? null) !== null) {
            $obj->suffix = (string) $v;
        }
        if (($v = $data['wechat_number'] ?? null) !== null) {
            $obj->wechatNumber = (string) $v;
        }
        if (($v = $data['wechat_type'] ?? null) !== null) {
            $obj->wechatType = (string) $v;
        }
        return $obj;
    }
}
