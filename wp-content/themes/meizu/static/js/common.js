// JavaScript Document
function _(ID){
	return document.getElementById(ID);
}

//匹配所有英文、数字
/*var text = $("p"）;
text.replace(/[\w]/g,function(word){return "<em class='wordclass'>" + word + "</em>"})*/


function searchEvent(isFocus){
	var box = _('searchBox');
	var self = _('s');
	if(isFocus){
		box.className='searchBgHover';
		if(self.value=='搜索') self.value='';
	}else{
		box.className='searchBg';
		if(self.value=='') self.value='搜索';
	}
}

function checkform(){
    var comment=_('comment').value;
	if (comment=='' || comment=='说点什么'){
		return
	}
}

$(function(){
	$("#articlelist").find('.entry-content').find('.alignnone').attr('height','none');
	
	$("#articlelist").find('.article_content').find('.alignnone').attr('height','none');
	
	
});

//兼容ie浏览器下显示input提示文字
function showName(isFocus){
	var self = _('author');
	if(isFocus){
		if(self.value=='姓名') self.value='';
	}else{
		if(self.value=='') self.value='姓名';
	}
}
//兼容ie浏览器下显示input提示文字
function showEmail(isFocus){
	var self = _('email');
	if(isFocus){
		if(self.value=='邮箱') self.value='';
	}else{
		if(self.value=='') self.value='邮箱';
	}
}

