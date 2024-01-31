
window.onload = function(){
	var nav = document.getElementsByClassName("nav")
	var nav_li = document.getElementsByClassName("nav_li")
	var Dumbo_Photo = document.getElementById('Dumbo_Photo')
	/* Insert your javascript here */
	var Avengers_Photo = document.getElementById('Avengers_Photo');
	var Top_End_Wedding_Photo = document.getElementById('Top_End_Wedding_Photo');
	var Dumbo_Photo = document.getElementById('Dumbo_Photo');
	var The_Happy_Prince_Photo = document.getElementById('The_Happy_Prince_Photo');
	var Synopsis_Vedio_one = document.getElementById('Synopsis_Vedio_one');
	var Synopsis_Vedio_two = document.getElementById('Synopsis_Vedio_two');
	var Synopsis_Vedio_three = document.getElementById('Synopsis_Vedio_three');
	var Synopsis_Vedio_four = document.getElementById('Synopsis_Vedio_four');
	var dn_div = document.getElementsByClassName('dn_div')
	var booking_button = document.getElementById("booking_button")
	var live_common = document.getElementsByClassName('live_common')
	var buttons = document.getElementsByClassName('button')
	var live_time = document.getElementsByClassName('live_time')
	var live_hour = document.getElementsByClassName('live_hour')
	var live_days = document.getElementsByClassName('live_days')
	var mask = document.getElementsByClassName('mask')
	var Movie_time = document.getElementsByClassName('Movie_time')
	var Movie = 'EndGame Pg'
	document.querySelector('.live_id').value = 'EndGame Pg'
	document.querySelector('.mobile').value = ''
	var i;
	var seats_sta_price=0,
	seats_stp_price=0,
	seats_stc_price=0,
	seats_fca_price=0,
	seats_fcp_price=0,
	seats_fcc_price=0,

	sta_discount = 19.8,
	stp_discount = 17.5,
	stc_discount = 15.3,
	fca_discount = 30,
	fcp_discount = 27,
	fcc_discount = 24;
	var modileValue = ''
	document.querySelector('.card').onkeyup = function (event) {
		if((event.which >= 48 && event.which <= 57) ||(event.which >= 96 && event.which <= 105 )){
		  var v = this.value;
		  if(/\S{5}/.test(v)){
			  this.value = v.replace(/\s/g, '').replace(/(.{4})/g, "$1 ");
		  }
		};
	 }
	document.querySelector('.order_form').onsubmit = function(){
		document.querySelector('.mobile').value = '04' + modileValue
	}
	// document.querySelector('#order').onsubmit = function(){

	// }
	//  document.querySelector('.nav_one').onclick = function(){
	// 	window.scrollTo({
	// 		top:1000
	// 	})
	//  }

	document.querySelector(".seats_sta").onchange = function(e){
		console.log(e.target.value)
		seats_sta_price = e.target.value * sta_discount
		total()
	}
	document.querySelector(".seats_stp").onchange = function(e){
		console.log(e.target.value)
		seats_stp_price = e.target.value * stp_discount
		total()
	}

	document.querySelector(".seats_stc").onchange = function(e){
		console.log(e.target.value)
		seats_stc_price = e.target.value * stc_discount
		total()
	}
	document.querySelector(".seats_fca").onchange = function(e){
		console.log(e.target.value)
		seats_fca_price = e.target.value * fca_discount
		total()
	}
	document.querySelector(".seats_fcp").onchange = function(e){
		console.log(e.target.value)
		seats_fcp_price = e.target.value * fcp_discount
		total()
	}
	document.querySelector(".seats_fcc").onchange = function(e){
		console.log(e.target.value)
		seats_fcc_price = e.target.value * fcc_discount
		total()
	}
	document.querySelector('.name').onkeyup =  function(){
		document.querySelector('.name').value = document.querySelector('.name').value.replace(/[^a-zA-Z]/g, "")
	}
	document.querySelector('.mobile').onkeydown =  function(){
		if((event.which >= 48 && event.which <= 57) ||(event.which >= 96 && event.which <= 105 )){
		  var v = this.value;
		  if(/\S{5}/.test(v)){
			  this.value = v.replace(/\s/g, '').replace(/(.{4})/g, "$1 ");
		  }
		};
		modileValue = this.value
	}
	date()
	function date(){
		  //获取完整的年份(4位,1970-????)
		  var myDate = new Date();
		  var year = myDate.getFullYear();
		  year = year.toString().substr(2, 2);
		  document.querySelector('.expiry-right').setAttribute("min",year);
		// var years = Number(myDate.getFullYear()) + 2;
		// var mouth = '0' + myDate.getMonth();       //获取当前月份(0-11,0代表1月)
		// var date = myDate.getDate();        //获取当前日(1-31)
		// var nowDate = year + "-" + mouth
		// var lastDate = years + "-" + mouth + "-" + date
		// console.log(document.querySelector('.date').getAttribute('min'));
		// var now_date_value = document.querySelector('.date').getAttribute('min');

		// document.querySelector('.date').setAttribute("min",now_date_value);
		// // document.querySelector('.date').setAttribute("max",lastDate);
	}


	function total(){
		var total = seats_sta_price+
					seats_stp_price+
					seats_stc_price+
					seats_fca_price+
					seats_fcp_price+
					seats_fcc_price;
		console.log(total);
		document.querySelector('.total').innerHTML = total.toFixed(2)
	}
	for (i = 0; i < nav_li.length; i++) {
		nav_li[i].onclick = function () {
			for (var k = 0; k < nav_li.length; k++) {
				nav_li[k].style.backgroundColor = "#333";
			}
			this.style.backgroundColor = "black";
		    }
	}
	Avengers_Photo.onclick = function(){
		for (var k = 0; k < dn_div.length; k++) {
			dn_div[k].style.display = "none";
		}
		for (var k = 0; k < live_common.length; k++) {
			live_common[k].style.display = "none";
			console.log(live_common[k])
		}
		Movie = 'EndGame Pg'
		Synopsis_Vedio_one.style.display = "block"
		document.querySelector('.live1').style.display = "block"
		document.querySelector('.live_id').value = 'EndGame Pg'

	}

	Top_End_Wedding_Photo.onclick = function(){
		for (var k = 0; k < dn_div.length; k++) {
			dn_div[k].style.display = "none";
		}
		for (var k = 0; k < live_common.length; k++) {
			live_common[k].style.display = "none";
		}
		Movie = 'The End Wedding M'
		Synopsis_Vedio_two.style.display = "block"
		document.querySelector('.live2').style.display = "block"
		document.querySelector('.live_id').value = 'The End Wedding M'

	}

	Dumbo_Photo.onclick = function(){
		for (var k = 0; k < dn_div.length; k++) {
			dn_div[k].style.display = "none";
		}

		for (var k = 0; k < live_common.length; k++) {
			live_common[k].style.display = "none";
		}
		Movie = 'Dumbo Pg'
		Synopsis_Vedio_three.style.display = "block"
		document.querySelector('.live3').style.display = "block"
		document.querySelector('.live_id').value = 'Dumbo Pg'

	}
	The_Happy_Prince_Photo.onclick = function(){
		for (var k = 0; k < dn_div.length; k++) {
			dn_div[k].style.display = "none";
		}
		for (var k = 0; k < live_common.length; k++) {
			live_common[k].style.display = "none";
		}
		Movie = 'The Happy Prince R'
		document.querySelector('.live4').style.display = "block"
		Synopsis_Vedio_four.style.display = "block"
		document.querySelector('.live_id').value = 'The Happy Prince R'

	}
	function priceChange(){
		sta_discount = 14,
		stp_discount = 12.5,
		stc_discount = 11,
		fca_discount = 24,
		fcp_discount = 22.5,
		fcc_discount = 21;
	}
	function priceChangeOriginal(){
		sta_discount = 19.8,
		stp_discount = 17.5,
		stc_discount = 15.3,
		fca_discount = 30,
		fcp_discount = 27,
		fcc_discount = 24;
	}
	for (i = 0; i < buttons.length; i++) {
		buttons[i].index = i;
		buttons[i].onclick = function(e,k){

			var live_days_value = live_days[this.index].innerHTML
			var live_time_value = live_time[this.index].innerHTML
			/***
			 * 	live_time_value.indexOf('am') > 0
				live_time_value.indexOf('am') > 0 && live_days_value.trim() == "Monday" //周一上午不打折
				live_time_value.indexOf('am') > 0 && live_days_value.trim() == "Wednesday"//周三上午不打折
			l	ive_days_value.trim() == "Sunday" || live_days_value.trim() == "Saturday" 周6 日不打折
				*
			 */

			if(live_time_value.indexOf('am') > 0  ){
				if(live_days_value.trim() == "Tuesday" || live_days_value.trim() == "Thursday"||live_days_value.trim() == "Friday"||live_days_value.trim() == "Saturday"||live_days_value.trim() == "Sunday"){
					priceChangeOriginal()
					console.log('// No discount')
				}else{
					priceChange()
					console.log('// discount')
				}
			}else if(live_time_value.indexOf('pm') > 0  ){
				if(live_days_value.trim() == "Sunday" || live_days_value.trim() == "Saturday"){
						priceChangeOriginal()
						console.log('//saturday and sunday no discount')
					}else{
						console.log('// Monday to Friday discount')
						priceChange()
					}
				}

			document.querySelector('.live_day').value = live_days[this.index].innerHTML
			document.querySelector('.live_hour').value = live_time[this.index].innerHTML
			mask[0].style.display = 'block'
			Movie_time[0].innerHTML =  Movie + '-'+ this.innerHTML

		}
	}

	document.querySelector('.form_standard_close').onclick = function(){
		mask[0].style.display = 'none'
		document.querySelector(".seats_sta").value = 0
		document.querySelector(".seats_stp").value = 0
		document.querySelector(".seats_stc").value = 0
		document.querySelector(".seats_fca").value = 0
		document.querySelector(".seats_fcp").value = 0
		document.querySelector(".seats_fcc").value = 0
		document.querySelector('.total').innerHTML = 0
		seats_sta_price = 0
		seats_stp_price = 0
		seats_stc_price = 0
		seats_fca_price = 0
		seats_fcp_price = 0
		seats_fcc_price = 0
	}

}
