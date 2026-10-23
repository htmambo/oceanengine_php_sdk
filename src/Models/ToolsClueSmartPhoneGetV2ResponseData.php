<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueSmartPhoneGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $advKey = null;

    /**
     * @var \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return string
     */
    public function getAdvKey(): ?string
    {
        return $this->advKey;
    }

    /**
     * @param string $advKey
     * @return self
     */
    public function setAdvKey(?string $advKey): self
    {
        $this->advKey = $advKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->advKey !== null) {
            $result['adv_key'] = $this->advKey;
        }
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_key'] ?? null) !== null) {
            $obj->advKey = (string) $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsClueSmartPhoneGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
