<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
     */
    public function getStructAbstractInfo(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo
    {
        return $this->structAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo
     * @return self
     */
    public function setStructAbstractInfo(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo): self
    {
        $this->structAbstractInfo = $structAbstractInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
     */
    public function getTextAbstractInfo(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo
    {
        return $this->textAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo
     * @return self
     */
    public function setTextAbstractInfo(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo): self
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
            $obj->structAbstractInfo = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractInfo = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo::fromArray($v);
        }
        return $obj;
    }
}
