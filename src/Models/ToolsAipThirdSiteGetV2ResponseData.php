<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAipThirdSiteGetV2ResponseData implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $adveriserId = null;

    /**
     * 站点审核信息
     * @var string
     */
    protected ?string $auditMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsAipThirdSiteGetV2DataAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 站点创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 站点名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 站点id
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 站点更新时间
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * 站点URL
     * @var string
     */
    protected ?string $url = null;

    /**
     * 站点标准化校验失败信息
     * @var string
     */
    protected ?string $validateMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsAipThirdSiteGetV2DataValidateStatus
     */
    protected ?string $validateStatus = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdveriserId(): ?int
    {
        return $this->adveriserId;
    }

    /**
     * 广告主id
     * @param int $adveriserId
     * @return self
     */
    public function setAdveriserId(?int $adveriserId): self
    {
        $this->adveriserId = $adveriserId;
        return $this;
    }

    /**
     * 站点审核信息
     * @return string
     */
    public function getAuditMessage(): ?string
    {
        return $this->auditMessage;
    }

    /**
     * 站点审核信息
     * @param string $auditMessage
     * @return self
     */
    public function setAuditMessage(?string $auditMessage): self
    {
        $this->auditMessage = $auditMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAipThirdSiteGetV2DataAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAipThirdSiteGetV2DataAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 站点创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 站点创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 站点名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 站点名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 站点id
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 站点id
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 站点更新时间
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * 站点更新时间
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * 站点URL
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 站点URL
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 站点标准化校验失败信息
     * @return string
     */
    public function getValidateMessage(): ?string
    {
        return $this->validateMessage;
    }

    /**
     * 站点标准化校验失败信息
     * @param string $validateMessage
     * @return self
     */
    public function setValidateMessage(?string $validateMessage): self
    {
        $this->validateMessage = $validateMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAipThirdSiteGetV2DataValidateStatus
     */
    public function getValidateStatus(): ?string
    {
        return $this->validateStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAipThirdSiteGetV2DataValidateStatus $validateStatus
     * @return self
     */
    public function setValidateStatus(?string $validateStatus): self
    {
        $this->validateStatus = $validateStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adveriserId !== null) {
            $result['adveriser_id'] = $this->adveriserId;
        }
        if ($this->auditMessage !== null) {
            $result['audit_message'] = $this->auditMessage;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->validateMessage !== null) {
            $result['validate_message'] = $this->validateMessage;
        }
        if ($this->validateStatus !== null) {
            $result['validate_status'] = $this->validateStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adveriser_id'] ?? null) !== null) {
            $obj->adveriserId = (int) $v;
        }
        if (($v = $data['audit_message'] ?? null) !== null) {
            $obj->auditMessage = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['validate_message'] ?? null) !== null) {
            $obj->validateMessage = (string) $v;
        }
        if (($v = $data['validate_status'] ?? null) !== null) {
            $obj->validateStatus = (string) $v;
        }
        return $obj;
    }
}
