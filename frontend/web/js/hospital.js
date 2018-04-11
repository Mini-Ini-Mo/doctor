$(function(){
    
	var url = '/index.php?r=index/mingyi';
    //医院选择
    $(".hospital").change(function(){
        var hosp = $(this).val();
        
        if (!hosp || hosp == '') {
        	window.location.href=url;
        	return ;
        }
        var dep_id = getUrlParam('dep_id');
        
        if (dep_id) {
        	window.location.href=url+'&hosp='+hosp+'&dep_id='+dep_id; 
        } else {
        	window.location.href=url+'&hosp='+hosp;
        }
    });
    
    //科室
    $(".department").change(function(){
        var dep_id = $(this).val();
        
        if (!dep_id || dep_id == '') {
        	window.location.href=url;
        	return ;
        }
        var hosp = getUrlParam('hosp');
        
        if (hosp) {
        	window.location.href=url+'&dep_id='+dep_id+'&hosp='+hosp; 
        } else {
        	window.location.href=url+'&dep_id='+dep_id;
        }
    });
    
    
    
    
    
    

    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }
           
});