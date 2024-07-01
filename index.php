<?php
header("Access-Control-Allow-Origin:https://wiz2020.serv00.net");
$usersData = [
    ['name' => 'moses', 'profile' => 'user1.jpg', 'walletAddress' => 'bitcoincash:qxr2269er50p', 'credit' => '89438', 'debit' => '7865'],
    ['name' => 'unity',  'profile' => 'user2.jpg',  'walletAddress' => 'bitcoincash:mp52469er67p', 'credit' => '63720', 'debit' => '987'],
    ['name' => 'favour',  'profile' => 'user3.jpg', 'walletAddress' => 'bitcoincash:qxr3459er56p', 'credit' => '56978', 'debit' => '9876'],
    ['name' => 'ruth',  'profile' => 'user4.jpg', 'walletAddress' => 'bitcoincash:vxp7569er50p', 'credit' => '12384', 'debit' => '7896'],
    ['name' => 'pearl', 'profile' => 'user5.jpg',  'walletAddress' => 'bitcoincash:xrp3469er50p', 'credit' => '24968', 'debit' => '987']
];

foreach ($usersData as $userdata) {
    $usersData[0]['balance'] =
        $usersData[0]['credit'] -
        $usersData[0]['debit'];
    $usersData[1]['balance'] =
        $usersData[1]['credit'] -
        $usersData[1]['debit'];
    $usersData[2]['balance'] =
        $usersData[2]['credit'] -
        $usersData[2]['debit'];
    $usersData[3]['balance'] =
        $usersData[3]['credit'] -
        $usersData[3]['debit'];
    $usersData[4]['balance'] =
        $usersData[4]['credit'] -
        $usersData[4]['debit'];
}
echo json_encode($usersData);
