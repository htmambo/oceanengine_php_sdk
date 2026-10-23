<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType
     */
    protected ?string $signType = null;

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType
     */
    public function getSignType(): ?string
    {
        return $this->signType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType $signType
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
