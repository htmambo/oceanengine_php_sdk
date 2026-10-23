<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplatePicUrlGetV2ResponseData implements \JsonSerializable
{
    /**
     * uri
     * @var array<string,string>
     */
    protected ?array $urlMap = null;

    /**
     * uri
     * @return array<string,string>
     */
    public function getUrlMap(): ?array
    {
        return $this->urlMap;
    }

    /**
     * uri
     * @param array<string,string> $urlMap
     * @return self
     */
    public function setUrlMap(?array $urlMap): self
    {
        $this->urlMap = $urlMap;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->urlMap !== null) {
            $result['url_map'] = $this->urlMap;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['url_map'] ?? null) !== null && is_array($v)) {
            $obj->urlMap = $v;
        }
        return $obj;
    }
}
