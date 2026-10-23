<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30ResponseDataFailedRecordsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount
     */
    protected ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount $account = null;

    /**
     * 授权发起方所在组织深度 根节点=0
     * @var int
     */
    protected ?int $accountDepth = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope
     */
    protected ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope $assetScope = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget
     */
    protected ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget $authTarget = null;

    /**
     * 授权记录ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * true代表子bp默认授权，不可取消
     * @var bool
     */
    protected ?bool $isDefaultAuth = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount
     */
    public function getAccount(): ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount
    {
        return $this->account;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount $account
     * @return self
     */
    public function setAccount(?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount $account): self
    {
        $this->account = $account;
        return $this;
    }

    /**
     * 授权发起方所在组织深度 根节点=0
     * @return int
     */
    public function getAccountDepth(): ?int
    {
        return $this->accountDepth;
    }

    /**
     * 授权发起方所在组织深度 根节点=0
     * @param int $accountDepth
     * @return self
     */
    public function setAccountDepth(?int $accountDepth): self
    {
        $this->accountDepth = $accountDepth;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope
     */
    public function getAssetScope(): ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope
    {
        return $this->assetScope;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope $assetScope
     * @return self
     */
    public function setAssetScope(?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope $assetScope): self
    {
        $this->assetScope = $assetScope;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget
     */
    public function getAuthTarget(): ?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget
    {
        return $this->authTarget;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget $authTarget
     * @return self
     */
    public function setAuthTarget(?\Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget $authTarget): self
    {
        $this->authTarget = $authTarget;
        return $this;
    }

    /**
     * 授权记录ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 授权记录ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * true代表子bp默认授权，不可取消
     * @return bool
     */
    public function getIsDefaultAuth(): ?bool
    {
        return $this->isDefaultAuth;
    }

    /**
     * true代表子bp默认授权，不可取消
     * @param bool $isDefaultAuth
     * @return self
     */
    public function setIsDefaultAuth(?bool $isDefaultAuth): self
    {
        $this->isDefaultAuth = $isDefaultAuth;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->account !== null) {
            $result['account'] = $this->account;
        }
        if ($this->accountDepth !== null) {
            $result['account_depth'] = $this->accountDepth;
        }
        if ($this->assetScope !== null) {
            $result['asset_scope'] = $this->assetScope;
        }
        if ($this->authTarget !== null) {
            $result['auth_target'] = $this->authTarget;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->isDefaultAuth !== null) {
            $result['is_default_auth'] = $this->isDefaultAuth;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account'] ?? null) !== null && is_array($v)) {
            $obj->account = \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAccount::fromArray($v);
        }
        if (($v = $data['account_depth'] ?? null) !== null) {
            $obj->accountDepth = (int) $v;
        }
        if (($v = $data['asset_scope'] ?? null) !== null && is_array($v)) {
            $obj->assetScope = \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope::fromArray($v);
        }
        if (($v = $data['auth_target'] ?? null) !== null && is_array($v)) {
            $obj->authTarget = \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget::fromArray($v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['is_default_auth'] ?? null) !== null) {
            $obj->isDefaultAuth = (bool) $v;
        }
        return $obj;
    }
}
