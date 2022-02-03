<?php


/*

BY @AKIL828

*/
$nn2 = ""; //the number from smscodeonline.com

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://smscodeonline.com/virtual-phone/p-".$nn2."");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$h = explode("\n", 'Host: smscodeonline.com
upgrade-insecure-requests: 1
user-agent: Mozilla/5.0 (Linux; Android 10; SM-A715F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36
'."accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9".'
sec-fetch-site: same-origin
sec-fetch-mode: navigate
sec-fetch-user: ?1
sec-fetch-dest: document
accept-language: ar-EG,ar;q=0.9,en-US;q=0.8,en;q=0.7,ru;q=0.6
cookie: _ga=GA1.1.776274322.1631342325
cookie: fpestid=g1zEqEeZqzpdVqmk7jYIjqZuA7xgsmOXxxj9kw9EoJU2sCyzDly_QVLmCWyvcHM9uJ_kOg
cookie: __gads=ID=f8796c3578b7be69-224967a840cb00d7:T=1631814464:RT=1631814464:S=ALNI_MbV1ZSQiZsqVHS2P_7CDEXqdJ8o1Q
cookie: PHPSESSID=b2b0gqoltc1nagfqmi39ipjh3b
cookie: bzumo=238135b49c4127de500f0c9a9c6ea847
cookie: XSRF-TOKEN=eyJpdiI6IktHekpIK2lLV0pHVGtIblVxdXJwY3c9PSIsInZhbHVlIjoiTGVhMU5TUXNxdE4wc3dJdlY5UzB3eDZkUFpNeW1nSm9kWGhLS2lvTVQ0QmVFdnVZZzJsRXRON2c5OHorYzhaTSIsIm1hYyI6IjU1M2VjNWQ0NDRmYjhjMzI1MDBjMmRjZjUxNWMyODZhZmE4ZGVjODk2ZjI3ODgxMjRjYzAzZTcyZjM2ODIzODQifQ%3D%3D
cookie: smscodeonline_session=eyJpdiI6InJVQjRxMitzZXpwblh5ZUwrRUw1SUE9PSIsInZhbHVlIjoiSmJ3Y3IrUFVpTzFMV0xmS0Z0NTRsYWhoS2xFWWppRWIwcVRBYlJ1QnVlK29pOVRiOUljcm9ESzZVcXV4SmhMVSIsIm1hYyI6IjYwN2U2NGJlY2Y4NDhkYTcxNmZlYTkzNjIwZjA3NTMwMDQwNTZhMTlkNmJmYTA3NDg3NGZkZTUyY2VhZDliMjEifQ%3D%3D
cookie: _ga_Z9FGB34BG3=GS1.1.1631814459.2.1.1631815310.0');
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
    
$recy = curl_exec($ch);                                                
$me1 = explode('<div class="card-body" style="padding:1em;">',$recy)[1];
$me1  = explode('<div class="clear"></div>',$me1)[0];
$me2 = explode('<div class="card-body" style="padding:1em;">',$recy)[2];   
$me2  = explode('<div class="clear"></div>',$me2)[0];
$me3 = explode('<div class="card-body" style="padding:1em;">',$recy)[3];
$me3  = explode('<div class="clear"></div>',$me3)[0];



/*

BY @AKIL828

*/





 
