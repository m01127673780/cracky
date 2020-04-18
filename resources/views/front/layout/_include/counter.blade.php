  <div class='main d-inline d-inline'>
                                    <button class='button_count down_count btn btn-info' title='Down'><i class='fa fa-minus'></i></button>
                                    <input class='counter' type="text" placeholder="value..." value='0' />    
                                    <button class='button_count button_count up_count btn btn-info' title='Up'><i class=' fa fa-plus icon_count_plus'></i></button>
                                 </div>
                           
                <script type="text/javascript">
                $(document).ready(function(){
                $('.button_count').click(function(e){
                var button_classes, value = +$('.counter').val();
                button_classes = $(e.currentTarget).prop('class');        
                if(button_classes.indexOf('up_count') !== -1){
                value = (value) + 1;            
                } else {
                value = (value) - 1;            
                }
                value = value < 0 ? 0 : value;
                $('.counter').val(value);
                });  
                $('.counter').click(function(){
                $(this).focus().select();
                });
                });
                </script>
                <style type="text/css">
                .main {
                margin-left: 5px;
                position: absolute;
                left: 0;
                bottom: 33px;
                }
                .counter {
                width: 45px;  
                border-radius: 0px !important;
                text-align: center;
                height: 33px;
                padding: 13px 0 19.5px 0;
                }
                .up_count {

                margin-left: -6px;
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
                } 
                .down_count {

                margin-right: -4px;
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
                }
                </style>
                </div><!--col-md-6-->

                <div class="col-md-6" style=" ">
                <div id='el'></div><!---->

                <script>
                var urls = [
                '1.png',
                '3.png',
                '2.png',
                '3.png',

                ];
                var options = {
                //thumbLeft:true,
                //thumbRight:true,
                //thumbHide:true,
                //width:300,
                //height:500,
                };
                $('#el').zoomy(urls,options);
                </script>
                <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();

                </script>
                   