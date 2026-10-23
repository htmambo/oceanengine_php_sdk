<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaTemplateGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $industry = null;

    /**
     * @var bool
     */
    protected ?bool $isPublic = null;

    /**
     * @var \Oceanengine\Models\DpaTemplateGetV2ResponseDataListInnerTemplateDataListInner[]
     */
    protected ?array $templateDataList = null;

    /**
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * @var \Oceanengine\Models\DpaTemplateGetV2DataListTemplateMode
     */
    protected ?string $templateMode = null;

    /**
     * @var string
     */
    protected ?string $templateName = null;

    /**
     * @return int
     */
    public function getIndustry(): ?int
    {
        return $this->industry;
    }

    /**
     * @param int $industry
     * @return self
     */
    public function setIndustry(?int $industry): self
    {
        $this->industry = $industry;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    /**
     * @param bool $isPublic
     * @return self
     */
    public function setIsPublic(?bool $isPublic): self
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaTemplateGetV2ResponseDataListInnerTemplateDataListInner[]
     */
    public function getTemplateDataList(): ?array
    {
        return $this->templateDataList;
    }

    /**
     * @param \Oceanengine\Models\DpaTemplateGetV2ResponseDataListInnerTemplateDataListInner[] $templateDataList
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
     * @return \Oceanengine\Models\DpaTemplateGetV2DataListTemplateMode
     */
    public function getTemplateMode(): ?string
    {
        return $this->templateMode;
    }

    /**
     * @param \Oceanengine\Models\DpaTemplateGetV2DataListTemplateMode $templateMode
     * @return self
     */
    public function setTemplateMode(?string $templateMode): self
    {
        $this->templateMode = $templateMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industry !== null) {
            $result['industry'] = $this->industry;
        }
        if ($this->isPublic !== null) {
            $result['is_public'] = $this->isPublic;
        }
        if ($this->templateDataList !== null) {
            $result['template_data_list'] = $this->templateDataList;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        if ($this->templateMode !== null) {
            $result['template_mode'] = $this->templateMode;
        }
        if ($this->templateName !== null) {
            $result['template_name'] = $this->templateName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry'] ?? null) !== null) {
            $obj->industry = (int) $v;
        }
        if (($v = $data['is_public'] ?? null) !== null) {
            $obj->isPublic = (bool) $v;
        }
        if (($v = $data['template_data_list'] ?? null) !== null && is_array($v)) {
            $obj->templateDataList = array_map(fn ($vv) => \Oceanengine\Models\DpaTemplateGetV2ResponseDataListInnerTemplateDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        if (($v = $data['template_mode'] ?? null) !== null) {
            $obj->templateMode = (string) $v;
        }
        if (($v = $data['template_name'] ?? null) !== null) {
            $obj->templateName = (string) $v;
        }
        return $obj;
    }
}
