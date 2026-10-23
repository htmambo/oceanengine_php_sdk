<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAuthorizationApplyV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10ResponseDataApplyResultInner[]
     */
    protected ?array $applyResult = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10ResponseDataApplyResultInner[]
     */
    public function getApplyResult(): ?array
    {
        return $this->applyResult;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10ResponseDataApplyResultInner[] $applyResult
     * @return self
     */
    public function setApplyResult(?array $applyResult): self
    {
        $this->applyResult = $applyResult;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyResult !== null) {
            $result['apply_result'] = $this->applyResult;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_result'] ?? null) !== null && is_array($v)) {
            $obj->applyResult = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10ResponseDataApplyResultInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
