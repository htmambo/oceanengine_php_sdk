<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoSignUpConfigSignType
     */
    protected ?string $signType = null;

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoSignUpConfigSignType
     */
    public function getSignType(): ?string
    {
        return $this->signType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoSignUpConfigSignType $signType
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
