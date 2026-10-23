<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo = null;

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
     */
    public function getStructAbstractInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
    {
        return $this->structAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo
     * @return self
     */
    public function setStructAbstractInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo): self
    {
        $this->structAbstractInfo = $structAbstractInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
     */
    public function getTextAbstractInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
    {
        return $this->textAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo
     * @return self
     */
    public function setTextAbstractInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo): self
    {
        $this->textAbstractInfo = $textAbstractInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->structAbstractInfo !== null) {
            $result['struct_abstract_info'] = $this->structAbstractInfo;
        }
        if ($this->textAbstractInfo !== null) {
            $result['text_abstract_info'] = $this->textAbstractInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['struct_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->structAbstractInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerStructAbstractInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerAbstractMaterialsInnerTextAbstractInfo::fromArray($v);
        }
        return $obj;
    }
}
