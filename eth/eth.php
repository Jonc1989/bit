<?php 

	ini_set('precision',20);

	require_once __DIR__ . '/vendor/autoload.php';

	use Formaldehid\Web3;
	use Formaldehid\Web3\Providers\HttpProvider;
	
	$web3 = new Web3( new HttpProvider( 'https://mainnet.infura.io/metamask' ) );
	
	$wei = $web3->eth->getBalance("0x45e044ED9Bf130EafafA8095115Eda69FC3b0D20");
	
	$eth =  bcdiv($wei,1000000000000000000,18) ;
	
	echo  $eth ;
	
	$url = "https://api.exmo.com/v1/ticker/";
	$json = file_get_contents($url);
	$json_data = json_decode($json, true);
	
	$offset = 1*60*60;
	
	$file = 'ico.txt';
	file_put_contents( $file, json_encode( array( 'eth_eur' => $json_data['ETH_EUR']['low'], 'updated' => (time() + $offset), 'balance_eth' => $eth ) ) );
	