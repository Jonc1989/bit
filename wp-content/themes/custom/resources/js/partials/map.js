function initMap() 
{
	var map = new google.maps.Map(document.getElementById('map'), 
	{
		zoom: 8,
		center: {lat: 56.70865092202358, lng: 30.12370633673072},
		mapTypeId: 'hybrid'
	});
	
	var mnog1coor = [
		{lat: 56.5814228, lng: 28.1304932},
		{lat: 56.5556984, lng: 28.1236267},
		{lat: 56.5398011, lng: 28.1002808},
		{lat: 56.5246545,  lng: 28.0865479},
		{lat: 56.504955, lng: 28.1030273},
		{lat: 56.5117752, lng: 28.3145142},
		{lat: 56.5549415, lng: 28.2980347},
		{lat: 56.5942784, lng: 28.3049011},
		{lat: 56.6275315, lng: 28.3049011},
		{lat: 56.6841454, lng: 28.318634},
		{lat: 56.7241013, lng: 28.318634},
		{lat: 56.7617567, lng: 28.3131409},
		{lat: 56.7707884, lng: 28.2472229},
		{lat: 56.761004, lng: 28.2115173},
		{lat: 56.7331421, lng: 28.1840515},
		{lat: 56.70149, lng: 28.1854248},
		{lat: 56.6826368, lng: 28.157959},
		{lat: 56.644147, lng: 28.1291199},
		{lng: 28.1277466, lat: 56.6131758},
		{lat: 56.5814228, lng: 28.1304932}
	];

	var mnog2coor = [
		{lng: 27.9176331, lat: 56.7527229},
		{lng: 27.9341357, lat: 56.7252255},
		{lng: 27.9808044, lat: 56.6977201},
		{lng: 28.0549622, lat: 56.7045056},
		{lng: 28.1332397, lat: 56.7248548},
		{lng: 28.1703186, lat: 56.7617567},
		{lng: 28.1730664, lat: 56.7786856},
		{lng: 28.1648254, lat: 56.7956143},
		{lng: 28.1318665, lat: 56.8136592},
		{lng: 28.0700684, lat: 56.8151626},
		{lng: 27.9808044, lat: 56.7963664},
		{lng: 27.9396057, lat: 56.7760559},
		{lng: 27.9244961, lat: 56.7658952},
		{lng: 27.9176331, lat: 56.7527229}
	];
	
	var mnog3coor = [
		{lng: 28.4559631, lat: 56.9374829},
		{lng: 28.4230042, lat: 56.9397304},
		{lng: 28.3996582, lat: 56.9307394},
		{lng: 28.3639526, lat: 56.9194977},
		{lng: 28.3392334, lat: 56.9232453},
		{lng: 28.3282471, lat: 56.9419778},
		{lng: 28.3241272, lat: 56.9756727},
		{lng: 28.3227539, lat: 57.0198043},
		{lng: 28.3062744, lat: 57.0646303},
		{lng: 28.2293701, lat: 57.072096},
		{lng: 28.1744385, lat: 57.0646303},
		{lng: 28.1648254, lat: 57.0078416},
		{lng: 28.1689453, lat: 56.967439},
		{lng: 28.1181335, lat: 56.9636958},
		{lng: 28.0673218, lat: 56.999615},
		{lng: 28.0096436, lat: 56.9494682},
		{lng: 28.0192566, lat: 56.9030036},
		{lng: 28.0755615, lat: 56.8804999},
		{lng: 28.1263733, lat: 56.8737462},
		{lng: 28.2980347, lat: 56.8827509},
		{lng: 28.3364868, lat: 56.8804999},
		{lng: 28.3433533, lat: 56.8609858},
		{lng: 28.4065247, lat: 56.8444658},
		{lng: 28.4614563, lat: 56.8429636},
		{lng: 28.4971619, lat: 56.8609858},
		{lng: 28.5177612, lat: 56.8970039},
		{lng: 28.5040283, lat: 56.9179985},
		{lng: 28.4559631, lat: 56.9374829}
	];
	
	var mnog4coor = [
		{lng: 28.1905746, lat: 56.4040241},
		{lng: 28.1813049, lat: 56.3983245},
		{lng: 28.1740952, lat: 56.3897736},
		{lng: 28.168602, lat: 56.3838818},
		{lng: 28.1689453, lat: 56.3739967},
		{lng: 28.1795883, lat: 56.3701941},
		{lng: 28.1970978, lat: 56.3681025},
		{lng: 28.2080841, lat: 56.366201},
		{lng: 28.2152939, lat: 56.3629681},
		{lng: 28.221817, lat: 56.3612565},
		{lng: 28.2328033, lat: 56.3597349},
		{lng: 28.2434464, lat: 56.3597349},
		{lng: 28.2523727, lat: 56.3625877},
		{lng: 28.2623291, lat: 56.3669616},
		{lng: 28.2818985, lat: 56.3688631},
		{lng: 28.3055878, lat: 56.3667714},
		{lng: 28.3169174, lat: 56.3681025},
		{lng: 28.3244705, lat: 56.3736165},
		{lng: 28.3258438, lat: 56.3854023},
		{lng: 28.319664, lat: 56.3903437},
		{lng: 28.2987213, lat: 56.3935742},
		{lng: 28.2849884, lat: 56.3911038},
		{lng: 28.2674789, lat: 56.3930042},
		{lng: 28.2582092, lat: 56.3985145},
		{lng: 28.2520294, lat: 56.4057338},
		{lng: 28.2355499, lat: 56.409343},
		{lng: 28.220787, lat: 56.4106726},
		{lng: 28.2053375, lat: 56.409343},
		{lng: 28.1905746, lat: 56.4040241}
	];

	var mnog5coor = [
	
		{lng: 28.7017637, lat: 56.1007442},
		{lng: 28.7017754, lat: 56.0773637},
		{lng: 28.7347283, lat: 56.0463155},
		{lng: 28.8329707, lat: 56.0244857},
		{lng: 28.939383, lat: 56.0194561},
		{lng: 29.030019, lat: 56.0194897},
		{lng: 29.123435, lat: 56.0332717},
		{lng: 29.1906812, lat: 56.0654857},
		{lng: 29.2415581, lat: 56.106872},
		{lng: 29.2484259, lat: 56.2032594},
		{lng: 29.2203196, lat: 56.2627748},
		{lng: 29.1756294, lat: 56.3100732},
		{lng: 29.0802169, lat: 56.3341021},
		{lng: 28.9737214, lat: 56.3458654},
		{lng: 28.8363685, lat: 56.3451061},
		{lng: 28.7621534, lat: 56.3241623},
		{lng: 28.7292341, lat: 56.2894967},
		{lng: 28.6715461, lat: 56.2139543},
		{lng: 28.6756668, lat: 56.1497409},
		{lng: 28.7017637, lat: 56.1007442}
	];
	
	var plech1coor = [
		{lng: 28.5603333, lat: 56.3134901},
		{lng: 28.5605049, lat: 56.3147278},
		{lng: 28.5714912, lat: 56.3152038},
		{lng: 28.5726929, lat: 56.3159655},
		{lng: 28.5840225, lat: 56.3162511},
		{lng: 28.6030769, lat: 56.3140613},
		{lng: 28.6077118, lat: 56.3138709},
		{lng: 28.6145782, lat: 56.3160607},
		{lng: 28.6277962, lat: 56.3197735},
		{lng: 28.633461, lat: 56.3218678},
		{lng: 28.6360359, lat: 56.3224389},
		{lng: 28.643589, lat: 56.3232004},
		{lng: 28.6561203, lat: 56.3291016},
		{lng: 28.6617851, lat: 56.3300533},
		{lng: 28.6696815, lat: 56.3296726},
		{lng: 28.6763763, lat: 56.3302437},
		{lng: 28.6863756, lat: 56.3309336}
	];
	
	var plech2coor = [
		{lng: 28.6863756, lat: 56.3309336},
		{lng: 28.6860108, lat: 56.3286971},
		{lng: 28.6881566, lat: 56.3288399},
		{lng: 28.6887574, lat: 56.3274717},
		{lng: 28.6858177, lat: 56.3275669},
		{lng: 28.6858606, lat: 56.32859}
	];
	
	var yral1coor = [
		{lng: 28.6863112, lat: 56.3305292},
		{lng: 28.6862469, lat: 56.3302199}
	];
	
	var yral2coor = [
		{lng: 28.686204, lat: 56.3298868},
		{lng: 28.6861396, lat: 56.3294704}
	];
	
	var plech3coor = [
		{lng: 28.4908962, lat: 56.3043486},
		{lng: 28.4908104, lat: 56.3040629},
		{lng: 28.4899521, lat: 56.3033487},
		{lng: 28.4913254, lat: 56.3004915},
		{lng: 28.4913254, lat: 56.2962052},
		{lng: 28.4967327, lat: 56.2943953},
		{lng: 28.5011959, lat: 56.295205},
		{lng: 28.5037708, lat: 56.2946335},
		{lng: 28.5078907, lat: 56.2960623},
		{lng: 28.5088348, lat: 56.2970149},
		{lng: 28.5094357, lat: 56.2983484},
		{lng: 28.5144997, lat: 56.3016344},
		{lng: 28.5159588, lat: 56.3020153},
		{lng: 28.5187912, lat: 56.3019677},
		{lng: 28.5258293, lat: 56.30592},
		{lng: 28.5283184, lat: 56.3067294},
		{lng: 28.5344124, lat: 56.3079198},
		{lng: 28.5394764, lat: 56.3096338},
		{lng: 28.5414505, lat: 56.310824},
		{lng: 28.5434246, lat: 56.3129664},
		{lng: 28.5448837, lat: 56.3135853},
		{lng: 28.5488319, lat: 56.3142041},
		{lng: 28.5551834, lat: 56.3146802},
		{lng: 28.5590458, lat: 56.3147754},
		{lng: 28.5600758, lat: 56.313014}
	];
	
	var vsclad1coor = [
		{lng: 28.6860537, lat: 56.3286436},
		{lng: 28.6860644, lat: 56.3285603},
		{lng: 28.6868691, lat: 56.3285841},
		{lng: 28.6868477, lat: 56.3286793},
		{lng: 28.6860537, lat: 56.3286436}
	];
	
	var zlesa1coor = [
		{lng: 28.6869228, lat: 56.3278881},
		{lng: 28.6869228, lat: 56.3277156},
		{lng: 28.6870623, lat: 56.3277097},
		{lng: 28.687073, lat: 56.3278881},
		{lng: 28.6869228, lat: 56.3278881}
	];
	
	var zlesa2coor = [
		{lng: 28.687191, lat: 56.3278822},
		{lng: 28.687191, lat: 56.3277216},
		{lng: 28.6873519, lat: 56.3277156},
		{lng: 28.6873519, lat: 56.3278822},
		{lng: 28.687191, lat: 56.3278822}
	];
	
	var psclad1coor = [
		{lng: 28.6870623, lat: 56.3308266},
		{lng: 28.6871374, lat: 56.3306719},
		{lng: 28.6883605, lat: 56.3308028},
		{lng: 28.6882961, lat: 56.3309455},
		{lng: 28.6870623, lat: 56.3308266}
	];
	
	var psclad2coor = [
		{lng: 28.6886072, lat: 56.3309634},
		{lng: 28.6886609, lat: 56.3308385},
		{lng: 28.6895835, lat: 56.3309634},
		{lng: 28.6895299, lat: 56.3310883},
		{lng: 28.6886072, lat: 56.3309634}
	];
	
	var psclad3coor = [
		{lng: 28.6897659, lat: 56.3311121},
		{lng: 28.6898196, lat: 56.3309812},
		{lng: 28.6907208, lat: 56.3310942},
		{lng: 28.6906779, lat: 56.331237},
		{lng: 28.6897659, lat: 56.3311121}
	];
	
	var ggran1coor = [
		{lng: 28.2801819, lat: 56.0812324},
		{lng: 28.2966614, lat: 56.064753},
		{lng: 28.3213806, lat: 56.0574692},
		{lng: 28.3351135, lat: 56.0628363},
		{lng: 28.3454132, lat: 56.0632197},
		{lng: 28.3618927, lat: 56.0593861},
		{lng: 28.374939, lat: 56.0593861},
		{lng: 28.3838654, lat: 56.0678195},
		{lng: 28.3879852, lat: 56.0774006},
		{lng: 28.3927917, lat: 56.0789334},
		{lng: 28.3859253, lat: 56.0839144},
		{lng: 28.3708191, lat: 56.0980877},
		{lng: 28.3769989, lat: 56.1034493},
		{lng: 28.374939, lat: 56.1084272},
		{lng: 28.3797455, lat: 56.1130215},
		{lng: 28.3975983, lat: 56.1114901},
		{lng: 28.4051514, lat: 56.1019175},
		{lng: 28.4209442, lat: 56.1000027},
		{lng: 28.4250641, lat: 56.0927255},
		{lng: 28.417511, lat: 56.089661},
		{lng: 28.4257507, lat: 56.0885118},
		{lng: 28.4580231, lat: 56.1000027},
		{lng: 28.4799957, lat: 56.1053639},
		{lng: 28.5060883, lat: 56.1061297},
		{lng: 28.5232544, lat: 56.1068956},
		{lng: 28.5301208, lat: 56.1084272},
		{lng: 28.5328674, lat: 56.1137872},
		{lng: 28.5493469, lat: 56.1153185},
		{lng: 28.6070251, lat: 56.1019175},
		{lng: 28.6166382, lat: 56.1003856},
		{lng: 28.6379242, lat: 56.1034493},
		{lng: 28.653717, lat: 56.1034493},
		{lng: 28.6633301, lat: 56.1007686},
		{lng: 28.6791229, lat: 56.1026834},
		{lng: 28.6804962, lat: 56.0961727},
		{lng: 28.66539, lat: 56.089661},
		{lng: 28.6592102, lat: 56.082765},
		{lng: 28.6516571, lat: 56.0862132},
		{lng: 28.6447906, lat: 56.0850638},
		{lng: 28.6372375, lat: 56.0754846},
		{lng: 28.6427307, lat: 56.0693526},
		{lng: 28.6578369, lat: 56.0590027},
		{lng: 28.6550903, lat: 56.0474996},
		{lng: 28.6756897, lat: 56.037911},
		{lng: 28.6907959, lat: 56.0317731}
	];
	
	var ggran2coor = [
		{lng: 27.6086426, lat: 55.788929},
		{lng: 27.6745605, lat: 55.9184299},
		{lng: 27.8063965, lat: 55.998381},
		{lng: 27.8503418, lat: 56.053635},
		{lng: 28.125, lat: 56.1639061},
		{lng: 28.2458496, lat: 56.2738614},
		{lng: 28.1905746, lat: 56.4040241},
		{lng: 28.1236267, lat: 56.5556984},
		{lng: 27.9176331, lat: 56.7527229},
		{lng: 27.9808044, lat: 56.7963664},
		{lng: 27.8393555, lat: 56.8789992},
		{lng: 27.6635742, lat: 56.8429636},
		{lng: 27.7514648, lat: 57.0287739},
		{lng: 27.8723145, lat: 57.2790428}
	];
	
	var mnog1 = new google.maps.Polygon({
		paths: mnog1coor,
		strokeColor: '#afb42b',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#afb42b',
		fillOpacity: 0.35
	});
	
	var mnog2 = new google.maps.Polygon({
		paths: mnog2coor,
		strokeColor: '#afb42b',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#afb42b',
		fillOpacity: 0.35
	});
	
	var mnog3 = new google.maps.Polygon({
		paths: mnog3coor,
		strokeColor: '#afb42b',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#afb42b',
		fillOpacity: 0.35
	});
	
	var mnog4 = new google.maps.Polygon({
		paths: mnog4coor,
		strokeColor: '#afb42b',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#afb42b',
		fillOpacity: 0.35
	});
	
	var mnog5 = new google.maps.Polygon({
		paths: mnog5coor,
		strokeColor: '#afb42b',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#afb42b',
		fillOpacity: 0.35
	});
	
	var myLatLng1 = new google.maps.LatLng(56.327222, 28.6763891000001);
	var marker1 = new google.maps.Marker({
		position: myLatLng1,
		map: map,
		icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
		id : 0
	});
	
	var myLatLng2 = new google.maps.LatLng(56.3125, 28.5599999999999);
	var marker2 = new google.maps.Marker({
		position: myLatLng2,
		map: map,
		icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
		id : 0
	});
	
	var myLatLng3 = new google.maps.LatLng(56.3040629, 28.4908104);
	var marker3 = new google.maps.Marker({
		position: myLatLng3,
		map: map,
		icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
		id : 0
	});
	
	var myLatLng4 = new google.maps.LatLng(56.4199784, 27.6306152);
	var marker4 = new google.maps.Marker({
		position: myLatLng4,
		map: map,
		icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
		id : 0
	});
	
	var myLatLng5 = new google.maps.LatLng(56.0459656, 28.4628296);
	var marker5 = new google.maps.Marker({
		position: myLatLng5,
		map: map,
		icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
		id : 0
	});
	
	var plech1 = new google.maps.Polyline({
	  path: plech1coor,
	  strokeColor: '#0288d1',
	  strokeOpacity: 1.0,
	  strokeWeight: 5
	});
	
	var plech2 = new google.maps.Polyline({
	  path: plech2coor,
	  strokeColor: '#7cb342',
	  strokeOpacity: 1.0,
	  strokeWeight: 5
	});
	
	var _yral1 = new google.maps.Polyline({
	  path: yral1coor,
	  strokeColor: '#a52714',
	  strokeOpacity: 1.0,
	  strokeWeight: 8
	});
	
	var _yral2 = new google.maps.Polyline({
	  path: yral2coor,
	  strokeColor: '#a52714',
	  strokeOpacity: 1.0,
	  strokeWeight: 8
	});
	
	var plech3 = new google.maps.Polyline({
	  path: plech3coor,
	  strokeColor: '#0f9d58',
	  strokeOpacity: 1.0,
	  strokeWeight: 5
	});
	
	var vsclad1 = new google.maps.Polygon({
		paths: vsclad1coor,
		strokeColor: '#f9a825',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#f9a825',
		fillOpacity: 1
	});
	
	var zlesa1 = new google.maps.Polygon({
		paths: zlesa1coor,
		strokeColor: '#1a2388',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#1a2388',
		fillOpacity: 1
	});
	
	var zlesa2 = new google.maps.Polygon({
		paths: zlesa2coor,
		strokeColor: '#1a2388',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#1a2388',
		fillOpacity: 1
	});
	
	var psclad1 = new google.maps.Polygon({
		paths: psclad1coor,
		strokeColor: '#fff000',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#fff000',
		fillOpacity: 0.35
	});
	
	var psclad2 = new google.maps.Polygon({
		paths: psclad2coor,
		strokeColor: '#fff000',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#fff000',
		fillOpacity: 0.35
	});
	
	var psclad3 = new google.maps.Polygon({
		paths: psclad3coor,
		strokeColor: '#fff000',
		strokeOpacity: 1,
		strokeWeight: 2,
		fillColor: '#fff000',
		fillOpacity: 0.35
	});
	
	var ggran1 = new google.maps.Polyline({
	  path: ggran1coor,
	  strokeColor: '#ff5252',
	  strokeOpacity: 1.0,
	  strokeWeight: 5
	});
	
	var ggran2 = new google.maps.Polyline({
	  path: ggran2coor,
	  strokeColor: '#ff5252',
	  strokeOpacity: 1.0,
	  strokeWeight: 5
	});

	mnog1.setMap(map);
	mnog2.setMap(map);
	mnog3.setMap(map);
	mnog4.setMap(map);
	mnog5.setMap(map);
	plech1.setMap(map);
	plech2.setMap(map);
	_yral1.setMap(map);
	_yral2.setMap(map);
	plech3.setMap(map);
	vsclad1.setMap(map);
	zlesa1.setMap(map);
	zlesa2.setMap(map);
	psclad1.setMap(map);
	psclad2.setMap(map);
	psclad3.setMap(map);
	ggran1.setMap(map);
	ggran2.setMap(map);
	
	var latviaString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['latvia'] +'</h3>'+
		'</div>';
		
	var belorusiaString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['belorusia'] +'</h3>'+
		'</div>';
		
	var ggranString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['ggran'] +'</h3>'+
		'</div>';
		
	var zelenString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['zelen'] +'</h3>'+
		'</div>';
	
	var berezkaString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['berezka'] +'</h3>'+
		'</div>';
		
	var kyznetsovkaString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['kyznetsovka'] +'</h3>'+
		'</div>';
		
	var jdsebejString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['jdsebej'] +'</h3>'+
		'</div>';
		
	var plecho1String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['plech1ttl'] +'</h3>'+
			'<div id="bodyContent">'+
			'<p>'+ lang['plech1desc'] +'</p>' +
			'</div>';
		'</div>';
		
	var lesroadString =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['lesroad'] +'</h3>'+
		'</div>';	
	
	var yral1String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['yral1'] +'</h3>'+
		'</div>';	
	
	var yral2String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['yral2'] +'</h3>'+
		'</div>';	
		
	var plecho3String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['plech3ttl'] +'</h3>'+
			'<div id="bodyContent">'+
			'<p>'+ lang['plech3desc'] +'</p>' +
			'</div>';
		'</div>';	
		
	var psclad1String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['psclad1ttl'] +'</h3>'+
			'<div id="bodyContent">'+
			'<p>'+ lang['psclad1desc'] +'</p>' +
			'</div>';
		'</div>';	
		
	var psclad2String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['psclad2ttl'] +'</h3>'+
			'<div id="bodyContent">'+
			'<p>'+ lang['psclad2desc'] +'</p>' +
			'</div>';
		'</div>';
		
	var psclad3String =
		'<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h3 id="firstHeading" class="firstHeading">'+ lang['psclad3ttl'] +'</h3>'+
			'<div id="bodyContent">'+
			'<p>'+ lang['psclad3desc'] +'</p>' +
			'</div>';
		'</div>';	

	var latvia = new google.maps.InfoWindow({
		content: latviaString
	});

	var belorusia = new google.maps.InfoWindow({
		content: belorusiaString
	});
	
	var ggran = new google.maps.InfoWindow({
		content: ggranString
	});
	
	var zelen = new google.maps.InfoWindow({
		content: zelenString
	});
	
	var berezka = new google.maps.InfoWindow({
		content: berezkaString
	});
	
	var kyznetsovka = new google.maps.InfoWindow({
		content: kyznetsovkaString
	});
	
	var jdsebej = new google.maps.InfoWindow({
		content: jdsebejString
	});
	
	var plecho1 = new google.maps.InfoWindow({
		content: plecho1String
	});
	
	var lesroad = new google.maps.InfoWindow({
		content: lesroadString
	});
	
	var yral1 = new google.maps.InfoWindow({
		content: yral1String
	});
	
	var yral2 = new google.maps.InfoWindow({
		content: yral2String
	});
	
	var plecho3 = new google.maps.InfoWindow({
		content: plecho3String
	});
	
	var pscld1 = new google.maps.InfoWindow({
		content: psclad1String
	});
	
	var pscld2 = new google.maps.InfoWindow({
		content: psclad2String
	});
	
	var pscld3 = new google.maps.InfoWindow({
		content: psclad3String
	});
	
	marker1.addListener('click', function() 
	{
		berezka.open(map, marker1);
	});
	
	marker2.addListener('click', function() 
	{
		kyznetsovka.open(map, marker2);
	});
	
	marker3.addListener('click', function() 
	{
		jdsebej.open(map, marker3);
	});
	
	marker4.addListener('click', function() 
	{
		latvia.open(map, marker4);
	});
	
	marker5.addListener('click', function() 
	{
		belorusia.open(map, marker5);
	});
	
	ggran1.addListener('click', function(event) 
	{
        ggran.setPosition(event.latLng);
        ggran.open(map);
	});
	
	ggran2.addListener('click', function(event) 
	{
		ggran.setPosition(event.latLng);
        ggran.open(map);
	});
	
	mnog1.addListener('click', function(event) 
	{
		zelen.setPosition(event.latLng);
        zelen.open(map);
	});
	
	mnog2.addListener('click', function(event) 
	{
		zelen.setPosition(event.latLng);
        zelen.open(map);
	});
	
	mnog3.addListener('click', function(event) 
	{
		zelen.setPosition(event.latLng);
        zelen.open(map);
	});
	
	mnog4.addListener('click', function(event) 
	{
		zelen.setPosition(event.latLng);
        zelen.open(map);
	});
	
	mnog5.addListener('click', function(event) 
	{
		zelen.setPosition(event.latLng);
        zelen.open(map);
	});
	
	plech1.addListener('click', function(event) 
	{
		plecho1.setPosition(event.latLng);
        plecho1.open(map);
	});
	
	plech2.addListener('click', function(event) 
	{
		lesroad.setPosition(event.latLng);
        lesroad.open(map);
	});
	
	_yral1.addListener('click', function(event) 
	{
		yral1.setPosition(event.latLng);
        yral1.open(map);
	});
	
	_yral2.addListener('click', function(event) 
	{
		yral2.setPosition(event.latLng);
        yral2.open(map);
	});
	
	plech3.addListener('click', function(event) 
	{
		plecho3.setPosition(event.latLng);
        plecho3.open(map);
	});
	
	psclad1.addListener('click', function(event) 
	{
		pscld1.setPosition(event.latLng);
        pscld1.open(map);
	});
	
	psclad2.addListener('click', function(event) 
	{
		pscld2.setPosition(event.latLng);
        pscld2.open(map);
	});
	
	psclad3.addListener('click', function(event) 
	{
		pscld3.setPosition(event.latLng);
        pscld3.open(map);
	});
	
}