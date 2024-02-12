<?php

namespace App\DTO;

use Illuminate\Http\Request;

class PerfomanceUpdateForm
{
    public string $title;
    public int $code;
    public string $unit_of_measure;
    public string $period_start;
    public string $period_end;
    public int $actual_indicator;
    public int $amount_indicator;


    public function __construct(string $title, int $code, string $unit_of_measure, string $period_start, string $period_end, int $actual_indicator, int $amount_indicator)
    {
        $this->title = $title;
        $this->code = $code;
        $this->unit_of_measure = $unit_of_measure;
        $this->period_start = $period_start;
        $this->period_end = $period_end;
        $this->actual_indicator = $actual_indicator;
        $this->amount_indicator = $amount_indicator;
    }

    public static function fromRequest(Request $request): self
    {
        return new static(

            $request->get('title'),
            $request->get('code'),
            $request->get('unit_of_measure'),
            $request->get('period_start'),
            $request->get('period_end'),
            $request->get('actual_indicator'),
            $request->get('amount_indicator'),
        );
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'code' => $this->code,
            'unit_of_measure' => $this->unit_of_measure,
            'period_start' => $this->period_start,
            'period_end' => $this->period_end,
            'actual_indicator' => $this->actual_indicator,
            'amount_indicator' => $this->amount_indicator,
        ];
    }

}
