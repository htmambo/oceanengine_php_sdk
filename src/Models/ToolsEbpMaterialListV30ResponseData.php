<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData $data = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataData::fromArray($v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
