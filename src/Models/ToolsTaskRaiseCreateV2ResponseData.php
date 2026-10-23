<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $reportId = null;

    /**
     * @return int
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }

    /**
     * @param int $reportId
     * @return self
     */
    public function setReportId(?int $reportId): self
    {
        $this->reportId = $reportId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->reportId !== null) {
            $result['report_id'] = $this->reportId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['report_id'] ?? null) !== null) {
            $obj->reportId = (int) $v;
        }
        return $obj;
    }
}
