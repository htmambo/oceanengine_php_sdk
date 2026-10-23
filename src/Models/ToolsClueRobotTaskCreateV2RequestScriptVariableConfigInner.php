<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotTaskCreateV2RequestScriptVariableConfigInner implements \JsonSerializable
{
    /**
     * 变量名称
     * @var string
     */
    protected ?string $variableName = null;

    /**
     * 变量值
     * @var string
     */
    protected ?string $variableValue = null;

    /**
     * 变量名称
     * @return string
     */
    public function getVariableName(): ?string
    {
        return $this->variableName;
    }

    /**
     * 变量名称
     * @param string $variableName
     * @return self
     */
    public function setVariableName(?string $variableName): self
    {
        $this->variableName = $variableName;
        return $this;
    }

    /**
     * 变量值
     * @return string
     */
    public function getVariableValue(): ?string
    {
        return $this->variableValue;
    }

    /**
     * 变量值
     * @param string $variableValue
     * @return self
     */
    public function setVariableValue(?string $variableValue): self
    {
        $this->variableValue = $variableValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->variableName !== null) {
            $result['variable_name'] = $this->variableName;
        }
        if ($this->variableValue !== null) {
            $result['variable_value'] = $this->variableValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['variable_name'] ?? null) !== null) {
            $obj->variableName = (string) $v;
        }
        if (($v = $data['variable_value'] ?? null) !== null) {
            $obj->variableValue = (string) $v;
        }
        return $obj;
    }
}
