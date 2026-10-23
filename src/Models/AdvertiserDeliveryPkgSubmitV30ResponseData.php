<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 推广产品组id，可用于后续的查询或编辑
     * @var int
     */
    protected ?int $pkgId = null;

    /**
     * 系统生成的资质id，每份资质对应一个id
     * @var int[]
     */
    protected ?array $qualificationIds = null;

    /**
     * 推广产品组id，可用于后续的查询或编辑
     * @return int
     */
    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    /**
     * 推广产品组id，可用于后续的查询或编辑
     * @param int $pkgId
     * @return self
     */
    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;
        return $this;
    }

    /**
     * 系统生成的资质id，每份资质对应一个id
     * @return int[]
     */
    public function getQualificationIds(): ?array
    {
        return $this->qualificationIds;
    }

    /**
     * 系统生成的资质id，每份资质对应一个id
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
        if ($this->pkgId !== null) {
            $result['pkg_id'] = $this->pkgId;
        }
        if ($this->qualificationIds !== null) {
            $result['qualification_ids'] = $this->qualificationIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pkg_id'] ?? null) !== null) {
            $obj->pkgId = (int) $v;
        }
        if (($v = $data['qualification_ids'] ?? null) !== null && is_array($v)) {
            $obj->qualificationIds = $v;
        }
        return $obj;
    }
}
