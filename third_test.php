<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- chatjs requirements -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="chatjs/ChatJs/js/jquery.autosize.js"></script>
    <link rel="stylesheet" href="chatjs/Styles/styles.css"/>

    <!-- chatjs files-->
    <script src="chatjs/ChatJs/js/jquery.chatjs.utils.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.adapter.servertypes.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.adapter.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.adapter.demo.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.window.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.messageboard.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.userlist.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.pmwindow.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.friendswindow.js"></script>
    <script src="chatjs/ChatJs/js/jquery.chatjs.controller.js"></script>
    <link rel="stylesheet" href="chatjs/ChatJs/css/jquery.chatjs.css"/>

    <script type="text/javascript">
        $(function () {
            $.chat({
                // your user information
                userId: 1,
                // id of the room. The friends list is based on the room Id
                roomId: 1,
                // text displayed when the other user is typing
                typingText: ' is typing...',
                // title for the rooms window
                roomsTitleText: 'Rooms',
                // title for the 'available rooms' rab
                availableRoomsText: 'Available rooms',
                // text displayed when there's no other users in the room
                emptyRoomText: "There's no one around here. You can still open a session in another browser and chat with yourself :)",
                // the adapter you are using
                chatJsContentPath: '/basics/chatjs/',
                adapter: new DemoAdapter()
            });
        });
    </script>

</head>
<body>
</body>
</html>
