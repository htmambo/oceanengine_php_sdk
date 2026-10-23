<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention implements \JsonSerializable
{
    /**
     * 招商意向单ID
     * @var int
     */
    protected ?int $intentionId = null;

    /**
     * 招商意向单名称
     * @var string
     */
    protected ?string $intentionName = null;

    /**
     * 招商意向单编号
     * @var string
     */
    protected ?string $intentionNo = null;

    /**
     * 招商意向单ID
     * @return int
     */
    public function getIntentionId(): ?int
    {
        return $this->intentionId;
    }

    /**
     * 招商意向单ID
     * @param int $intentionId
     * @return self
     */
    public function setIntentionId(?int $intentionId): self
    {
        $this->intentionId = $intentionId;
        return $this;
    }

    /**
     * 招商意向单名称
     * @return string
     */
    public function getIntentionName(): ?string
    {
        return $this->intentionName;
    }

    /**
     * 招商意向单名称
     * @param string $intentionName
     * @return self
     */
    public function setIntentionName(?string $intentionName): self
    {
        $this->intentionName = $intentionName;
        return $this;
    }

    /**
     * 招商意向单编号
     * @return string
     */
    public function getIntentionNo(): ?string
    {
        return $this->intentionNo;
    }

    /**
     * 招商意向单编号
     * @param string $intentionNo
     * @return self
     */
    public function setIntentionNo(?string $intentionNo): self
    {
        $this->intentionNo = $intentionNo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->intentionId !== null) {
            $result['intention_id'] = $this->intentionId;
        }
        if ($this->intentionName !== null) {
            $result['intention_name'] = $this->intentionName;
        }
        if ($this->intentionNo !== null) {
            $result['intention_no'] = $this->intentionNo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['intention_id'] ?? null) !== null) {
            $obj->intentionId = (int) $v;
        }
        if (($v = $data['intention_name'] ?? null) !== null) {
            $obj->intentionName = (string) $v;
        }
        if (($v = $data['intention_no'] ?? null) !== null) {
            $obj->intentionNo = (string) $v;
        }
        return $obj;
    }
}
