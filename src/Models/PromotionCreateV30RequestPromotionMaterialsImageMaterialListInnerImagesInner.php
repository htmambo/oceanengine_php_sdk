<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterialsImageMaterialListInnerImagesInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInnerImagesInnerTemplateDataListInner[]
     */
    protected ?array $templateDataList = null;

    /**
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInnerImagesInnerTemplateDataListInner[]
     */
    public function getTemplateDataList(): ?array
    {
        return $this->templateDataList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInnerImagesInnerTemplateDataListInner[] $templateDataList
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
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
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
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['template_data_list'] ?? null) !== null && is_array($v)) {
            $obj->templateDataList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInnerImagesInnerTemplateDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        return $obj;
    }
}
