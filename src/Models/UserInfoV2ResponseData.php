<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UserInfoV2ResponseData implements \JsonSerializable
{
    /**
     * 授权的应用id
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var string
     */
    protected ?string $displayName = null;

    /**
     * 邮箱（已经脱敏处理）
     * @var string
     */
    protected ?string $email = null;

    /**
     * 用户id
     * @var int
     */
    protected ?int $id = null;

    /**
     * 是否敏感物料授权, true 已敏感物料授权, false 未敏感物料授权
     * @var bool
     */
    protected ?bool $materialAuthStatus = null;

    /**
     * 当前token可操作的api接口列表
     * @var string[]
     */
    protected ?array $tokenApiList = null;

    /**
     * 权限点list
     * @var int[]
     */
    protected ?array $tokenScopeList = null;

    /**
     * 授权的应用id
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 授权的应用id
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * 邮箱（已经脱敏处理）
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * 邮箱（已经脱敏处理）
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * 用户id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 用户id
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 是否敏感物料授权, true 已敏感物料授权, false 未敏感物料授权
     * @return bool
     */
    public function getMaterialAuthStatus(): ?bool
    {
        return $this->materialAuthStatus;
    }

    /**
     * 是否敏感物料授权, true 已敏感物料授权, false 未敏感物料授权
     * @param bool $materialAuthStatus
     * @return self
     */
    public function setMaterialAuthStatus(?bool $materialAuthStatus): self
    {
        $this->materialAuthStatus = $materialAuthStatus;
        return $this;
    }

    /**
     * 当前token可操作的api接口列表
     * @return string[]
     */
    public function getTokenApiList(): ?array
    {
        return $this->tokenApiList;
    }

    /**
     * 当前token可操作的api接口列表
     * @param string[] $tokenApiList
     * @return self
     */
    public function setTokenApiList(?array $tokenApiList): self
    {
        $this->tokenApiList = $tokenApiList;
        return $this;
    }

    /**
     * 权限点list
     * @return int[]
     */
    public function getTokenScopeList(): ?array
    {
        return $this->tokenScopeList;
    }

    /**
     * 权限点list
     * @param int[] $tokenScopeList
     * @return self
     */
    public function setTokenScopeList(?array $tokenScopeList): self
    {
        $this->tokenScopeList = $tokenScopeList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->displayName !== null) {
            $result['display_name'] = $this->displayName;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->materialAuthStatus !== null) {
            $result['material_auth_status'] = $this->materialAuthStatus;
        }
        if ($this->tokenApiList !== null) {
            $result['token_api_list'] = $this->tokenApiList;
        }
        if ($this->tokenScopeList !== null) {
            $result['token_scope_list'] = $this->tokenScopeList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['display_name'] ?? null) !== null) {
            $obj->displayName = (string) $v;
        }
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['material_auth_status'] ?? null) !== null) {
            $obj->materialAuthStatus = (bool) $v;
        }
        if (($v = $data['token_api_list'] ?? null) !== null && is_array($v)) {
            $obj->tokenApiList = $v;
        }
        if (($v = $data['token_scope_list'] ?? null) !== null && is_array($v)) {
            $obj->tokenScopeList = $v;
        }
        return $obj;
    }
}
