<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaTemplateGetV2ResponseDataListInnerTemplateDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $templateImageUrl = null;

    /**
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * @return string
     */
    public function getTemplateImageUrl(): ?string
    {
        return $this->templateImageUrl;
    }

    /**
     * @param string $templateImageUrl
     * @return self
     */
    public function setTemplateImageUrl(?string $templateImageUrl): self
    {
        $this->templateImageUrl = $templateImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->templateImageUrl !== null) {
            $result['template_image_url'] = $this->templateImageUrl;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['template_image_url'] ?? null) !== null) {
            $obj->templateImageUrl = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        return $obj;
    }
}
