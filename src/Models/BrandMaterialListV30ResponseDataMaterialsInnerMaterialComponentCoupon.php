<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCoupon implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $buttonName = null;

    /**
     * @var int
     */
    protected ?int $couponId = null;

    /**
     * @var string
     */
    protected ?string $formUrl = null;

    /**
     * @var int
     */
    protected ?int $times = null;

    /**
     * @return string
     */
    public function getButtonName(): ?string
    {
        return $this->buttonName;
    }

    /**
     * @param string $buttonName
     * @return self
     */
    public function setButtonName(?string $buttonName): self
    {
        $this->buttonName = $buttonName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     * @return self
     */
    public function setCouponId(?int $couponId): self
    {
        $this->couponId = $couponId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormUrl(): ?string
    {
        return $this->formUrl;
    }

    /**
     * @param string $formUrl
     * @return self
     */
    public function setFormUrl(?string $formUrl): self
    {
        $this->formUrl = $formUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimes(): ?int
    {
        return $this->times;
    }

    /**
     * @param int $times
     * @return self
     */
    public function setTimes(?int $times): self
    {
        $this->times = $times;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->buttonName !== null) {
            $result['button_name'] = $this->buttonName;
        }
        if ($this->couponId !== null) {
            $result['coupon_id'] = $this->couponId;
        }
        if ($this->formUrl !== null) {
            $result['form_url'] = $this->formUrl;
        }
        if ($this->times !== null) {
            $result['times'] = $this->times;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button_name'] ?? null) !== null) {
            $obj->buttonName = (string) $v;
        }
        if (($v = $data['coupon_id'] ?? null) !== null) {
            $obj->couponId = (int) $v;
        }
        if (($v = $data['form_url'] ?? null) !== null) {
            $obj->formUrl = (string) $v;
        }
        if (($v = $data['times'] ?? null) !== null) {
            $obj->times = (int) $v;
        }
        return $obj;
    }
}
