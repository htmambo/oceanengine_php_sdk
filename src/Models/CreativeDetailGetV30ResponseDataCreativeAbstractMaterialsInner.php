<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo = null;

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    public function getStructAbstractInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo
    {
        return $this->structAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo
     * @return self
     */
    public function setStructAbstractInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo): self
    {
        $this->structAbstractInfo = $structAbstractInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    public function getTextAbstractInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo
    {
        return $this->textAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo
     * @return self
     */
    public function setTextAbstractInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo): self
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
            $obj->structAbstractInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerStructAbstractInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo::fromArray($v);
        }
        return $obj;
    }
}
