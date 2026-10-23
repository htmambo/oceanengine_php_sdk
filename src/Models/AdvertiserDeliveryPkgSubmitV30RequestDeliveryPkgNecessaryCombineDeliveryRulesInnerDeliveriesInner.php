<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInner implements \JsonSerializable
{
    /**
     * 资质图片附件，数组长度1~50
     * @var int[]
     */
    protected ?array $attachments = null;

    /**
     * 资质类型id，来自【推广产品资质规则配置查询接口】
     * @var int
     */
    protected ?int $qualType = null;

    /**
     * 新增时传0；编辑时传入前置查询到的资质id
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * 资质图片附件，数组长度1~50
     * @return int[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * 资质图片附件，数组长度1~50
     * @param int[] $attachments
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * 资质类型id，来自【推广产品资质规则配置查询接口】
     * @return int
     */
    public function getQualType(): ?int
    {
        return $this->qualType;
    }

    /**
     * 资质类型id，来自【推广产品资质规则配置查询接口】
     * @param int $qualType
     * @return self
     */
    public function setQualType(?int $qualType): self
    {
        $this->qualType = $qualType;
        return $this;
    }

    /**
     * 新增时传0；编辑时传入前置查询到的资质id
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * 新增时传0；编辑时传入前置查询到的资质id
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->qualType !== null) {
            $result['qual_type'] = $this->qualType;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachments'] ?? null) !== null && is_array($v)) {
            $obj->attachments = $v;
        }
        if (($v = $data['qual_type'] ?? null) !== null) {
            $obj->qualType = (int) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        return $obj;
    }
}
