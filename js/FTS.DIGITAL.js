/*
	© Команда FTS.DIGITAL, 2018
	Все права защищены.
*/

	$(document).ready(function(){
		var counterMax = $('.banner .items .item').length;
		var counter = 0;
		setInterval(function(){

			if(counter == counterMax){
				counter = 1;
				$(".banner .items .item").removeClass("active");
				$(".banner .items .i"+counter).addClass("active");
			}
			else{
				counter++;
				$(".banner .items .item").removeClass("active");
				$(".banner .items .i"+counter).addClass("active");
			}
			
		}, 5000);



		var Banner_Counter1 = 0;
		var Banner_Counter_Max = $('.adv_block .items .item').length;
		setInterval(function(){

			if(Banner_Counter1 == Banner_Counter_Max){
				Banner_Counter1 = 1;
				$(".adv_block .items .item").removeClass("active");
				$(".adv_block .items .i"+Banner_Counter1).addClass("active");
			}
			else{
				Banner_Counter1++;
				$(".adv_block .items .item").removeClass("active");
				$(".adv_block .items .i"+Banner_Counter1).addClass("active");
			}
			
		}, 5000);
	});

	var Interface = {
		OpenFeedbackForm: function(){
			$(".FeedBackForm").fadeIn(300);
		},
		CloseFeedbackForm: function(){
			$(".FeedBackForm").fadeOut(300);
		}
	};

	function Interface_OpenAdvokatFBForm1(){
		$(".AdvokatFB_Form_Shadow").fadeIn(300);
		$(".AdvokatFB_Form").fadeIn(500);
	}
	function Interface_CloseAdvokatFBForm1(){
		$(".AdvokatFB_Form").fadeOut(300);
		$(".AdvokatFB_Form_Shadow").fadeOut(500);
	}

	function Advokats_ChangeList(intel){
		$(".servicesblock2 .center .advkts").css("display", "none");
		$(".servicesblock2 .center .advokats" + intel).css("display", "block");
		$(".servicesblock2 .advk_menu a").removeClass("active");
		$(".servicesblock2 .advk_menu .i" + intel).addClass("active");
	}

	function Medical_Report_Open(id){
		if(id != ""){
			var name = $(".page1 .med_list .n" + id + " .name span").html();
			var address = $(".page1 .med_list .n" + id + " .address span").html();
			$(".AdvokatFB_Form .setervalue").html(name);
			$(".AdvokatFB_Form_Shadow").fadeIn(300);
			$(".AdvokatFB_Form").fadeIn(500);
		}
	}
	function Medical_Report_Close(){
		$(".AdvokatFB_Form").fadeOut(300);
		$(".AdvokatFB_Form_Shadow").fadeOut(500);
	}

	function Open_Obrazovanie_FeedBack(id){
		var name = $(".obrazovanie .table_block .item" + id + " .name span").html();
		var address = $(".obrazovanie .table_block .item" + id + " .address span").html();
		$(".AdvokatFB_Form .setervalue").html(name);
		$(".AdvokatFB_Form_Shadow").fadeIn(300);
		$(".AdvokatFB_Form").fadeIn(500);
	}

	function Close_Obrazovanie_FeedBack(){
		$(".AdvokatFB_Form").fadeOut(300);
		$(".AdvokatFB_Form_Shadow").fadeOut(500);
	}
	
	function PleaderSearch(){
		var Search = $(".advokats1 .search").val();
		$.post("php/PleaderSearch.php", {Search:Search}, function(data){
			$(".advokats1 .table_block").html(data);
		});
	}
	function PleaderOrgSearch(){
		var Search = $(".advokats2 .search").val();
		$.post("php/PleaderOrgSearch.php", {Search:Search}, function(data){
			$(".advokats2 .table_block").html(data);
		});
	}
	function MedicalSearch(){
		var Search = $(".servicesblock2 .search").val();
		$.post("php/MedSearch.php", {Search:Search}, function(data){
			$(".servicesblock2 .med_list").html(data);
		});
	}
	function EducationSearch(){
		var Search = $(".obrazovanie .search").val();
		$.post("php/EduSearch.php", {Search:Search}, function(data){
			$(".obrazovanie .table_block").html(data);
		});
	}















	/*
		var counters = 0;
		function Test(){
		
				columnTh1 = 1; 
				columnTh2 = 2; 
				columnTh3 = 3; 
				columnTh4 = 4; 

				var td_1 = $(".resource tr:first td:nth-child("+ columnTh1 +")").html();
				var td_2 = $(".resource tr:first td:nth-child("+ columnTh2 +")").html();
				var td_3 = $(".resource tr:first td:nth-child("+ columnTh3 +")").html();
				var td_4 = $(".resource tr:first td:nth-child("+ columnTh4 +")").html();

				if(td_1 != "" && td_1 != "undefined"){
					$.post("php/Add_td.php", {td_1:td_1, td_2:td_2, td_3:td_3, td_4:td_4}, function(data){
						console.log(data + " :: " + counters);
						if(data == "ok"){
							Test();
						}
					});
				}
				$(".resource tr:first").remove();

				counters++;
		}
	*/