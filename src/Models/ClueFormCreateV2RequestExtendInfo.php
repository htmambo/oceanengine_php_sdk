<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormCreateV2RequestExtendInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig
     */
    protected ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig $countConfig = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig
     */
    protected ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig $signUpConfig = null;

    /**
     * @var string
     */
    protected ?string $successTip = null;

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig
     */
    public function getCountConfig(): ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig
    {
        return $this->countConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig $countConfig
     * @return self
     */
    public function setCountConfig(?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig $countConfig): self
    {
        $this->countConfig = $countConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig
     */
    public function getSignUpConfig(): ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig
    {
        return $this->signUpConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig $signUpConfig
     * @return self
     */
    public function setSignUpConfig(?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig $signUpConfig): self
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
            $obj->countConfig = \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoCountConfig::fromArray($v);
        }
        if (($v = $data['sign_up_config'] ?? null) !== null && is_array($v)) {
            $obj->signUpConfig = \Oceanengine\Models\ClueFormCreateV2RequestExtendInfoSignUpConfig::fromArray($v);
        }
        if (($v = $data['success_tip'] ?? null) !== null) {
            $obj->successTip = (string) $v;
        }
        return $obj;
    }
}
