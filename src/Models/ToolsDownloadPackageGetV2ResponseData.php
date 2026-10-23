<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDownloadPackageGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsDownloadPackageGetV2DataPackageStatus
     */
    protected ?string $packageStatus = null;

    /**
     * @return \Oceanengine\Models\ToolsDownloadPackageGetV2DataPackageStatus
     */
    public function getPackageStatus(): ?string
    {
        return $this->packageStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsDownloadPackageGetV2DataPackageStatus $packageStatus
     * @return self
     */
    public function setPackageStatus(?string $packageStatus): self
    {
        $this->packageStatus = $packageStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->packageStatus !== null) {
            $result['package_status'] = $this->packageStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['package_status'] ?? null) !== null) {
            $obj->packageStatus = (string) $v;
        }
        return $obj;
    }
}
