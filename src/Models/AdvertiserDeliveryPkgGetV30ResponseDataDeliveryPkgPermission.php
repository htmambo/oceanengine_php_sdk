<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission implements \JsonSerializable
{
    /**
     * 是否支持编辑
     * @var bool
     */
    protected ?bool $canDelete = null;

    /**
     * 是否支持编辑
     * @var bool
     */
    protected ?bool $canEdit = null;

    /**
     * 不支持删除的原因
     * @var string
     */
    protected ?string $cantDeleteReason = null;

    /**
     * 不支持编辑的原因
     * @var string
     */
    protected ?string $cantEditReason = null;

    /**
     * 是否支持编辑
     * @return bool
     */
    public function getCanDelete(): ?bool
    {
        return $this->canDelete;
    }

    /**
     * 是否支持编辑
     * @param bool $canDelete
     * @return self
     */
    public function setCanDelete(?bool $canDelete): self
    {
        $this->canDelete = $canDelete;
        return $this;
    }

    /**
     * 是否支持编辑
     * @return bool
     */
    public function getCanEdit(): ?bool
    {
        return $this->canEdit;
    }

    /**
     * 是否支持编辑
     * @param bool $canEdit
     * @return self
     */
    public function setCanEdit(?bool $canEdit): self
    {
        $this->canEdit = $canEdit;
        return $this;
    }

    /**
     * 不支持删除的原因
     * @return string
     */
    public function getCantDeleteReason(): ?string
    {
        return $this->cantDeleteReason;
    }

    /**
     * 不支持删除的原因
     * @param string $cantDeleteReason
     * @return self
     */
    public function setCantDeleteReason(?string $cantDeleteReason): self
    {
        $this->cantDeleteReason = $cantDeleteReason;
        return $this;
    }

    /**
     * 不支持编辑的原因
     * @return string
     */
    public function getCantEditReason(): ?string
    {
        return $this->cantEditReason;
    }

    /**
     * 不支持编辑的原因
     * @param string $cantEditReason
     * @return self
     */
    public function setCantEditReason(?string $cantEditReason): self
    {
        $this->cantEditReason = $cantEditReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canDelete !== null) {
            $result['can_delete'] = $this->canDelete;
        }
        if ($this->canEdit !== null) {
            $result['can_edit'] = $this->canEdit;
        }
        if ($this->cantDeleteReason !== null) {
            $result['cant_delete_reason'] = $this->cantDeleteReason;
        }
        if ($this->cantEditReason !== null) {
            $result['cant_edit_reason'] = $this->cantEditReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_delete'] ?? null) !== null) {
            $obj->canDelete = (bool) $v;
        }
        if (($v = $data['can_edit'] ?? null) !== null) {
            $obj->canEdit = (bool) $v;
        }
        if (($v = $data['cant_delete_reason'] ?? null) !== null) {
            $obj->cantDeleteReason = (string) $v;
        }
        if (($v = $data['cant_edit_reason'] ?? null) !== null) {
            $obj->cantEditReason = (string) $v;
        }
        return $obj;
    }
}
