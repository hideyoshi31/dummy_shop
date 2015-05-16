$.ajax({
    url: 'http://ec2-52-68-154-199.ap-northeast-1.compute.amazonaws.com/users.json',
    type: 'GET',
    dataType: "jsonp",
    jsonp: 'callback',
    timeout: 10000,
    success: function(user){
        $(user).each(function(){
          $('<tr>'+
            '<th>'+this.id+'</th>'+
            '<td>'+this.name+'</td>'+
            '<td>'+this.comment+'</td>'+
            '</tr>').appendTo('table.tbl tbody');
          })
    },
    error: function(user) {
        //取得失敗時の処理
      alert('error');
    },
    complete: function(user) {
        //最後に実行する処理
      alert('complete!');
    }
});


