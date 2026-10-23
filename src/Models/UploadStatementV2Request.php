<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UploadStatementV2Request implements \JsonSerializable
{
    /**
     * 代理商id
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 文件
     * @var mixed
     */
    protected $file = null;

    /**
     * 代理商id
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商id
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 文件
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * 文件
     * @param mixed $file
     * @return self
     */
    public function setFile($file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['file'] ?? null) !== null) {
            $obj->file = $v;
        }
        return $obj;
    }
}
