<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatAppletUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 主成分字段
     * @var array<string,mixed>
     */
    protected ?array $data = null;

    /**
     * 引导文案
     * @var string
     */
    protected ?string $guideCopy = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead $head = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon $icon = null;

    /**
     * 资产id
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 简介
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * 标签 最多6个
     * @var string[]
     */
    protected ?array $label = null;

    /**
     * 素材图片
     * @var \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestMaterialInner[]
     */
    protected ?array $material = null;

    /**
     * 路径参数
     * @var string
     */
    protected ?string $path = null;

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
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 主成分字段
     * @return array<string,mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 主成分字段
     * @param array<string,mixed> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
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
     * @return \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead
     */
    public function getHead(): ?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead
    {
        return $this->head;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead $head
     * @return self
     */
    public function setHead(?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead $head): self
    {
        $this->head = $head;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon
     */
    public function getIcon(): ?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon
    {
        return $this->icon;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon $icon
     * @return self
     */
    public function setIcon(?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * 资产id
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 资产id
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
     * @return \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestMaterialInner[]
     */
    public function getMaterial(): ?array
    {
        return $this->material;
    }

    /**
     * 素材图片
     * @param \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestMaterialInner[] $material
     * @return self
     */
    public function setMaterial(?array $material): self
    {
        $this->material = $material;
        return $this;
    }

    /**
     * 路径参数
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * 路径参数
     * @param string $path
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
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
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->material !== null) {
            $result['material'] = $this->material;
        }
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->tagInfo !== null) {
            $result['tag_info'] = $this->tagInfo;
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
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['guide_copy'] ?? null) !== null) {
            $obj->guideCopy = (string) $v;
        }
        if (($v = $data['head'] ?? null) !== null && is_array($v)) {
            $obj->head = \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestHead::fromArray($v);
        }
        if (($v = $data['icon'] ?? null) !== null && is_array($v)) {
            $obj->icon = \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestIcon::fromArray($v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = $v;
        }
        if (($v = $data['material'] ?? null) !== null && is_array($v)) {
            $obj->material = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30RequestMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['path'] ?? null) !== null) {
            $obj->path = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['tag_info'] ?? null) !== null) {
            $obj->tagInfo = (string) $v;
        }
        return $obj;
    }
}
