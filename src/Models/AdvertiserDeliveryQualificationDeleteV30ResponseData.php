<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 删除失败的投放资质列表
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 删除成功的投放资质id
     * @var int[]
     */
    protected ?array $qualificationIds = null;

    /**
     * 删除失败的投放资质列表
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 删除失败的投放资质列表
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 删除成功的投放资质id
     * @return int[]
     */
    public function getQualificationIds(): ?array
    {
        return $this->qualificationIds;
    }

    /**
     * 删除成功的投放资质id
     * @param int[] $qualificationIds
     * @return self
     */
    public function setQualificationIds(?array $qualificationIds): self
    {
        $this->qualificationIds = $qualificationIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->qualificationIds !== null) {
            $result['qualification_ids'] = $this->qualificationIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['qualification_ids'] ?? null) !== null && is_array($v)) {
            $obj->qualificationIds = $v;
        }
        return $obj;
    }
}
