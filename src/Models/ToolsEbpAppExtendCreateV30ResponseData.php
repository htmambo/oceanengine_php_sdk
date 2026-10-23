<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo $checkInfo = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo
     */
    public function getCheckInfo(): ?\Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo
    {
        return $this->checkInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo $checkInfo
     * @return self
     */
    public function setCheckInfo(?\Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo $checkInfo): self
    {
        $this->checkInfo = $checkInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
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
        if ($this->checkInfo !== null) {
            $result['check_info'] = $this->checkInfo;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['check_info'] ?? null) !== null && is_array($v)) {
            $obj->checkInfo = \Oceanengine\Models\ToolsEbpAppExtendCreateV30ResponseDataCheckInfo::fromArray($v);
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        return $obj;
    }
}
