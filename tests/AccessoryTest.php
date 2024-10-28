<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests;

use Boatrace\Sakura\Accessory;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class AccessoryTest extends PHPUnitTestCase
{
    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = Accessory::times(stadiumId: 1, raceNumber: 1, date: '2024-01-02');
        $this->assertSame(18.34, $response['bracket1HalfLapTime']);
        $this->assertSame(4.37, $response['bracket1TurnTime']);
        $this->assertSame(7.58, $response['bracket1StraightTime']);
        $this->assertSame(18.67, $response['bracket2HalfLapTime']);
        $this->assertSame(4.58, $response['bracket2TurnTime']);
        $this->assertSame(7.60, $response['bracket2StraightTime']);
        $this->assertSame(18.64, $response['bracket3HalfLapTime']);
        $this->assertSame(4.44, $response['bracket3TurnTime']);
        $this->assertSame(7.76, $response['bracket3StraightTime']);
        $this->assertSame(18.81, $response['bracket4HalfLapTime']);
        $this->assertSame(4.45, $response['bracket4TurnTime']);
        $this->assertSame(7.70, $response['bracket4StraightTime']);
        $this->assertSame(18.43, $response['bracket5HalfLapTime']);
        $this->assertSame(4.81, $response['bracket5TurnTime']);
        $this->assertSame(7.58, $response['bracket5StraightTime']);
        $this->assertSame(18.45, $response['bracket6HalfLapTime']);
        $this->assertSame(4.91, $response['bracket6TurnTime']);
        $this->assertSame(7.65, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium02(): void
    {
        $response = Accessory::times(stadiumId: 2, raceNumber: 1, date: '2024-01-05');
        $this->assertSame(36.67, $response['bracket1LapTime']);
        $this->assertSame(5.41, $response['bracket1TurnTime']);
        $this->assertSame(7.08, $response['bracket1StraightTime']);
        $this->assertSame(37.10, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.01, $response['bracket2StraightTime']);
        $this->assertSame(37.33, $response['bracket3LapTime']);
        $this->assertSame(5.47, $response['bracket3TurnTime']);
        $this->assertSame(7.14, $response['bracket3StraightTime']);
        $this->assertSame(37.07, $response['bracket4LapTime']);
        $this->assertSame(5.50, $response['bracket4TurnTime']);
        $this->assertSame(7.00, $response['bracket4StraightTime']);
        $this->assertSame(37.30, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(7.03, $response['bracket5StraightTime']);
        $this->assertSame(37.47, $response['bracket6LapTime']);
        $this->assertSame(5.70, $response['bracket6TurnTime']);
        $this->assertSame(7.01, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium05(): void
    {
        $response = Accessory::times(stadiumId: 5, raceNumber: 1, date: '2024-01-03');
        $this->assertSame(36.47, $response['bracket1LapTime']);
        $this->assertSame(6.07, $response['bracket1TurnTime']);
        $this->assertSame(6.47, $response['bracket1StraightTime']);
        $this->assertSame(36.97, $response['bracket2LapTime']);
        $this->assertSame(6.03, $response['bracket2TurnTime']);
        $this->assertSame(6.68, $response['bracket2StraightTime']);
        $this->assertSame(36.70, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(6.93, $response['bracket3StraightTime']);
        $this->assertSame(36.44, $response['bracket4LapTime']);
        $this->assertSame(5.67, $response['bracket4TurnTime']);
        $this->assertSame(6.87, $response['bracket4StraightTime']);
        $this->assertSame(37.06, $response['bracket5LapTime']);
        $this->assertSame(5.57, $response['bracket5TurnTime']);
        $this->assertSame(6.82, $response['bracket5StraightTime']);
        $this->assertSame(37.37, $response['bracket6LapTime']);
        $this->assertSame(5.93, $response['bracket6TurnTime']);
        $this->assertSame(6.71, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium06(): void
    {
        $response = Accessory::times(stadiumId: 6, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(37.41, $response['bracket1LapTime']);
        $this->assertSame(5.69, $response['bracket1TurnTime']);
        $this->assertSame(7.75, $response['bracket1StraightTime']);
        $this->assertSame(37.35, $response['bracket2LapTime']);
        $this->assertSame(5.51, $response['bracket2TurnTime']);
        $this->assertSame(7.75, $response['bracket2StraightTime']);
        $this->assertSame(37.22, $response['bracket3LapTime']);
        $this->assertSame(5.60, $response['bracket3TurnTime']);
        $this->assertSame(7.87, $response['bracket3StraightTime']);
        $this->assertSame(36.49, $response['bracket4LapTime']);
        $this->assertSame(5.53, $response['bracket4TurnTime']);
        $this->assertSame(7.82, $response['bracket4StraightTime']);
        $this->assertSame(36.95, $response['bracket5LapTime']);
        $this->assertSame(6.20, $response['bracket5TurnTime']);
        $this->assertSame(7.51, $response['bracket5StraightTime']);
        $this->assertSame(37.85, $response['bracket6LapTime']);
        $this->assertSame(5.77, $response['bracket6TurnTime']);
        $this->assertSame(7.77, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium07(): void
    {
        $response = Accessory::times(stadiumId: 7, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.10, $response['bracket1LapTime']);
        $this->assertSame(4.86, $response['bracket1TurnTime']);
        $this->assertSame(6.10, $response['bracket1StraightTime']);
        $this->assertSame(37.09, $response['bracket2LapTime']);
        $this->assertSame(5.12, $response['bracket2TurnTime']);
        $this->assertSame(6.28, $response['bracket2StraightTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.50, $response['bracket3TurnTime']);
        $this->assertSame(6.18, $response['bracket3StraightTime']);
        $this->assertSame(37.12, $response['bracket4LapTime']);
        $this->assertSame(5.58, $response['bracket4TurnTime']);
        $this->assertSame(6.23, $response['bracket4StraightTime']);
        $this->assertSame(38.05, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(5.93, $response['bracket5StraightTime']);
        $this->assertSame(37.82, $response['bracket6LapTime']);
        $this->assertSame(5.41, $response['bracket6TurnTime']);
        $this->assertSame(6.14, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium10(): void
    {
        $response = Accessory::times(stadiumId: 10, raceNumber: 1, date: '2024-01-18');
        $this->assertSame(36.30, $response['bracket1LapTime']);
        $this->assertSame(5.07, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame(37.20, $response['bracket2LapTime']);
        $this->assertSame(5.40, $response['bracket2TurnTime']);
        $this->assertSame(6.72, $response['bracket2StraightTime']);
        $this->assertSame(36.87, $response['bracket3LapTime']);
        $this->assertSame(5.43, $response['bracket3TurnTime']);
        $this->assertSame(6.63, $response['bracket3StraightTime']);
        $this->assertSame(37.25, $response['bracket4LapTime']);
        $this->assertSame(5.53, $response['bracket4TurnTime']);
        $this->assertSame(6.67, $response['bracket4StraightTime']);
        $this->assertSame(37.63, $response['bracket5LapTime']);
        $this->assertSame(5.38, $response['bracket5TurnTime']);
        $this->assertSame(6.62, $response['bracket5StraightTime']);
        $this->assertSame(37.07, $response['bracket6LapTime']);
        $this->assertSame(5.50, $response['bracket6TurnTime']);
        $this->assertSame(6.70, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium11(): void
    {
        $response = Accessory::times(stadiumId: 11, raceNumber: 1, date: '2024-01-03');
        $this->assertSame(36.90, $response['bracket1LapTime']);
        $this->assertSame(5.28, $response['bracket1TurnTime']);
        $this->assertSame(7.98, $response['bracket1StraightTime']);
        $this->assertSame(36.67, $response['bracket2LapTime']);
        $this->assertSame(5.33, $response['bracket2TurnTime']);
        $this->assertSame(7.88, $response['bracket2StraightTime']);
        $this->assertSame(37.19, $response['bracket3LapTime']);
        $this->assertSame(5.40, $response['bracket3TurnTime']);
        $this->assertSame(8.03, $response['bracket3StraightTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.77, $response['bracket4TurnTime']);
        $this->assertSame(7.90, $response['bracket4StraightTime']);
        $this->assertSame(37.29, $response['bracket5LapTime']);
        $this->assertSame(5.61, $response['bracket5TurnTime']);
        $this->assertSame(7.85, $response['bracket5StraightTime']);
        $this->assertSame(37.28, $response['bracket6LapTime']);
        $this->assertSame(5.62, $response['bracket6TurnTime']);
        $this->assertSame(7.68, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium13(): void
    {
        $response = Accessory::times(stadiumId: 13, raceNumber: 1, date: '2024-04-23');
        $this->assertSame(38.01, $response['bracket1LapTime']);
        $this->assertSame(11.67, $response['bracket1TurnTime']);
        $this->assertSame(38.10, $response['bracket2LapTime']);
        $this->assertSame(11.89, $response['bracket2TurnTime']);
        $this->assertSame(37.64, $response['bracket3LapTime']);
        $this->assertSame(11.72, $response['bracket3TurnTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.90, $response['bracket4TurnTime']);
        $this->assertSame(38.25, $response['bracket5LapTime']);
        $this->assertSame(11.63, $response['bracket5TurnTime']);
        $this->assertSame(38.02, $response['bracket6LapTime']);
        $this->assertSame(11.74, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testStadium14(): void
    {
        $response = Accessory::times(stadiumId: 14, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.39, $response['bracket1LapTime']);
        $this->assertSame(5.67, $response['bracket1TurnTime']);
        $this->assertSame(6.88, $response['bracket1StraightTime']);
        $this->assertSame(37.17, $response['bracket2LapTime']);
        $this->assertSame(5.86, $response['bracket2TurnTime']);
        $this->assertSame(7.20, $response['bracket2StraightTime']);
        $this->assertSame(37.10, $response['bracket3LapTime']);
        $this->assertSame(5.87, $response['bracket3TurnTime']);
        $this->assertSame(7.07, $response['bracket3StraightTime']);
        $this->assertSame(36.87, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.08, $response['bracket4StraightTime']);
        $this->assertSame(36.97, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(6.91, $response['bracket5StraightTime']);
        $this->assertSame(36.90, $response['bracket6LapTime']);
        $this->assertSame(7.30, $response['bracket6TurnTime']);
        $this->assertSame(6.80, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes16(): void
    {
        $response = Accessory::times(stadiumId: 16, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(5.85, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame(36.63, $response['bracket2LapTime']);
        $this->assertSame(5.37, $response['bracket2TurnTime']);
        $this->assertSame(6.63, $response['bracket2StraightTime']);
        $this->assertSame(36.92, $response['bracket3LapTime']);
        $this->assertSame(5.53, $response['bracket3TurnTime']);
        $this->assertSame(6.77, $response['bracket3StraightTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.63, $response['bracket4TurnTime']);
        $this->assertSame(6.67, $response['bracket4StraightTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(6.63, $response['bracket5StraightTime']);
        $this->assertSame(37.70, $response['bracket6LapTime']);
        $this->assertSame(5.77, $response['bracket6TurnTime']);
        $this->assertSame(6.77, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium17(): void
    {
        $response = Accessory::times(stadiumId: 17, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.52, $response['bracket1LapTime']);
        $this->assertSame(5.73, $response['bracket1TurnTime']);
        $this->assertSame(7.06, $response['bracket1StraightTime']);
        $this->assertSame(36.69, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.11, $response['bracket2StraightTime']);
        $this->assertSame(37.23, $response['bracket3LapTime']);
        $this->assertSame(5.69, $response['bracket3TurnTime']);
        $this->assertSame(7.16, $response['bracket3StraightTime']);
        $this->assertSame(36.54, $response['bracket4LapTime']);
        $this->assertSame(5.59, $response['bracket4TurnTime']);
        $this->assertSame(7.08, $response['bracket4StraightTime']);
        $this->assertSame(37.25, $response['bracket5LapTime']);
        $this->assertSame(5.70, $response['bracket5TurnTime']);
        $this->assertSame(7.25, $response['bracket5StraightTime']);
        $this->assertSame(37.46, $response['bracket6LapTime']);
        $this->assertSame(5.64, $response['bracket6TurnTime']);
        $this->assertSame(7.22, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testStadium18(): void
    {
        $response = Accessory::times(stadiumId: 18, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(11.33, $response['bracket1TurnTime']);
        $this->assertSame(38.21, $response['bracket2LapTime']);
        $this->assertSame(12.10	, $response['bracket2TurnTime']);
        $this->assertSame(37.71, $response['bracket3LapTime']);
        $this->assertSame(11.65	, $response['bracket3TurnTime']);
        $this->assertSame(37.37, $response['bracket4LapTime']);
        $this->assertSame(11.66, $response['bracket4TurnTime']);
        $this->assertSame(37.40, $response['bracket5LapTime']);
        $this->assertSame(11.66, $response['bracket5TurnTime']);
        $this->assertSame(37.40, $response['bracket6LapTime']);
        $this->assertSame(11.63, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testStadium19(): void
    {
        $response = Accessory::times(stadiumId: 19, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.57, $response['bracket1LapTime']);
        $this->assertSame(5.90, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame(37.24, $response['bracket2LapTime']);
        $this->assertSame(6.14, $response['bracket2TurnTime']);
        $this->assertSame(7.45, $response['bracket2StraightTime']);
        $this->assertSame(37.03, $response['bracket3LapTime']);
        $this->assertSame(5.93, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame(37.64, $response['bracket4LapTime']);
        $this->assertSame(5.91, $response['bracket4TurnTime']);
        $this->assertSame(7.37, $response['bracket4StraightTime']);
        $this->assertSame(37.92, $response['bracket5LapTime']);
        $this->assertSame(6.42, $response['bracket5TurnTime']);
        $this->assertSame(7.42, $response['bracket5StraightTime']);
        $this->assertSame(36.98, $response['bracket6LapTime']);
        $this->assertSame(5.58, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes21(): void
    {
        $response = Accessory::times(stadiumId: 21, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(35.62, $response['bracket1LapTime']);
        $this->assertSame(7.66, $response['bracket1TurnTime']);
        $this->assertSame(7.30, $response['bracket1StraightTime']);
        $this->assertSame(36.86, $response['bracket2LapTime']);
        $this->assertSame(8.11, $response['bracket2TurnTime']);
        $this->assertSame(7.42, $response['bracket2StraightTime']);
        $this->assertSame(36.99, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.44, $response['bracket3StraightTime']);
        $this->assertSame(36.89, $response['bracket4LapTime']);
        $this->assertSame(8.22, $response['bracket4TurnTime']);
        $this->assertSame(7.39, $response['bracket4StraightTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(8.21, $response['bracket5TurnTime']);
        $this->assertSame(7.44, $response['bracket5StraightTime']);
        $this->assertSame(36.83, $response['bracket6LapTime']);
        $this->assertSame(7.98, $response['bracket6TurnTime']);
        $this->assertSame(7.51, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes22(): void
    {
        $response = Accessory::times(stadiumId: 22, raceNumber: 1, date: '2024-01-03');
        $this->assertSame(36.49, $response['bracket1LapTime']);
        $this->assertSame(5.53, $response['bracket1TurnTime']);
        $this->assertSame(7.67, $response['bracket1StraightTime']);
        $this->assertSame(36.64, $response['bracket2LapTime']);
        $this->assertSame(5.65, $response['bracket2TurnTime']);
        $this->assertSame(7.53, $response['bracket2StraightTime']);
        $this->assertSame(37.17, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.50, $response['bracket3StraightTime']);
        $this->assertSame(36.83, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.60, $response['bracket4StraightTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(7.77, $response['bracket5StraightTime']);
        $this->assertSame(37.57, $response['bracket6LapTime']);
        $this->assertSame(5.73, $response['bracket6TurnTime']);
        $this->assertSame(7.63, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes23(): void
    {
        $response = Accessory::times(stadiumId: 23, raceNumber: 1, date: '2024-01-02');
        $this->assertSame(36.27, $response['bracket1LapTime']);
        $this->assertSame(5.20, $response['bracket1TurnTime']);
        $this->assertSame(7.80, $response['bracket1StraightTime']);
        $this->assertSame(37.07, $response['bracket2LapTime']);
        $this->assertSame(5.57, $response['bracket2TurnTime']);
        $this->assertSame(7.77, $response['bracket2StraightTime']);
        $this->assertSame(36.43, $response['bracket3LapTime']);
        $this->assertSame(5.23, $response['bracket3TurnTime']);
        $this->assertSame(7.77, $response['bracket3StraightTime']);
        $this->assertSame(37.43, $response['bracket4LapTime']);
        $this->assertSame(5.80, $response['bracket4TurnTime']);
        $this->assertSame(7.80, $response['bracket4StraightTime']);
        $this->assertSame(37.57, $response['bracket5LapTime']);
        $this->assertSame(5.77, $response['bracket5TurnTime']);
        $this->assertSame(7.83, $response['bracket5StraightTime']);
        $this->assertSame(38.60, $response['bracket6LapTime']);
        $this->assertSame(6.23, $response['bracket6TurnTime']);
        $this->assertSame(8.03, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes24(): void
    {
        $response = Accessory::times(stadiumId: 24, raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.93, $response['bracket1LapTime']);
        $this->assertSame(6.12, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame(36.73, $response['bracket2LapTime']);
        $this->assertSame(6.10, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame(36.83, $response['bracket3LapTime']);
        $this->assertSame(6.00, $response['bracket3TurnTime']);
        $this->assertSame(7.33, $response['bracket3StraightTime']);
        $this->assertSame(37.61, $response['bracket4LapTime']);
        $this->assertSame(6.29, $response['bracket4TurnTime']);
        $this->assertSame(7.23, $response['bracket4StraightTime']);
        $this->assertSame(36.87, $response['bracket5LapTime']);
        $this->assertSame(6.07, $response['bracket5TurnTime']);
        $this->assertSame(7.33, $response['bracket5StraightTime']);
        $this->assertSame(36.80, $response['bracket6LapTime']);
        $this->assertSame(6.50, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }
}
