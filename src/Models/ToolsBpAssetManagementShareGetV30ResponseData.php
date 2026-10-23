<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBpAssetManagementShareGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInner[]
     */
    protected ?array $sharedAccounts = null;

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInner[]
     */
    public function getSharedAccounts(): ?array
    {
        return $this->sharedAccounts;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInner[] $sharedAccounts
     * @return self
     */
    public function setSharedAccounts(?array $sharedAccounts): self
    {
        $this->sharedAccounts = $sharedAccounts;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->sharedAccounts !== null) {
            $result['sharedAccounts'] = $this->sharedAccounts;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['sharedAccounts'] ?? null) !== null && is_array($v)) {
            $obj->sharedAccounts = array_map(fn ($vv) => \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
