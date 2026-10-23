<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeAuthListGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthRange
     */
    protected ?string $authRange = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthStatus
     */
    protected ?string $authStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthType
     */
    protected ?string $authType = null;

    /**
     * AwemeID 筛选
     * @var int[]
     */
    protected ?array $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var string[]
     */
    protected ?array $awemeShowId = null;

    /**
     * 只需要待达人确认解除授权
     * @var bool
     */
    protected ?bool $isCancellationProgress = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthRange
     */
    public function getAuthRange(): ?string
    {
        return $this->authRange;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthRange $authRange
     * @return self
     */
    public function setAuthRange(?string $authRange): self
    {
        $this->authRange = $authRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthStatus
     */
    public function getAuthStatus(): ?string
    {
        return $this->authStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthStatus $authStatus
     * @return self
     */
    public function setAuthStatus(?string $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10FilteringAuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * AwemeID 筛选
     * @return int[]
     */
    public function getAwemeId(): ?array
    {
        return $this->awemeId;
    }

    /**
     * AwemeID 筛选
     * @param int[] $awemeId
     * @return self
     */
    public function setAwemeId(?array $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAwemeShowId(): ?array
    {
        return $this->awemeShowId;
    }

    /**
     * @param string[] $awemeShowId
     * @return self
     */
    public function setAwemeShowId(?array $awemeShowId): self
    {
        $this->awemeShowId = $awemeShowId;
        return $this;
    }

    /**
     * 只需要待达人确认解除授权
     * @return bool
     */
    public function getIsCancellationProgress(): ?bool
    {
        return $this->isCancellationProgress;
    }

    /**
     * 只需要待达人确认解除授权
     * @param bool $isCancellationProgress
     * @return self
     */
    public function setIsCancellationProgress(?bool $isCancellationProgress): self
    {
        $this->isCancellationProgress = $isCancellationProgress;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authRange !== null) {
            $result['auth_range'] = $this->authRange;
        }
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeShowId !== null) {
            $result['aweme_show_id'] = $this->awemeShowId;
        }
        if ($this->isCancellationProgress !== null) {
            $result['is_cancellation_progress'] = $this->isCancellationProgress;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_range'] ?? null) !== null) {
            $obj->authRange = (string) $v;
        }
        if (($v = $data['auth_status'] ?? null) !== null) {
            $obj->authStatus = (string) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null && is_array($v)) {
            $obj->awemeId = $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_show_id'] ?? null) !== null && is_array($v)) {
            $obj->awemeShowId = $v;
        }
        if (($v = $data['is_cancellation_progress'] ?? null) !== null) {
            $obj->isCancellationProgress = (bool) $v;
        }
        return $obj;
    }
}
