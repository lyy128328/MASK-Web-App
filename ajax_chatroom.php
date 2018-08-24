<html>
<head>
    <meta charset="UTF-8" />
    <style>
        table,tr,td{border:1px dashed}
        table{width:100%;height:100%}
        #showMsgHere{width:100%;height:100%;font-size:20px;resize:none;}
    </style>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <script>
    function sendMsg(){
		
		
        $.post("ajax_chatroom_insert.php","nickname="+$("#nickname").val()+"&msg="+$("#msg").val());
        $("#msg").val("");
    }
    
    function showMsg(){
        $("#showMsgHere").load(
            "ajax_chatroom_disp.php", "",
            function(){}
        );
    }
     
    $(function(){
		
        setInterval("showMsg();", 700);
 
        $("#msg").bind("keydown",
            function(e){
                if(e.which==13){
                    sendMsg();
                }
            }
        )
    })
    </script>
</head>
<body bgcolor="#ccccff">
 
<table>
    <tr height="90%"><td><textarea id="showMsgHere" disabled="disabled"></textarea></td></tr>
    <tr><td>
        <form>
            <input type="text" id="nickname" placeholder="暱稱" style="width:5em;height:2em">
            <input type="text" id="msg" placeholder="訊息" style="width:70em;height:2em">
            <input type="button" value="送出" onclick="sendMsg();">
        </form>
    </td></tr>
</table>
 
</body></html>