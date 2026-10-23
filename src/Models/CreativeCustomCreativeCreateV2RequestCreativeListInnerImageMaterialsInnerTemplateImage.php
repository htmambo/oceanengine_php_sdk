<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImageTemplateDataListInner[]
     */
    protected ?array $templateDataList = null;

    /**
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImageTemplateDataListInner[]
     */
    public function getTemplateDataList(): ?array
    {
        return $this->templateDataList;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImageTemplateDataListInner[] $templateDataList
     * @return self
     */
    public function setTemplateDataList(?array $templateDataList): self
    {
        $this->templateDataList = $templateDataList;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->templateDataList !== null) {
            $result['template_data_list'] = $this->templateDataList;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['template_data_list'] ?? null) !== null && is_array($v)) {
            $obj->templateDataList = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImageTemplateDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        return $obj;
    }
}
