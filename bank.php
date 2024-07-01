<?php
$usersData = [
      'user1' => ['name' => 'moses', 'profile' => 'user1.jpg', 'walletAddress' => 'bitcoincash:qxr2269er50p', 'credit' => '89438', 'debit' => '7865'],
      'user2' => ['name' => 'unity',  'profile' => 'user2.jpg',  'walletAddress' => 'bitcoincash:mp52469er67p', 'credit' => '63720', 'debit' => '987'],
      'user3' => ['name' => 'favour',  'profile' => 'user3.jpg', 'walletAddress' => 'bitcoincash:qxr3459er56p', 'credit' => '56978', 'debit' => '9876'],
      'user4' => ['name' => 'ruth',  'profile' => 'user4.jpg', 'walletAddress' => 'bitcoincash:vxp7569er50p', 'credit' => '12384', 'debit' => '7896'],
      'user5' =>  ['name' => 'pearl', 'profile' => 'user5.jpg',  'walletAddress' => 'bitcoincash:xrp3469er50p', 'credit' => '24968', 'debit' => '987']
];

// var_dump($usersData['user1']['name']);

foreach ($usersData as $userdata) {
      $usersData['user1']['balance'] =
            $usersData['user1']['credit'] -
            $usersData['user1']['debit'];
      $usersData['user2']['balance'] =
            $usersData['user2']['credit'] -
            $usersData['user2']['debit'];
      $usersData['user3']['balance'] =
            $usersData['user3']['credit'] -
            $usersData['user3']['debit'];
      $usersData['user4']['balance'] =
            $usersData['user4']['credit'] -
            $usersData['user4']['debit'];
      $usersData['user5']['balance'] =
            $usersData['user5']['credit'] -
            $usersData['user5']['debit'];
}
unset($userdata);
// print_r($usersData);




// $printuser1 = print_r($users_data['user1']);
// exit;
// $printuser2 = print_r($users_data['user2']);
// exit;
// $printuser3 = print_r($users_data['user3']);
// exit;
// $printuser4 = print_r($users_data['user4']);
// exit;
// $printuser5 = print_r($users_data['user5']);
// exit;
// echo $printuser5;


$allUsers = $usersData;
$user1 = $usersData['user1'];
$user2 = $usersData['user2'];
$user3 = $usersData['user3'];
$user4 = $usersData['user4'];
$user5 = $usersData['user5'];

$enter_user = readline("please enter user:\n");
switch ($enter_user) {
      case 'user1';
            print_r($user1);
            // print_r($usersData['user1']['balance']);
            break;
      case 'user2';
            print_r($user2);
            break;
      case 'user3';
            print_r($user3);
            break;
      case 'user4';
            print_r($user4);
            break;
      case 'user5';
            print_r($user5);
            break;
      case 'all users';
            print_r($allUsers);
            break;
      case 'all user';
            print_r($allUsers);
            break;
      default:
            echo "invalid user";
}
