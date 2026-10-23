<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetExportBoostItemGroupResultV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarVasGetExportBoostItemGroupResultV2DataExportStatus
     */
    protected ?string $exportStatus = null;

    /**
     * 导出飞书文档地址，仅export_status为Success时有效
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\StarVasGetExportBoostItemGroupResultV2DataExportStatus
     */
    public function getExportStatus(): ?string
    {
        return $this->exportStatus;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetExportBoostItemGroupResultV2DataExportStatus $exportStatus
     * @return self
     */
    public function setExportStatus(?string $exportStatus): self
    {
        $this->exportStatus = $exportStatus;
        return $this;
    }

    /**
     * 导出飞书文档地址，仅export_status为Success时有效
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 导出飞书文档地址，仅export_status为Success时有效
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->exportStatus !== null) {
            $result['export_status'] = $this->exportStatus;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['export_status'] ?? null) !== null) {
            $obj->exportStatus = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
