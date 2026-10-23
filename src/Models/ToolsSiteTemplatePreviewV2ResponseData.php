<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplatePreviewV2ResponseData implements \JsonSerializable
{
    /**
     * 预览URL，模板的预览地址，有效期：20分钟
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * 预览URL，模板的预览地址，有效期：20分钟
     * @return string
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * 预览URL，模板的预览地址，有效期：20分钟
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        return $obj;
    }
}
