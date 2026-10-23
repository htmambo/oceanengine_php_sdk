<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateStatementV2ResponseData implements \JsonSerializable
{
    /**
     * 创建失败原因
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * @var \Oceanengine\Models\CreateStatementV2DataResult
     */
    protected ?string $result = null;

    /**
     * 结算单编号
     * @var string
     */
    protected ?string $statementSerial = null;

    /**
     * 创建失败原因
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * 创建失败原因
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreateStatementV2DataResult
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param \Oceanengine\Models\CreateStatementV2DataResult $result
     * @return self
     */
    public function setResult(?string $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 结算单编号
     * @return string
     */
    public function getStatementSerial(): ?string
    {
        return $this->statementSerial;
    }

    /**
     * 结算单编号
     * @param string $statementSerial
     * @return self
     */
    public function setStatementSerial(?string $statementSerial): self
    {
        $this->statementSerial = $statementSerial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorReason !== null) {
            $result['error_reason'] = $this->errorReason;
        }
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        if ($this->statementSerial !== null) {
            $result['statement_serial'] = $this->statementSerial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_reason'] ?? null) !== null) {
            $obj->errorReason = (string) $v;
        }
        if (($v = $data['result'] ?? null) !== null) {
            $obj->result = (string) $v;
        }
        if (($v = $data['statement_serial'] ?? null) !== null) {
            $obj->statementSerial = (string) $v;
        }
        return $obj;
    }
}
