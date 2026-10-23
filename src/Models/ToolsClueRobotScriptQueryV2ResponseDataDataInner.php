<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotScriptQueryV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * 一个号码默认外呼的次数
     * @var int
     */
    protected ?int $callTimes = null;

    /**
     * 剧本ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 剧本名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 变量名称列表
     * @var string[]
     */
    protected ?array $scriptVariables = null;

    /**
     * 一个号码默认外呼的次数
     * @return int
     */
    public function getCallTimes(): ?int
    {
        return $this->callTimes;
    }

    /**
     * 一个号码默认外呼的次数
     * @param int $callTimes
     * @return self
     */
    public function setCallTimes(?int $callTimes): self
    {
        $this->callTimes = $callTimes;
        return $this;
    }

    /**
     * 剧本ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 剧本ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 剧本名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 剧本名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 变量名称列表
     * @return string[]
     */
    public function getScriptVariables(): ?array
    {
        return $this->scriptVariables;
    }

    /**
     * 变量名称列表
     * @param string[] $scriptVariables
     * @return self
     */
    public function setScriptVariables(?array $scriptVariables): self
    {
        $this->scriptVariables = $scriptVariables;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->callTimes !== null) {
            $result['call_times'] = $this->callTimes;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->scriptVariables !== null) {
            $result['script_variables'] = $this->scriptVariables;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_times'] ?? null) !== null) {
            $obj->callTimes = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['script_variables'] ?? null) !== null && is_array($v)) {
            $obj->scriptVariables = $v;
        }
        return $obj;
    }
}
