<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatGameListV30ResponseDataAppletsInner implements \JsonSerializable
{
    /**
     * 账号id account_id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 主成分字段存储
     * @var array<string,string>
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra $extra = null;

    /**
     * 引导文案
     * @var string
     */
    protected ?string $guideCopy = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead $head = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon $icon = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 简介
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * 是否为EBP资产
     * @var bool
     */
    protected ?bool $isEbpAsset = null;

    /**
     * 标签 最多6个
     * @var string[]
     */
    protected ?array $label = null;

    /**
     * 素材图片
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerMaterialInner[]
     */
    protected ?array $material = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $path = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 小程序 备注信息
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 小程序细分分类信息
     * @var string
     */
    protected ?string $tagInfo = null;

    /**
     * @var string
     */
    protected ?string $username = null;

    /**
     * 账号id account_id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账号id account_id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30DataAppletsAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 主成分字段存储
     * @return array<string,string>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 主成分字段存储
     * @param array<string,string> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra
     */
    public function getExtra(): ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra
    {
        return $this->extra;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra $extra
     * @return self
     */
    public function setExtra(?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * 引导文案
     * @return string
     */
    public function getGuideCopy(): ?string
    {
        return $this->guideCopy;
    }

    /**
     * 引导文案
     * @param string $guideCopy
     * @return self
     */
    public function setGuideCopy(?string $guideCopy): self
    {
        $this->guideCopy = $guideCopy;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead
     */
    public function getHead(): ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead
    {
        return $this->head;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead $head
     * @return self
     */
    public function setHead(?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead $head): self
    {
        $this->head = $head;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon
     */
    public function getIcon(): ?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon
    {
        return $this->icon;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon $icon
     * @return self
     */
    public function setIcon(?\Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon $icon): self
    {
        $this->icon = $icon;
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
     * 简介
     * @return string
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * 简介
     * @param string $introduction
     * @return self
     */
    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;
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
     * 标签 最多6个
     * @return string[]
     */
    public function getLabel(): ?array
    {
        return $this->label;
    }

    /**
     * 标签 最多6个
     * @param string[] $label
     * @return self
     */
    public function setLabel(?array $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * 素材图片
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerMaterialInner[]
     */
    public function getMaterial(): ?array
    {
        return $this->material;
    }

    /**
     * 素材图片
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerMaterialInner[] $material
     * @return self
     */
    public function setMaterial(?array $material): self
    {
        $this->material = $material;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 小程序 备注信息
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 小程序 备注信息
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 小程序细分分类信息
     * @return string
     */
    public function getTagInfo(): ?string
    {
        return $this->tagInfo;
    }

    /**
     * 小程序细分分类信息
     * @param string $tagInfo
     * @return self
     */
    public function setTagInfo(?string $tagInfo): self
    {
        $this->tagInfo = $tagInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->assetGeneration !== null) {
            $result['asset_generation'] = $this->assetGeneration;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->guideCopy !== null) {
            $result['guide_copy'] = $this->guideCopy;
        }
        if ($this->head !== null) {
            $result['head'] = $this->head;
        }
        if ($this->icon !== null) {
            $result['icon'] = $this->icon;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->introduction !== null) {
            $result['introduction'] = $this->introduction;
        }
        if ($this->isEbpAsset !== null) {
            $result['is_ebp_asset'] = $this->isEbpAsset;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->material !== null) {
            $result['material'] = $this->material;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->tagInfo !== null) {
            $result['tag_info'] = $this->tagInfo;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerExtra::fromArray($v);
        }
        if (($v = $data['guide_copy'] ?? null) !== null) {
            $obj->guideCopy = (string) $v;
        }
        if (($v = $data['head'] ?? null) !== null && is_array($v)) {
            $obj->head = \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerHead::fromArray($v);
        }
        if (($v = $data['icon'] ?? null) !== null && is_array($v)) {
            $obj->icon = \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerIcon::fromArray($v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['is_ebp_asset'] ?? null) !== null) {
            $obj->isEbpAsset = (bool) $v;
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = $v;
        }
        if (($v = $data['material'] ?? null) !== null && is_array($v)) {
            $obj->material = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpWechatGameListV30ResponseDataAppletsInnerMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['path'] ?? null) !== null) {
            $obj->path = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['tag_info'] ?? null) !== null) {
            $obj->tagInfo = (string) $v;
        }
        if (($v = $data['username'] ?? null) !== null) {
            $obj->username = (string) $v;
        }
        return $obj;
    }
}
