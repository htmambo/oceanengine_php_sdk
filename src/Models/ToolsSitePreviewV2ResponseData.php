<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSitePreviewV2ResponseData implements \JsonSerializable
{
    /**
     * 建站站点的预览地址，有效期：10分钟
     * @var string
     */
    protected ?string $url = null;

    /**
     * 建站站点的预览地址，有效期：10分钟
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 建站站点的预览地址，有效期：10分钟
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
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
