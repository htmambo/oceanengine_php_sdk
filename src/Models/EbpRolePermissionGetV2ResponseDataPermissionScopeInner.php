<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpRolePermissionGetV2ResponseDataPermissionScopeInner implements \JsonSerializable
{
    /**
     * 升级版巨量引擎工作台组织 ID
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * 当前角色拥有的权限点列表
     * @var \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInnerPermissionInner[]
     */
    protected ?array $permission = null;

    /**
     * 当前用户在该 EBP 下的角色 ID
     * @var int
     */
    protected ?int $roleId = null;

    /**
     * 升级版巨量引擎工作台组织 ID
     * @return int
     */
    public function getEbpId(): ?int
    {
        return $this->ebpId;
    }

    /**
     * 升级版巨量引擎工作台组织 ID
     * @param int $ebpId
     * @return self
     */
    public function setEbpId(?int $ebpId): self
    {
        $this->ebpId = $ebpId;
        return $this;
    }

    /**
     * 当前角色拥有的权限点列表
     * @return \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInnerPermissionInner[]
     */
    public function getPermission(): ?array
    {
        return $this->permission;
    }

    /**
     * 当前角色拥有的权限点列表
     * @param \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInnerPermissionInner[] $permission
     * @return self
     */
    public function setPermission(?array $permission): self
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * 当前用户在该 EBP 下的角色 ID
     * @return int
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    /**
     * 当前用户在该 EBP 下的角色 ID
     * @param int $roleId
     * @return self
     */
    public function setRoleId(?int $roleId): self
    {
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->permission !== null) {
            $result['permission'] = $this->permission;
        }
        if ($this->roleId !== null) {
            $result['role_id'] = $this->roleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['permission'] ?? null) !== null && is_array($v)) {
            $obj->permission = array_map(fn ($vv) => \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInnerPermissionInner::fromArray($vv), $v);
        }
        if (($v = $data['role_id'] ?? null) !== null) {
            $obj->roleId = (int) $v;
        }
        return $obj;
    }
}
