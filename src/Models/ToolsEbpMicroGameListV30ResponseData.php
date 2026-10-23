<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroGameListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataAppletsInner[]
     */
    protected ?array $applets = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataAppletsInner[]
     */
    public function getApplets(): ?array
    {
        return $this->applets;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataAppletsInner[] $applets
     * @return self
     */
    public function setApplets(?array $applets): self
    {
        $this->applets = $applets;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->applets !== null) {
            $result['applets'] = $this->applets;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['applets'] ?? null) !== null && is_array($v)) {
            $obj->applets = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataAppletsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpMicroGameListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
