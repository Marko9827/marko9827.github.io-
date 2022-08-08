<?php


function error_page($status)
{


    $codes = array(
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404 Not Found', 'was not found on this server.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
    );



    $title = $codes[$status][0];
    $message = $codes[$status][1];


    $actual_link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $actual_link2  =  $_SERVER['REQUEST_URI'];


    #$message = substr($message, 0, +3);
    #header("HTTP/1.1 200 OK");
    #   header("robots: noindex, nofollow");

    die('
<!DOCTYPE html>
<html lang=en>
  <meta charset=utf-8>
  <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width">
  <title>' . $title . ' - ' . $actual_link2 . '</title>
  <link href="/favicon.svg" rel="icon" type="image/x-icon">
    <meta name="theme-color" content="#607d8b" />
  <style type="text/css"> * { color: #607D8B; /* pointer-events:none;  */ user-select:none; margin: 0; padding: 0 } html, code { font: 15px/22px arial, sans-serif } html { background: #fff; color: #222; padding: 15px } body { margin: 7% auto 0; max-width: 390px; min-height: 180px; padding: 30px 0 15px } *>body { padding-right: 205px } p { margin: 11px 0 22px; overflow: hidden } ins {     color: #607D8B;
    text-decoration: none;
    font-weight: bold; } a img { border: 0 } @media screen and (max-width:772px) { body { background: none; margin-top: 0; max-width: none; padding-right: 0 } } #logo { background: url() no-repeat; margin-left: -5px } @media only screen and (min-resolution:192dpi) { #logo { background: url() no-repeat 0% 0%/100% 100%; -moz-border-image: url() 0 } } @media only screen and (-webkit-min-device-pixel-ratio:2) { #logo { background: url() no-repeat; -webkit-background-size: 100% 100% } } #logo { display: inline-block; height: 54px; width: 150px } button { transition: .3s; 
    background: #607D8B;
    color: white;
    border: 0px;
    padding: 8px;
    font-size: 15px;
    margin-top: 10px;
    border-radius: 4px;
    box-shadow: 0 0 2px 0 rgba(0, 0, 0, .2), 0 6px 90px 0 rgba(0, 0, 0, .1);
    min-width: 150px;
    user-select: unset !important; border: 2px solid #607D8B; outline:none; font-weight: bold;
 } button:hover { background: white;  border: 2px solid #607D8B; color:#607D8B; }  </style>
  <a <a style="
    margin-left: -45px;
"><svg id=logo aria-hidden="true" focusable="false"
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124" role="img">
    <g transform="translate(0,109) ">
        <path d="M84,-39.203125L80.5,-35L46.921875,-35L43,-39.203125L43,-68.9375L46.921875,-72L80.5,-72L81.375,-71.015625L67.515625,-57.3125Q65.4375,-59,63.5,-59Q58,-59,58,-53.515625Q58,-48,63.5,-48Q69,-48,69,-53.421875Q69,-54.875,68.28125,-56.03125L82.3125,-70.375L84,-68.9375L84,-68.359375L84,-39.203125ZM94,-85.71875L93.40625,-85L77.5625,-85L77,-85.71875L77,-90L77.5625,-90L86.625,-92L86.625,-92L85.90625,-92L77.5625,-92L77,-92L77,-94L51,-94L51,-92L50.21875,-92L41.328125,-92L40.796875,-92L40.796875,-90.671875L50.234375,-90.671875L51,-90L51,-85.71875L50.21875,-85L34.53125,-85L34,-85.71875L34,-99L43.15625,-109L50.21875,-109L51,-108.484375L51,-102L58,-102L58,-104L53.578125,-104L53,-104.640625L53,-108.484375L53.578125,-109L74.3125,-109L75,-108.484375L75,-104.640625L74.3125,-104L70,-104L70,-102L77,-102L77,-108.484375L77.5625,-109L84,-109L94,-99L94,-98.421875L94,-85.71875ZM94,-8L84,1L77.5625,1L77,0.40625L77,-6L70,-6L70,-4L74.3125,-4L75,-3.484375L75,0.484375L74.3125,1L53.578125,1L53,0.484375L53,-3.484375L53.5625,-4L58,-4L58,-6L51,-6L51,0.484375L50.21875,1L43.15625,1L34,-8L34,-22L34.578125,-22L50.21875,-22L51,-21.6875L51,-17L50.21875,-17L41.28125,-16L41.28125,-16L41.859375,-16L50.21875,-16L51,-15.640625L51,-14L77,-14L77,-15.640625L77.5625,-16L85.796875,-16L86.53125,-15.640625L86.53125,-16.484375L77.578125,-16.484375L77,-17L77,-22L77.578125,-22L94,-22L94,-21.421875L94,-8ZM42,-46.875L41.859375,-46.296875L31,-35.46875L31,-11.9375Q31,-11.078125,30.40625,-11.078125Q30.265625,-11.078125,29.96875,-11.359375L17,-24.171875L17,-29L15,-29L15,-24.828125L14.40625,-24L9.75,-24L9,-24.828125L9,-34.265625L9.75,-35L14.40625,-35L15,-34.265625L15,-31L17,-31L17,-34.265625L17.59375,-35L22.40625,-35L23,-34.265625L23,-23.078125L24,-23.078125L24,-38.796875L34.671875,-48.171875L22.84375,-38L9.75,-38L9,-38.40625L9,-47.15625L9.75,-48L14.40625,-48L15,-47.15625L15,-40L17,-40L17.15625,-41.5L28.3125,-53.203125L41.328125,-53.203125L42,-52.65625L42,-46.875ZM41.328125,-54.671875L28.3125,-54.671875L17.15625,-66.484375L17,-68L15,-68L15,-60.21875L14.40625,-59.609375L9.75,-59.609375L9,-60.21875L9,-70L9.734375,-70L22.84375,-70L34.40625,-59.15625L24,-69.40625L24,-84L23,-84L23,-72.71875L22.40625,-72L17.59375,-72L17,-72.71875L17,-76L15,-76L15,-72.71875L14.40625,-72L9.75,-72L9,-72.71875L9,-82.328125L9.75,-83L14.40625,-83L15,-82.328125L15,-78L17,-78L17,-82.828125L29.96875,-95.640625Q30.265625,-95.9375,30.40625,-95.9375Q31,-95.9375,31,-95.078125L31,-71.875L42,-61.140625L42,-55.3125L41.328125,-54.671875ZM119,-85.71875L117.734375,-85L113.65625,-85L113,-85.71875L113,-90L110.828125,-90L110.828125,-87.578125Q110.828125,-87,110.40625,-86.859375L110.109375,-86.71875Q109.96875,-86.71875,109.6875,-87L89.234375,-107.828125Q88.9375,-108.109375,88.9375,-108.546875Q89.09375,-109,89.8125,-109L110.109375,-109L110.828125,-108.484375L110.828125,-102L113,-102L113,-108.484375L113.65625,-109L117.734375,-109L119,-108.484375L119,-98.421875L118.390625,-97.859375L113.65625,-97.859375L113,-98.421875L113,-100L110.828125,-100L110.828125,-92L113,-92L113,-95.375L113.65625,-96L117.734375,-96L119,-95.375L119,-85.71875ZM18.15625,-86.96875L17.578125,-86.6875Q17,-86.6875,17,-87.546875L17,-90L15,-90L15,-85.71875L14.40625,-85L9.75,-85L9,-85.71875L9,-95.375L9.75,-96L14.40625,-96L15,-95.375L15,-92L17,-92L17,-100L15,-100L15,-98.421875L14.40625,-97.859375L9.75,-97.859375L9,-98.421875L9,-108.484375L9.75,-109L14.40625,-109L15,-108.484375L15,-102L17,-102L17,-108.484375L17.59375,-109L38.140625,-109Q38.578125,-109,38.859375,-108.546875L38.859375,-108.25Q38.859375,-108.109375,38.578125,-107.8125L18.15625,-86.96875ZM118,0.484375L117.5,1L113.65625,1L113,0.484375L113,-5L110.828125,-5L110.828125,0.484375L110.109375,1L89.515625,1Q88.640625,1,88.640625,0.4375L88.9375,-0.140625L109.671875,-20.09375Q109.953125,-20.390625,110.09375,-20.390625L110.40625,-20.390625Q110.828125,-20.09375,110.828125,-19.65625L110.828125,-17L113,-17L113,-21.6875L113.65625,-22L118,-22L118,-21.4375L118,-11.9375L117.734375,-11L113.65625,-11L113,-11.9375L113,-15L110.828125,-15L110.828125,-7L113,-7L113,-8.5625L113.65625,-9.140625L118,-9.140625L118,-8.59375L118,0.484375ZM38.484375,-0.140625Q38.765625,0.703125,38.765625,0.5625Q38.765625,1,38.046875,1L17.59375,1L17,0.4375L17,-5L15,-5L15,0.484375L14.40625,1L9.75,1L9,0.484375L9,-8.5625L9.75,-9.140625L14.40625,-9.140625L15,-8.5625L15,-7L17,-7L17,-15L15,-15L15,-11.9375L14.40625,-11L9.75,-11L9,-11.9375L9,-21.6875L9.75,-22L14.40625,-22L15,-21.40625L15,-17L17,-17L17,-19.65625Q17,-19.953125,17.3125,-20.234375L17.59375,-20.390625Q17.890625,-20.390625,18.171875,-20.09375L38.484375,-0.140625ZM18.15625,-45.21875Q17.734375,-44.796875,17.4375,-44.796875Q17,-44.796875,17,-45.65625L17,-53L15,-53L15,-50.765625L14.40625,-50.0625L9.75,-50.0625L9,-50.765625L9,-56.859375L9.75,-57.625L14.40625,-57.625L15,-56.859375L15,-55L17,-55L17,-62.65625Q17,-63.375,17.4375,-63.375Q17.296875,-63.375,18.15625,-63.078125L26.6875,-54.359375Q26.96875,-54.140625,26.96875,-53.9375Q26.96875,-53.84375,26.6875,-53.625L18.15625,-45.21875Z" fill="#607D8B"/>
    </g> 
</svg>

  </a>
  <p><b style="color:#607D8B;">' . $title . '</br> <ins></ins>
  <p>The requested URL <code style="
    color: rgb(255 0 0 / 72%);
">' . $actual_link . '</code> ' . $message . ' </br> 
');
}

if (!empty($_GET['ERROR'])) {
    error_page($_GET['ERROR']);
} else {
    error_page(404);
}

?>