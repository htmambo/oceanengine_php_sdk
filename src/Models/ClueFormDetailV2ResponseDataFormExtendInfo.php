<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormDetailV2ResponseDataFormExtendInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig
     */
    protected ?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig $countConfig = null;

    /**
     * @var \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig
     */
    protected ?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig = null;

    /**
     * @var string
     */
    protected ?string $successTip = null;

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig
     */
    public function getCountConfig(): ?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig
    {
        return $this->countConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig $countConfig
     * @return self
     */
    public function setCountConfig(?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig $countConfig): self
    {
        $this->countConfig = $countConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig
     */
    public function getSignUpConfig(): ?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig
    {
        return $this->signUpConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig
     * @return self
     */
    public function setSignUpConfig(?\Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig $signUpConfig): self
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
            $obj->countConfig = \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoCountConfig::fromArray($v);
        }
        if (($v = $data['sign_up_config'] ?? null) !== null && is_array($v)) {
            $obj->signUpConfig = \Oceanengine\Models\ClueFormDetailV2ResponseDataFormExtendInfoSignUpConfig::fromArray($v);
        }
        if (($v = $data['success_tip'] ?? null) !== null) {
            $obj->successTip = (string) $v;
        }
        return $obj;
    }
}
