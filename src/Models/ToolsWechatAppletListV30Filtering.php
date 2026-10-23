<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatAppletListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsWechatAppletListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime
     */
    protected ?\Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime $createTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletListV30FilteringSearchType
     */
    protected ?string $searchType = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime
     */
    protected ?\Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime $updateTime = null;

    /**
     * 微信小程序原始ID筛选
     * @var string
     */
    protected ?string $userName = null;

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime
     */
    public function getCreateTime(): ?\Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime $createTime
     * @return self
     */
    public function setCreateTime(?\Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime $createTime): self
    {
        $this->createTime = $createTime;
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
     * @return \Oceanengine\Models\ToolsWechatAppletListV30FilteringSearchType
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletListV30FilteringSearchType $searchType
     * @return self
     */
    public function setSearchType(?string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime
     */
    public function getUpdateTime(): ?\Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime
    {
        return $this->updateTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime $updateTime
     * @return self
     */
    public function setUpdateTime(?\Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * 微信小程序原始ID筛选
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * 微信小程序原始ID筛选
     * @param string $userName
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->searchType !== null) {
            $result['search_type'] = $this->searchType;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->userName !== null) {
            $result['user_name'] = $this->userName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null && is_array($v)) {
            $obj->createTime = \Oceanengine\Models\ToolsWechatAppletListV30FilteringCreateTime::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['search_type'] ?? null) !== null) {
            $obj->searchType = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null && is_array($v)) {
            $obj->updateTime = \Oceanengine\Models\ToolsWechatAppletListV30FilteringUpdateTime::fromArray($v);
        }
        if (($v = $data['user_name'] ?? null) !== null) {
            $obj->userName = (string) $v;
        }
        return $obj;
    }
}
