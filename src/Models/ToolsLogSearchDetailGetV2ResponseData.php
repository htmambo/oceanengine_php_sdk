<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLogSearchDetailGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog
     */
    protected ?\Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog $log = null;

    /**
     * @return \Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog
     */
    public function getLog(): ?\Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog
    {
        return $this->log;
    }

    /**
     * @param \Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog $log
     * @return self
     */
    public function setLog(?\Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog $log): self
    {
        $this->log = $log;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->log !== null) {
            $result['log'] = $this->log;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['log'] ?? null) !== null && is_array($v)) {
            $obj->log = \Oceanengine\Models\ToolsLogSearchDetailGetV2ResponseDataLog::fromArray($v);
        }
        return $obj;
    }
}
