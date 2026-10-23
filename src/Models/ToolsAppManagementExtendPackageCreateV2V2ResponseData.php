<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageCreateV2V2ResponseData implements \JsonSerializable
{
    /**
     * 应用包id
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 应用包id
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包id
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        return $obj;
    }
}
