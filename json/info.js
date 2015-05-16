$(function(){

	//HTMLを初期化
	$("table.tbl tbody").html("");

	//HTMLを生成
	$.getJSON("http://ec2-52-68-154-199.ap-northeast-1.compute.amazonaws.com/users.json", function(data){
		$(data).each(function(){
			$('<tr>'+
			  '<th>'+this.name+'</th>'+
			  '<td class="label"><span class="' + this.star + '">' +
			  this.comment + '</span></td>'+
		'</tr>').appendTo('table.tbl tbody');
		})
	})
});
