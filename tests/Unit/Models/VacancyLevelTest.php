<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\VacancyLevel;

class VacancyLevelTest extends TestCase
{
    /**
     * @param int $remainingCount
     * @param string $expectedMark
     * @dataProvider dataMark
     */
    public function testMarK(int $remainingCount, string $expectedMark)
    {
        $level = new VacancyLevel($remainingCount);
        $this->assertSame($expectedMark, $level->mark());
    }

    public function dataMark()
    {
        return [
            // テストケース
            '空きなし' => [
                // 渡す変数
                'remainingCount' => 0,
                'expectedMark' => '×',
            ],
            '残りわずか' => [
                'remainingCount' => 4,
                'expectedMark' => '△',
            ],
            '空き十分' => [
                'remainingCount' => 5,
                'expectedMark' => '◎',
            ],
        ];
    }

    /**
     * @param int $remainingCount
     * @param string $expectedSlug
     * @dataProvider dataSlug
     */
    public function testSlug(int $remainingCount, string $expectedSlug)
    {
        $level = new VacancyLevel($remainingCount);
        $this->assertSame($expectedSlug, $level->slug());
    }

    public function dataSlug()
    {
        return [
            // テストケース
            '空きなし' => [
                // 渡す変数
                'remainingCount' => 0,
                'expectedSlug' => 'empty',
            ],
            '残りわずか' => [
                'remainingCount' => 4,
                'expectedSlug' => 'few',
            ],
            '空き十分' => [
                'remainingCount' => 5,
                'expectedSlug' => 'enough',
            ],
        ];
    }
}
