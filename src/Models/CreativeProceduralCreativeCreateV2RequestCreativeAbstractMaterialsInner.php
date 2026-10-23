<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo = null;

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    public function getStructAbstractInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
    {
        return $this->structAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo
     * @return self
     */
    public function setStructAbstractInfo(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo): self
    {
        $this->structAbstractInfo = $structAbstractInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    public function getTextAbstractInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
    {
        return $this->textAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo
     * @return self
     */
    public function setTextAbstractInfo(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo): self
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
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
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
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['struct_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->structAbstractInfo = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractInfo = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo::fromArray($v);
        }
        return $obj;
    }
}
