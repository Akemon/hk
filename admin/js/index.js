$(function () {
    $.get('../server/userList.php',function (data) {
        if(data.code ==0){
            alert("查询错误");
        }else{
            var table = $(".content .table tbody");
            table.html("");
            // console.log(data);
            $.each(data.message,function (index,item) {
                console.log(item);
                table.append("<tr>");
                table.append("<td>"+item['id']+"</td>");
                table.append("<td>"+item['account']+"</td>");
                table.append("<td>"+item['nickname']+"</td>");
                table.append("<td> <a href=\"edit.php?id=1\" class=\"btn btn-primary\">编辑</a>\n" +
                    "                    <a href=\"delete.php?id=1\" class=\"btn btn-danger\">删除</a></td>")
                table.append("</tr>")
            })
        }
    })
})