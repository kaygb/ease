// 返回顶部
    ease_top.onclick = function(){
        var top = document.body.scrollTop || document.documentElement.scrollTop
        scrollBy(0,-top);
    }
// end-返回顶部

// 自适应导航栏
    console.log("以下是自适应导航栏按钮的点击状态");
    //导航栏点击
    console.log("按钮checked:" );
    
    var ease_menu_input = document.getElementById("chk"); 
    var ease_main_nav = document.getElementById("main-nav")
    console.log(ease_menu_input.checked);
    ease_menu_input.onclick = function(){
        if (ease_menu_input.checked == true){
            ease_main_nav.style.right="0";
        console.log("按钮checked:true");
        }else{
            ease_main_nav.style.right="-120%";
            console.log("按钮checked:false");
        }
    }
    console.log("导航栏代码块结束，当前运行正常"); 
//end-自适应导航栏

//控制台输出当前时间
    function startTime(){//创建一个函数
		var date=new Date();//获取系统时间
		var y=date.getFullYear();//获取当前年份
		var m=date.getMonth();//获取当前月份
		var d=date.getDate();//获取天数
		var h=date.getHours();//获取时
		var mm=date.getMinutes();//获取分
		var s=date.getSeconds();//获取秒ss
		console.log("当前时间："+y+"-"+(m+1)+"-"+d+" "+h+":"+mm+":"+s);
    
	}
	startTime();
//end-控制台输出当前时间