<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueSmartphoneGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $key = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->key !== null) {
            $result['key'] = $this->key;
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
        if (($v = $data['key'] ?? null) !== null) {
            $obj->key = (string) $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ClueSmartphoneGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
