<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpPlayableUploadV30Request implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableUploadV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 所属小游戏APPID，仅素材类型=直玩素材时必填
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 试玩/直玩版本ID，可通过抖音开放平台获取
     * @var int
     */
    protected ?int $appMaterialId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableUploadV30MaterialType
     */
    protected ?string $materialType = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableUploadV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableUploadV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 所属小游戏APPID，仅素材类型=直玩素材时必填
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 所属小游戏APPID，仅素材类型=直玩素材时必填
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 试玩/直玩版本ID，可通过抖音开放平台获取
     * @return int
     */
    public function getAppMaterialId(): ?int
    {
        return $this->appMaterialId;
    }

    /**
     * 试玩/直玩版本ID，可通过抖音开放平台获取
     * @param int $appMaterialId
     * @return self
     */
    public function setAppMaterialId(?int $appMaterialId): self
    {
        $this->appMaterialId = $appMaterialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableUploadV30MaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableUploadV30MaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appMaterialId !== null) {
            $result['app_material_id'] = $this->appMaterialId;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_material_id'] ?? null) !== null) {
            $obj->appMaterialId = (int) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        return $obj;
    }
}
