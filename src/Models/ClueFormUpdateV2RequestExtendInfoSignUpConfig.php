<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormUpdateV2RequestExtendInfoSignUpConfig implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormUpdateV2ExtendInfoSignUpConfigSignType
     */
    protected ?string $signType = null;

    /**
     * @return \Oceanengine\Models\ClueFormUpdateV2ExtendInfoSignUpConfigSignType
     */
    public function getSignType(): ?string
    {
        return $this->signType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormUpdateV2ExtendInfoSignUpConfigSignType $signType
     * @return self
     */
    public function setSignType(?string $signType): self
    {
        $this->signType = $signType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->signType !== null) {
            $result['sign_type'] = $this->signType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sign_type'] ?? null) !== null) {
            $obj->signType = (string) $v;
        }
        return $obj;
    }
}
