<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAdvCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errCode = null;

    /**
     * @var string
     */
    protected ?string $errMessage = null;

    /**
     * @var array<string,array<string,mixed>>
     */
    protected ?array $failVideoIds = null;

    /**
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @return string
     */
    public function getErrCode(): ?string
    {
        return $this->errCode;
    }

    /**
     * @param string $errCode
     * @return self
     */
    public function setErrCode(?string $errCode): self
    {
        $this->errCode = $errCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrMessage(): ?string
    {
        return $this->errMessage;
    }

    /**
     * @param string $errMessage
     * @return self
     */
    public function setErrMessage(?string $errMessage): self
    {
        $this->errMessage = $errMessage;
        return $this;
    }

    /**
     * @return array<string,array<string,mixed>>
     */
    public function getFailVideoIds(): ?array
    {
        return $this->failVideoIds;
    }

    /**
     * @param array<string,array<string,mixed>> $failVideoIds
     * @return self
     */
    public function setFailVideoIds(?array $failVideoIds): self
    {
        $this->failVideoIds = $failVideoIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * @param int[] $taskIds
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->taskIds = $taskIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errCode !== null) {
            $result['err_code'] = $this->errCode;
        }
        if ($this->errMessage !== null) {
            $result['err_message'] = $this->errMessage;
        }
        if ($this->failVideoIds !== null) {
            $result['fail_video_ids'] = $this->failVideoIds;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['err_code'] ?? null) !== null) {
            $obj->errCode = (string) $v;
        }
        if (($v = $data['err_message'] ?? null) !== null) {
            $obj->errMessage = (string) $v;
        }
        if (($v = $data['fail_video_ids'] ?? null) !== null && is_array($v)) {
            $obj->failVideoIds = $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
