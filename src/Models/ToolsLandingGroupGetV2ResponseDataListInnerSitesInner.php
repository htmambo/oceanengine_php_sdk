<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupGetV2ResponseDataListInnerSitesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $memberId = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteAuditStatus
     */
    protected ?string $siteAuditStatus = null;

    /**
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteOptStatus
     */
    protected ?string $siteOptStatus = null;

    /**
     * @var string
     */
    protected ?string $siteUrl = null;

    /**
     * @return int
     */
    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    /**
     * @param int $memberId
     * @return self
     */
    public function setMemberId(?int $memberId): self
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteAuditStatus
     */
    public function getSiteAuditStatus(): ?string
    {
        return $this->siteAuditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteAuditStatus $siteAuditStatus
     * @return self
     */
    public function setSiteAuditStatus(?string $siteAuditStatus): self
    {
        $this->siteAuditStatus = $siteAuditStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteOptStatus
     */
    public function getSiteOptStatus(): ?string
    {
        return $this->siteOptStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupGetV2DataListSitesSiteOptStatus $siteOptStatus
     * @return self
     */
    public function setSiteOptStatus(?string $siteOptStatus): self
    {
        $this->siteOptStatus = $siteOptStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     * @return self
     */
    public function setSiteUrl(?string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->memberId !== null) {
            $result['member_id'] = $this->memberId;
        }
        if ($this->siteAuditStatus !== null) {
            $result['site_audit_status'] = $this->siteAuditStatus;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->siteOptStatus !== null) {
            $result['site_opt_status'] = $this->siteOptStatus;
        }
        if ($this->siteUrl !== null) {
            $result['site_url'] = $this->siteUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['member_id'] ?? null) !== null) {
            $obj->memberId = (int) $v;
        }
        if (($v = $data['site_audit_status'] ?? null) !== null) {
            $obj->siteAuditStatus = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['site_opt_status'] ?? null) !== null) {
            $obj->siteOptStatus = (string) $v;
        }
        if (($v = $data['site_url'] ?? null) !== null) {
            $obj->siteUrl = (string) $v;
        }
        return $obj;
    }
}
