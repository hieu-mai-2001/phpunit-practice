<?php
declare(strict_types=1);

require_once (__DIR__ . '/../../../vendor/autoload.php');
require_once (__DIR__ . '/../../../src/04_practices/Constant.php');

use exp\src\practice\GameStudioService;
use exp\src\practice\MonicaStudio;
use exp\src\practice\PixelStudio;
use PHPUnit\Framework\TestCase;


class GameStudioServiceTest extends TestCase
{
    public function testGetSaleGamesWillCallToStudioListWithCorrectParameters() {
        //TODO: Test function getSaleGames() will call to studios with correct parameter

        //HINT: fake $studio_list
    }

    public function testGetSaleGamesWillReturnCorrectData() {
        //TODO: Test function getSaleGames() will return data that returned from studios

        //HINT: fake $studio_list returned data & check it
    }

    public function testNotifyNewCampaignWillUpdateStudioList() {
        //TODO: Test function notifyNewCampaign() will call to function updateStudioList()
    }

    public function testUpdateStudioListWillThrowError() {
        //TODO: Test function updateStudioList() will throw error as default
    }
}
