<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolQuickAppManagementQuickAppGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataQuickAppInfoInner[]
     */
    protected ?array $quickAppInfo = null;

    /**
     * @return \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataQuickAppInfoInner[]
     */
    public function getQuickAppInfo(): ?array
    {
        return $this->quickAppInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataQuickAppInfoInner[] $quickAppInfo
     * @return self
     */
    public function setQuickAppInfo(?array $quickAppInfo): self
    {
        $this->quickAppInfo = $quickAppInfo;
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
        if ($this->quickAppInfo !== null) {
            $result['quick_app_info'] = $this->quickAppInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['quick_app_info'] ?? null) !== null && is_array($v)) {
            $obj->quickAppInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2ResponseDataQuickAppInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
