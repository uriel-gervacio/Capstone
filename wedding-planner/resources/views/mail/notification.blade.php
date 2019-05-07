<body>
    <table class="wrapper" >
        <tr>
            <td>
                <table class="content" >
                    <tr>
                        <td class="header">
                            <img src="data:image/png;base64,{{base64_encode(file_get_contents(resource_path('logo.png')))}}" alt="logo"  width= 100%>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body">
                            <table class="inner-body" >
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell" >
                                     
                                        <p>Dear {{$name}},</p>
                                        <p>
                                            We at St. Juliana are pleased to share the responsibility of helping you prepare for your wedding day, and, more importantly, a lifetime together. 
                                            Your marriage, lived out, is an expression of your love and commitment to one another.
                                            It is important that plentiful time and effort be given in preparing for your marriage.
                                            The following guidelines are meant to provide you with important information to be used in the planning of your wedding.
                                            This guide is designed to assist you as you prepare to celebrate your marriage in the context of the Christian community. 
                                            Please take time to read these guidelines carefully.
                                            As you prepare for your wedding day, it is our hope that you will prayerfully reflect on the life
                                            you are beginning together and how your faith can strengthen your marriage.
                                            God bless you on your journey.
                                        </p>
                                        <p><a target="_blank" href="https://www.youtube.com/watch?v=uLV5wwCPRUk&feature=youtu.be">For more help on registering, please click here.</a></p>
                                        <table class="action" align="center" >
                                            <tr>
                                                <td align="center" >
                                                    <table  >
                                                        <tr>
                                                            <td align="center">
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            <a href= "http://ec2-54-174-138-237.compute-1.amazonaws.com/{{$registrationUrl}}" class="button button-primary">Register</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <p>Regards,<br>St. Juliana Parish</p>
                                        <table class="subcopy" >
                                            <tr>
                                                <td>
                                                    <p>If you’re having trouble clicking the "Register" button, copy and paste the URL below
                                                        into your web browser: <br>
                                                        http://ec2-54-174-138-237.compute-1.amazonaws.com/{{$registrationUrl}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <table class="footer" >
                                <tr>
                                    <td class="content-cell" >
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
