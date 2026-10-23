<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroGameConvertWindowUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var string
     */
    protected ?string $assetId = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30ConvertWindow
     */
    protected ?string $convertWindow = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetId(): ?string
    {
        return $this->assetId;
    }

    /**
     * @param string $assetId
     * @return self
     */
    public function setAssetId(?string $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30AssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30ConvertWindow
     */
    public function getConvertWindow(): ?string
    {
        return $this->convertWindow;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30ConvertWindow $convertWindow
     * @return self
     */
    public function setConvertWindow(?string $convertWindow): self
    {
        $this->convertWindow = $convertWindow;
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
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->convertWindow !== null) {
            $result['convert_window'] = $this->convertWindow;
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
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (string) $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['convert_window'] ?? null) !== null) {
            $obj->convertWindow = (string) $v;
        }
        return $obj;
    }
}
