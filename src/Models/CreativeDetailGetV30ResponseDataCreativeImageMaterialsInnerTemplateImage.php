<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage implements \JsonSerializable
{
    /**
     * DPA图片模板ID
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * DPA图片模板ID
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * DPA图片模板ID
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
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        return $obj;
    }
}
