<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAuthorizationApplyV10ResponseDataApplyResultInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus
     */
    protected ?string $applyStatus = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var string
     */
    protected ?string $errMsg = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus
     */
    public function getApplyStatus(): ?string
    {
        return $this->applyStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus $applyStatus
     * @return self
     */
    public function setApplyStatus(?string $applyStatus): self
    {
        $this->applyStatus = $applyStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }

    /**
     * @param string $errMsg
     * @return self
     */
    public function setErrMsg(?string $errMsg): self
    {
        $this->errMsg = $errMsg;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyStatus !== null) {
            $result['apply_status'] = $this->applyStatus;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->errMsg !== null) {
            $result['err_msg'] = $this->errMsg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_status'] ?? null) !== null) {
            $obj->applyStatus = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['err_msg'] ?? null) !== null) {
            $obj->errMsg = (string) $v;
        }
        return $obj;
    }
}
