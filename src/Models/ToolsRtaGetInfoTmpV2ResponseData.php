<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaGetInfoTmpV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo
     */
    protected ?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo $interfaceInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo
     */
    protected ?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo $rtaInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo
     */
    public function getInterfaceInfo(): ?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo
    {
        return $this->interfaceInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo $interfaceInfo
     * @return self
     */
    public function setInterfaceInfo(?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo $interfaceInfo): self
    {
        $this->interfaceInfo = $interfaceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo
     */
    public function getRtaInfo(): ?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo
    {
        return $this->rtaInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo $rtaInfo
     * @return self
     */
    public function setRtaInfo(?\Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo $rtaInfo): self
    {
        $this->rtaInfo = $rtaInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->interfaceInfo !== null) {
            $result['interface_info'] = $this->interfaceInfo;
        }
        if ($this->rtaInfo !== null) {
            $result['rta_info'] = $this->rtaInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['interface_info'] ?? null) !== null && is_array($v)) {
            $obj->interfaceInfo = \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo::fromArray($v);
        }
        if (($v = $data['rta_info'] ?? null) !== null && is_array($v)) {
            $obj->rtaInfo = \Oceanengine\Models\ToolsRtaGetInfoTmpV2ResponseDataRtaInfo::fromArray($v);
        }
        return $obj;
    }
}
