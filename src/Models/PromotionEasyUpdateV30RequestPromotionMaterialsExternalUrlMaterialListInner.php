<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyUpdateV30RequestPromotionMaterialsExternalUrlMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        return $obj;
    }
}
