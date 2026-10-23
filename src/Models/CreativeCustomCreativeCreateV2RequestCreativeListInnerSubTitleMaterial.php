<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerSubTitleMaterial implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $subTitle = null;

    /**
     * @return string
     */
    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle(?string $subTitle): self
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->subTitle !== null) {
            $result['sub_title'] = $this->subTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sub_title'] ?? null) !== null) {
            $obj->subTitle = (string) $v;
        }
        return $obj;
    }
}
