<?php
include_once 'lib/savant/Savant3.php';
include_once 'lib/CurlManager.php';
include_once 'lib/UIHelper.php';
include_once 'lib/CSSManager.php';
include_once 'lib/MenuManager.php';
include_once 'lib/StateHolder.php';
include_once 'lib/Layout.php';
include_once 'lib/UIHelper.php';
include_once 'lib/Utils.php';
include_once 'lib/Validator.php';
include_once 'lib/Config.php';
include_once 'lib/StaticList.php';
include_once 'lib/Misc.php';
include_once 'lib/SmsHandler.php';
include_once 'lib/FaxHandler.php';
include_once 'lib/EmailHandler.php';
include_once 'lib/Actions.php';
include_once 'lib/CustomGrid.php';
include_once 'lib/Widgets.php';
include_once 'lib/WebPage.php';
include_once 'lib/FileManager.php';
include_once 'lib/Templates.php';
include_once 'lib/Forms.php';
include_once 'lib/Security.php';
include_once 'lib/Password.php';
include_once 'lib/CardHandler.php';
include_once 'lib/FindLocation.php';

/* * ********************MODEL************************************** */
include_once 'model/BaseModel.php';
include_once 'model/KeyVal.php';
include_once 'model/StaticModel.php';
include_once 'model/dbmodel.php';
include_once 'model/Pair.php';
//-------------------------//
include_once 'model/usermodel.php';
include_once 'model/user_log_history.php';
include_once 'model/user_role.php';
include_once 'model/events.php';
include_once 'model/service.php';
include_once 'model/devices.php';
include_once 'model/device_assign.php';
include_once 'model/datapush.php';
include_once 'model/alert_model.php';
include_once 'model/setup.php';

//--- ADDED BY KOUSHIK ---
include_once 'model/timeslot.php';
include_once 'model/department_model.php';
include_once 'model/location_model.php';
include_once 'model/attendanceModel.php';
include_once 'model/settingmodel.php';
include_once 'model/DeviceModel.php';



/*include_once 'aws/aws-autoloader.php';
use Aws\Sns\SnsClient; 
use Aws\Exception\AwsException;

$sns = new Aws\Sns\SnsClient([
    'version' => '2010-03-31',
    'region' => 'us-east-1',
    'credentials' => [
                    'key'    => 'AKIAUELJWMPPOO5ACHER',
                    'secret' => '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',
                ],
]);
$token = SetupModel::ReadSingle('1');
define("TOPIC",'arn:aws:sns:us-east-1:284226380766:Eegrab_ihub'); 
define('LOCATION',$token->LOCATION_ID);
define('TOKEN',$token->TOKEN);
*/
ini_set('date.timezone', 'Asia/Calcutta');
error_reporting(1);
session_start();
?>