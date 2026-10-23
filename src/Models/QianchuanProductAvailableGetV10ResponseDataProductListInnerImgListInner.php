<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanProductAvailableGetV10ResponseDataProductListInnerImgListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $imgUrl = null;

    /**
     * @return string
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @param string $imgUrl
     * @return self
     */
    public function setImgUrl(?string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imgUrl !== null) {
            $result['img_url'] = $this->imgUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['img_url'] ?? null) !== null) {
            $obj->imgUrl = (string) $v;
        }
        return $obj;
    }
}
