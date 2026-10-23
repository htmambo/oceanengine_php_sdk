<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpRolePermissionGetV2ResponseData implements \JsonSerializable
{
    /**
     * EBP 用户权限范围列表
     * @var \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInner[]
     */
    protected ?array $permissionScope = null;

    /**
     * EBP 用户权限范围列表
     * @return \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInner[]
     */
    public function getPermissionScope(): ?array
    {
        return $this->permissionScope;
    }

    /**
     * EBP 用户权限范围列表
     * @param \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInner[] $permissionScope
     * @return self
     */
    public function setPermissionScope(?array $permissionScope): self
    {
        $this->permissionScope = $permissionScope;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->permissionScope !== null) {
            $result['permission_scope'] = $this->permissionScope;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['permission_scope'] ?? null) !== null && is_array($v)) {
            $obj->permissionScope = array_map(fn ($vv) => \Oceanengine\Models\EbpRolePermissionGetV2ResponseDataPermissionScopeInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
