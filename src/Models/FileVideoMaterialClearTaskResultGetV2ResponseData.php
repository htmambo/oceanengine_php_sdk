<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskResultGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataClearResultInner[]
     */
    protected ?array $clearResult = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataClearResultInner[]
     */
    public function getClearResult(): ?array
    {
        return $this->clearResult;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataClearResultInner[] $clearResult
     * @return self
     */
    public function setClearResult(?array $clearResult): self
    {
        $this->clearResult = $clearResult;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->clearResult !== null) {
            $result['clear_result'] = $this->clearResult;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clear_result'] ?? null) !== null && is_array($v)) {
            $obj->clearResult = array_map(fn ($vv) => \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataClearResultInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
