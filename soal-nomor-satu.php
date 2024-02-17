<?php
$list_token = [];
$list_token_verify = [];

function generateToken($user = "budi", $addVerify = false) {
    global $list_token, $list_token_verify;
    
    if( !empty($list_token[$user]) 
        && count($list_token[$user]) == 10 ) 
    {
        array_shift($list_token[$user]);
    }
    $random = uniqid();
    $list_token[$user][] = $random;
    if($addVerify) {
        $list_token_verify[$user][] = $random;
    }
}

function verifyToken($user, $token) {
    global $list_token, $list_token_verify;
    if( in_array($token, $list_token[$user]) ) {
        //ketemu
        $list_token[$user] = array_diff($list_token[$user], array($token));
        return true;
    }
    return false;
}

generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti");
generateToken();
generateToken("tuti", true);
generateToken();
generateToken("dian", true);

echo "List Token Awal\n";
var_dump($list_token);

echo "\nList Token Verified\n";
var_dump($list_token_verify);

foreach($list_token_verify as $k => $v) {
    foreach($v as $key => $value) {
        $result = verifyToken($k, $value);
        if($result) {
            //ketemu
            echo "Token User " . $k . "(" . $value . ") berhasil ditemukan\n";
        } else {
            echo "Token User " . $k . "(" . $value . ") gagal ditemukan\n";
        }
    }
}

echo "\nList Token Akhir\n";
var_dump($list_token);
?>

