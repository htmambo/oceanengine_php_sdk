<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportCustomDataTopicDailyReportV2ResponseDataStatsInner implements \JsonSerializable
{
    /**
     * 详细增量指标数据列表
     * @var \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInnerDataInner[]
     */
    protected ?array $data = null;

    /**
     * 该指标数据的yyyy-MM-dd日期时间, 按天聚合。注意⚠️：BasicData作为通用指标，在增量请求中date为 \"0\" 表示通用数据
     * @var string
     */
    protected ?string $date = null;

    /**
     * 请求的任务Id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 请求的作品交付物Id
     * @var int
     */
    protected ?int $workId = null;

    /**
     * 详细增量指标数据列表
     * @return \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInnerDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 详细增量指标数据列表
     * @param \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInnerDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 该指标数据的yyyy-MM-dd日期时间, 按天聚合。注意⚠️：BasicData作为通用指标，在增量请求中date为 \"0\" 表示通用数据
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 该指标数据的yyyy-MM-dd日期时间, 按天聚合。注意⚠️：BasicData作为通用指标，在增量请求中date为 \"0\" 表示通用数据
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 请求的任务Id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 请求的任务Id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 请求的作品交付物Id
     * @return int
     */
    public function getWorkId(): ?int
    {
        return $this->workId;
    }

    /**
     * 请求的作品交付物Id
     * @param int $workId
     * @return self
     */
    public function setWorkId(?int $workId): self
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->workId !== null) {
            $result['work_id'] = $this->workId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInnerDataInner::fromArray($vv), $v);
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['work_id'] ?? null) !== null) {
            $obj->workId = (int) $v;
        }
        return $obj;
    }
}
