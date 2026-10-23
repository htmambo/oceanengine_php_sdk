<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupSiteOptStatusUpdateV2RequestDataInner implements \JsonSerializable
{
    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @var int
     */
    protected ?int $memberId = null;

    /**
     * 站点启用状态，详见【附录-枚举值】，可选值: SITE_OPT_STATUS_DISABLE,SITE_OPT_STATUS_ENABLE
     * @var string
     */
    protected ?string $siteOptStatus = null;

    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @return int
     */
    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    /**
     * 成员 ID，即站点在落地页组中的唯一标识
     * @param int $memberId
     * @return self
     */
    public function setMemberId(?int $memberId): self
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * 站点启用状态，详见【附录-枚举值】，可选值: SITE_OPT_STATUS_DISABLE,SITE_OPT_STATUS_ENABLE
     * @return string
     */
    public function getSiteOptStatus(): ?string
    {
        return $this->siteOptStatus;
    }

    /**
     * 站点启用状态，详见【附录-枚举值】，可选值: SITE_OPT_STATUS_DISABLE,SITE_OPT_STATUS_ENABLE
     * @param string $siteOptStatus
     * @return self
     */
    public function setSiteOptStatus(?string $siteOptStatus): self
    {
        $this->siteOptStatus = $siteOptStatus;
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
        if ($this->siteOptStatus !== null) {
            $result['site_opt_status'] = $this->siteOptStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['member_id'] ?? null) !== null) {
            $obj->memberId = (int) $v;
        }
        if (($v = $data['site_opt_status'] ?? null) !== null) {
            $obj->siteOptStatus = (string) $v;
        }
        return $obj;
    }
}
