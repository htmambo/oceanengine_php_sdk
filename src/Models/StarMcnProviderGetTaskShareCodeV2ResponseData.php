<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskShareCodeV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $shareCode = null;

    /**
     * @return string
     */
    public function getShareCode(): ?string
    {
        return $this->shareCode;
    }

    /**
     * @param string $shareCode
     * @return self
     */
    public function setShareCode(?string $shareCode): self
    {
        $this->shareCode = $shareCode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->shareCode !== null) {
            $result['share_code'] = $this->shareCode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['share_code'] ?? null) !== null) {
            $obj->shareCode = (string) $v;
        }
        return $obj;
    }
}
