/*
	Copyright (C) 2009 - 2021 RiDi Cage Productions, Inc.
	Amersfoort, Utrecht, The Netherlands

	Licensed under MIT ( https://www.ridis.nl/index.php?p=license )
*/

setInterval(klok, 100);

function klok(klok) {
    var d = new Date();
    var klok = document.getElementById('klok').innerHTML = d.toLocaleTimeString();
}