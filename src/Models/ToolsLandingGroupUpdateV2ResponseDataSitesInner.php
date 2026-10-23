<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupUpdateV2ResponseDataSitesInner implements \JsonSerializable
{
    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @var string
     */
    protected ?string $memberId = null;

    /**
     * 站点 ID
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * 站点启用状态。
     * @var string
     */
    protected ?string $siteOptStatus = null;

    /**
     * 站点URL
     * @var string
     */
    protected ?string $siteUrl = null;

    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @return string
     */
    public function getMemberId(): ?string
    {
        return $this->memberId;
    }

    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @param string $memberId
     * @return self
     */
    public function setMemberId(?string $memberId): self
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * 站点 ID
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * 站点 ID
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 站点启用状态。
     * @return string
     */
    public function getSiteOptStatus(): ?string
    {
        return $this->siteOptStatus;
    }

    /**
     * 站点启用状态。
     * @param string $siteOptStatus
     * @return self
     */
    public function setSiteOptStatus(?string $siteOptStatus): self
    {
        $this->siteOptStatus = $siteOptStatus;
        return $this;
    }

    /**
     * 站点URL
     * @return string
     */
    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    /**
     * 站点URL
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
            $obj->memberId = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
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
