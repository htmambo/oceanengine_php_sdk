<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCardImage implements \JsonSerializable
{
    /**
     * 图片uri 通过上传图片接口获得
     * @var string
     */
    protected ?string $webUri = null;

    /**
     * 图片uri 通过上传图片接口获得
     * @return string
     */
    public function getWebUri(): ?string
    {
        return $this->webUri;
    }

    /**
     * 图片uri 通过上传图片接口获得
     * @param string $webUri
     * @return self
     */
    public function setWebUri(?string $webUri): self
    {
        $this->webUri = $webUri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->webUri !== null) {
            $result['web_uri'] = $this->webUri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['web_uri'] ?? null) !== null) {
            $obj->webUri = (string) $v;
        }
        return $obj;
    }
}
