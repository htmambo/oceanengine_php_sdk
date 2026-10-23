<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormUpdateV2RequestExtendInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig
     */
    protected ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig $countConfig = null;

    /**
     * @var \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig
     */
    protected ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig $signUpConfig = null;

    /**
     * @var string
     */
    protected ?string $successTip = null;

    /**
     * @return \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig
     */
    public function getCountConfig(): ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig
    {
        return $this->countConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig $countConfig
     * @return self
     */
    public function setCountConfig(?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig $countConfig): self
    {
        $this->countConfig = $countConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig
     */
    public function getSignUpConfig(): ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig
    {
        return $this->signUpConfig;
    }

    /**
     * @param \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig $signUpConfig
     * @return self
     */
    public function setSignUpConfig(?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig $signUpConfig): self
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
            $obj->countConfig = \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoCountConfig::fromArray($v);
        }
        if (($v = $data['sign_up_config'] ?? null) !== null && is_array($v)) {
            $obj->signUpConfig = \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfoSignUpConfig::fromArray($v);
        }
        if (($v = $data['success_tip'] ?? null) !== null) {
            $obj->successTip = (string) $v;
        }
        return $obj;
    }
}
