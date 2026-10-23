<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo = null;

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
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
     */
    public function getStructAbstractInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo
    {
        return $this->structAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo
     * @return self
     */
    public function setStructAbstractInfo(?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo $structAbstractInfo): self
    {
        $this->structAbstractInfo = $structAbstractInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
     */
    public function getTextAbstractInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo
    {
        return $this->textAbstractInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo
     * @return self
     */
    public function setTextAbstractInfo(?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo $textAbstractInfo): self
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
            $obj->structAbstractInfo = \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerStructAbstractInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_info'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractInfo = \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestCreativeAbstractMaterialsInnerTextAbstractInfo::fromArray($v);
        }
        return $obj;
    }
}
