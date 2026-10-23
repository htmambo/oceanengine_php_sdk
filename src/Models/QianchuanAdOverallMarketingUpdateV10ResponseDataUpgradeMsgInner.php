<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError
     */
    protected ?\Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError $error = null;

    /**
     * 升级是否成功
     * @var bool
     */
    protected ?bool $flag = null;

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError
     */
    public function getError(): ?\Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError
    {
        return $this->error;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError $error
     * @return self
     */
    public function setError(?\Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError $error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * 升级是否成功
     * @return bool
     */
    public function getFlag(): ?bool
    {
        return $this->flag;
    }

    /**
     * 升级是否成功
     * @param bool $flag
     * @return self
     */
    public function setFlag(?bool $flag): self
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->flag !== null) {
            $result['flag'] = $this->flag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInnerError::fromArray($v);
        }
        if (($v = $data['flag'] ?? null) !== null) {
            $obj->flag = (bool) $v;
        }
        return $obj;
    }
}
