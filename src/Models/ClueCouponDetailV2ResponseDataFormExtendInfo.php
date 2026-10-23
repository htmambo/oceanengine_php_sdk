<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseDataFormExtendInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig $countConfig = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig = null;

    /**
     * @var string
     */
    protected ?string $successTip = null;

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig
     */
    public function getCountConfig(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig
    {
        return $this->countConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig $countConfig
     * @return self
     */
    public function setCountConfig(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig $countConfig): self
    {
        $this->countConfig = $countConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig
     */
    public function getSignUpConfig(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig
    {
        return $this->signUpConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig
     * @return self
     */
    public function setSignUpConfig(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig): self
    {
        $this->signUpConfig = $signUpConfig;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuccessTip(): ?string
    {
        return $this->successTip;
    }

    /**
     * @param string $successTip
     * @return self
     */
    public function setSuccessTip(?string $successTip): self
    {
        $this->successTip = $successTip;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->countConfig !== null) {
            $result['count_config'] = $this->countConfig;
        }
        if ($this->signUpConfig !== null) {
            $result['sign_up_config'] = $this->signUpConfig;
        }
        if ($this->successTip !== null) {
            $result['success_tip'] = $this->successTip;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['count_config'] ?? null) !== null && is_array($v)) {
            $obj->countConfig = \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoCountConfig::fromArray($v);
        }
        if (($v = $data['sign_up_config'] ?? null) !== null && is_array($v)) {
            $obj->signUpConfig = \Oceanengine\Models\ClueCouponDetailV2ResponseDataFormExtendInfoSignUpConfig::fromArray($v);
        }
        if (($v = $data['success_tip'] ?? null) !== null) {
            $obj->successTip = (string) $v;
        }
        return $obj;
    }
}
