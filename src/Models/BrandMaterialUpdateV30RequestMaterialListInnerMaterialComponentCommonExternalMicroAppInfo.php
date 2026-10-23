<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternalMicroAppInfo implements \JsonSerializable
{
    /**
     * 小程序链接地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * 小程序链接地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 小程序链接地址
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
