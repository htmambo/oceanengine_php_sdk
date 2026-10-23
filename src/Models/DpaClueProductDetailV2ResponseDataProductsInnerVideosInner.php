<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductDetailV2ResponseDataProductsInnerVideosInner implements \JsonSerializable
{
    /**
     * 视频模板ID
     * @var string
     */
    protected ?string $templateId = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频模板ID
     * @return string
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    /**
     * 视频模板ID
     * @param string $templateId
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频ID
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
