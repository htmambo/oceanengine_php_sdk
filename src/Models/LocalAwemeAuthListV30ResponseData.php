<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthListV30ResponseData implements \JsonSerializable
{
    /**
     * 授权
     * @var \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInner[]
     */
    protected ?array $invitations = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 授权
     * @return \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInner[]
     */
    public function getInvitations(): ?array
    {
        return $this->invitations;
    }

    /**
     * 授权
     * @param \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInner[] $invitations
     * @return self
     */
    public function setInvitations(?array $invitations): self
    {
        $this->invitations = $invitations;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->invitations !== null) {
            $result['invitations'] = $this->invitations;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invitations'] ?? null) !== null && is_array($v)) {
            $obj->invitations = array_map(fn ($vv) => \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
