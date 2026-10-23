<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroAppletLinkListV30ResponseDataLinksInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus
     */
    protected ?string $activeStatus = null;

    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 是否为EBP资产
     * @var bool
     */
    protected ?bool $isEbpAsset = null;

    /**
     * @var string
     */
    protected ?string $link = null;

    /**
     * @var int
     */
    protected ?int $linkId = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * EBP新增，归属团队或归属ADV
     * @var int
     */
    protected ?int $ownerAccountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType
     */
    protected ?string $ownerAccountType = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * @var string
     */
    protected ?string $startParams = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus
     */
    public function getActiveStatus(): ?string
    {
        return $this->activeStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksActiveStatus $activeStatus
     * @return self
     */
    public function setActiveStatus(?string $activeStatus): self
    {
        $this->activeStatus = $activeStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 是否为EBP资产
     * @return bool
     */
    public function getIsEbpAsset(): ?bool
    {
        return $this->isEbpAsset;
    }

    /**
     * 是否为EBP资产
     * @param bool $isEbpAsset
     * @return self
     */
    public function setIsEbpAsset(?bool $isEbpAsset): self
    {
        $this->isEbpAsset = $isEbpAsset;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkId(): ?int
    {
        return $this->linkId;
    }

    /**
     * @param int $linkId
     * @return self
     */
    public function setLinkId(?int $linkId): self
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * EBP新增，归属团队或归属ADV
     * @return int
     */
    public function getOwnerAccountId(): ?int
    {
        return $this->ownerAccountId;
    }

    /**
     * EBP新增，归属团队或归属ADV
     * @param int $ownerAccountId
     * @return self
     */
    public function setOwnerAccountId(?int $ownerAccountId): self
    {
        $this->ownerAccountId = $ownerAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType
     */
    public function getOwnerAccountType(): ?string
    {
        return $this->ownerAccountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30DataLinksOwnerAccountType $ownerAccountType
     * @return self
     */
    public function setOwnerAccountType(?string $ownerAccountType): self
    {
        $this->ownerAccountType = $ownerAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartPage(): ?string
    {
        return $this->startPage;
    }

    /**
     * @param string $startPage
     * @return self
     */
    public function setStartPage(?string $startPage): self
    {
        $this->startPage = $startPage;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartParams(): ?string
    {
        return $this->startParams;
    }

    /**
     * @param string $startParams
     * @return self
     */
    public function setStartParams(?string $startParams): self
    {
        $this->startParams = $startParams;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activeStatus !== null) {
            $result['active_status'] = $this->activeStatus;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isEbpAsset !== null) {
            $result['is_ebp_asset'] = $this->isEbpAsset;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->linkId !== null) {
            $result['link_id'] = $this->linkId;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->ownerAccountId !== null) {
            $result['owner_account_id'] = $this->ownerAccountId;
        }
        if ($this->ownerAccountType !== null) {
            $result['owner_account_type'] = $this->ownerAccountType;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->startPage !== null) {
            $result['start_page'] = $this->startPage;
        }
        if ($this->startParams !== null) {
            $result['start_params'] = $this->startParams;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['active_status'] ?? null) !== null) {
            $obj->activeStatus = (string) $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_ebp_asset'] ?? null) !== null) {
            $obj->isEbpAsset = (bool) $v;
        }
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['link_id'] ?? null) !== null) {
            $obj->linkId = (int) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['owner_account_id'] ?? null) !== null) {
            $obj->ownerAccountId = (int) $v;
        }
        if (($v = $data['owner_account_type'] ?? null) !== null) {
            $obj->ownerAccountType = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['start_page'] ?? null) !== null) {
            $obj->startPage = (string) $v;
        }
        if (($v = $data['start_params'] ?? null) !== null) {
            $obj->startParams = (string) $v;
        }
        return $obj;
    }
}
