<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 删除失败的行业产品列表
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 删除成功的推广产品id
     * @var int[]
     */
    protected ?array $pkgIds = null;

    /**
     * 删除失败的行业产品列表
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 删除失败的行业产品列表
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 删除成功的推广产品id
     * @return int[]
     */
    public function getPkgIds(): ?array
    {
        return $this->pkgIds;
    }

    /**
     * 删除成功的推广产品id
     * @param int[] $pkgIds
     * @return self
     */
    public function setPkgIds(?array $pkgIds): self
    {
        $this->pkgIds = $pkgIds;
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
        if ($this->pkgIds !== null) {
            $result['pkg_ids'] = $this->pkgIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['pkg_ids'] ?? null) !== null && is_array($v)) {
            $obj->pkgIds = $v;
        }
        return $obj;
    }
}
