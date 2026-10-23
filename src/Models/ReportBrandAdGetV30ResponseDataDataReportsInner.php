<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAdGetV30ResponseDataDataReportsInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var string
     */
    protected ?string $adId = null;

    /**
     * 计划名称
     * @var string
     */
    protected ?string $adName = null;

    /**
     * 广告组ID
     * @var string
     */
    protected ?string $campaignId = null;

    /**
     * 广告组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport
     */
    protected ?\Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport $dataReport = null;

    /**
     * 日期
     * @var string
     */
    protected ?string $date = null;

    /**
     * 计划ID
     * @return string
     */
    public function getAdId(): ?string
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param string $adId
     * @return self
     */
    public function setAdId(?string $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划名称
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * 计划名称
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * 广告组ID
     * @return string
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 广告组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 广告组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport
     */
    public function getDataReport(): ?\Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport
    {
        return $this->dataReport;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport $dataReport
     * @return self
     */
    public function setDataReport(?\Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport $dataReport): self
    {
        $this->dataReport = $dataReport;
        return $this;
    }

    /**
     * 日期
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->dataReport !== null) {
            $result['data_report'] = $this->dataReport;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (string) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (string) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['data_report'] ?? null) !== null && is_array($v)) {
            $obj->dataReport = \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInnerDataReport::fromArray($v);
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        return $obj;
    }
}
