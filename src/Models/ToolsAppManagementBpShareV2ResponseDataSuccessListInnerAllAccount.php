<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType
     */
    protected ?string $accountType = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        return $obj;
    }
}
