<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityGetConsultResultV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 申诉追踪 ID
     * @var int
     */
    protected ?int $appealTrackId = null;

    /**
     * 申诉时间，格式 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 完成时间，格式 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $finishTime = null;

    /**
     * @var \Oceanengine\Models\SecurityGetConsultResultV30DataResultsResult
     */
    protected ?string $result = null;

    /**
     * 申诉结果说明，富文本
     * @var string
     */
    protected ?string $text = null;

    /**
     * 申诉追踪 ID
     * @return int
     */
    public function getAppealTrackId(): ?int
    {
        return $this->appealTrackId;
    }

    /**
     * 申诉追踪 ID
     * @param int $appealTrackId
     * @return self
     */
    public function setAppealTrackId(?int $appealTrackId): self
    {
        $this->appealTrackId = $appealTrackId;
        return $this;
    }

    /**
     * 申诉时间，格式 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 申诉时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 完成时间，格式 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getFinishTime(): ?string
    {
        return $this->finishTime;
    }

    /**
     * 完成时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $finishTime
     * @return self
     */
    public function setFinishTime(?string $finishTime): self
    {
        $this->finishTime = $finishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityGetConsultResultV30DataResultsResult
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param \Oceanengine\Models\SecurityGetConsultResultV30DataResultsResult $result
     * @return self
     */
    public function setResult(?string $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 申诉结果说明，富文本
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * 申诉结果说明，富文本
     * @param string $text
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appealTrackId !== null) {
            $result['appeal_track_id'] = $this->appealTrackId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->finishTime !== null) {
            $result['finish_time'] = $this->finishTime;
        }
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['appeal_track_id'] ?? null) !== null) {
            $obj->appealTrackId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['finish_time'] ?? null) !== null) {
            $obj->finishTime = (string) $v;
        }
        if (($v = $data['result'] ?? null) !== null) {
            $obj->result = (string) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
