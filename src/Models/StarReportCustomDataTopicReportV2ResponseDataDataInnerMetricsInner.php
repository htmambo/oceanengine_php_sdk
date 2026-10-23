<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportCustomDataTopicReportV2ResponseDataDataInnerMetricsInner implements \JsonSerializable
{
    /**
     * 指标描述，建议首次使用前先调用/open_api/2/star/report/data_topic_config/接口详细了解具体数据主题下的Topic配置
     * @var string
     */
    protected ?string $description = null;

    /**
     * 指标字段，仅包含英文与下划线等符号
     * @var string
     */
    protected ?string $field = null;

    /**
     * 指标名称，中文或英文描述字段名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataMetricsType
     */
    protected ?string $type = null;

    /**
     * 指标值
     * @var string
     */
    protected ?string $value = null;

    /**
     * 指标描述，建议首次使用前先调用/open_api/2/star/report/data_topic_config/接口详细了解具体数据主题下的Topic配置
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 指标描述，建议首次使用前先调用/open_api/2/star/report/data_topic_config/接口详细了解具体数据主题下的Topic配置
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 指标字段，仅包含英文与下划线等符号
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * 指标字段，仅包含英文与下划线等符号
     * @param string $field
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }

    /**
     * 指标名称，中文或英文描述字段名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 指标名称，中文或英文描述字段名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataMetricsType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataMetricsType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 指标值
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * 指标值
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
