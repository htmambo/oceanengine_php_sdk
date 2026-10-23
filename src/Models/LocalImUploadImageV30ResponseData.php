<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImUploadImageV30ResponseData implements \JsonSerializable
{
    /**
     * 图片url
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var string
     */
    protected ?string $oid = null;

    /**
     * 图片url
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 图片url
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOid(): ?string
    {
        return $this->oid;
    }

    /**
     * @param string $oid
     * @return self
     */
    public function setOid(?string $oid): self
    {
        $this->oid = $oid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->oid !== null) {
            $result['oid'] = $this->oid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['oid'] ?? null) !== null) {
            $obj->oid = (string) $v;
        }
        return $obj;
    }
}
