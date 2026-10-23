<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInner implements \JsonSerializable
{
    /**
     * 模板ID
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * 模板填充的图片内容
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateImgSchemaInner[]
     */
    protected ?array $templateImgSchema = null;

    /**
     * 模板填充的文本内容
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateTextSchemaInner[]
     */
    protected ?array $templateTextSchema = null;

    /**
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType
     */
    protected ?string $templateType = null;

    /**
     * 模板ID
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * 模板ID
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * 模板填充的图片内容
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateImgSchemaInner[]
     */
    public function getTemplateImgSchema(): ?array
    {
        return $this->templateImgSchema;
    }

    /**
     * 模板填充的图片内容
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateImgSchemaInner[] $templateImgSchema
     * @return self
     */
    public function setTemplateImgSchema(?array $templateImgSchema): self
    {
        $this->templateImgSchema = $templateImgSchema;
        return $this;
    }

    /**
     * 模板填充的文本内容
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateTextSchemaInner[]
     */
    public function getTemplateTextSchema(): ?array
    {
        return $this->templateTextSchema;
    }

    /**
     * 模板填充的文本内容
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateTextSchemaInner[] $templateTextSchema
     * @return self
     */
    public function setTemplateTextSchema(?array $templateTextSchema): self
    {
        $this->templateTextSchema = $templateTextSchema;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType
     */
    public function getTemplateType(): ?string
    {
        return $this->templateType;
    }

    /**
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType $templateType
     * @return self
     */
    public function setTemplateType(?string $templateType): self
    {
        $this->templateType = $templateType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        if ($this->templateImgSchema !== null) {
            $result['template_img_schema'] = $this->templateImgSchema;
        }
        if ($this->templateTextSchema !== null) {
            $result['template_text_schema'] = $this->templateTextSchema;
        }
        if ($this->templateType !== null) {
            $result['template_type'] = $this->templateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        if (($v = $data['template_img_schema'] ?? null) !== null && is_array($v)) {
            $obj->templateImgSchema = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateImgSchemaInner::fromArray($vv), $v);
        }
        if (($v = $data['template_text_schema'] ?? null) !== null && is_array($v)) {
            $obj->templateTextSchema = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateTextSchemaInner::fromArray($vv), $v);
        }
        if (($v = $data['template_type'] ?? null) !== null) {
            $obj->templateType = (string) $v;
        }
        return $obj;
    }
}
