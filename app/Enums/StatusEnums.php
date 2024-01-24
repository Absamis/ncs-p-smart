<?php
namespace App\Enums;
class StatusEnums{
    public static $userTeamRole = "team";
    public static $userAdminRole = "admin";

    public static $accountCode = [
        "unverified" => 0,
        "verified" => 1
    ];

    public static $projectStatus = [
        "pending" => 0,
        "started" => 1,
        "canceled" => -1,
        "approval" => 11,
        "completed" => 2
    ];
}
