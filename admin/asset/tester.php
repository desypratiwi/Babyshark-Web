<script type="text/javascript">
    jQuery(document).ready(function() {

            "use strict";            
            
            // Init custom navigation animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

                    // Init Demo settings 
                    $('#p0 .panel-control-color').click();

                    // Init Demo settings 
                    $('#p1 .panel-control-title').click();

                    // Init Demo smoothscroll
                    $('.tray-nav a').smoothScroll({
                        offset: -145
                    });

                    // Create an example admin panel filter
                    $('#admin-panel-filter a').on('click', function() {
                        var This = $(this);
                        var Value = This.attr('data-filter');

                        // Toggle any elements whos name matches
                        // that of the buttons attr value
                        $('.admin-filter-panels').find($(Value)).each(function(i, e) {
                            if (This.hasClass('active')) {
                                $(this).slideDown('fast').removeClass('panel-filtered');
                            } else {
                                $(this).slideUp().addClass('panel-filtered');
                            }
                        });
                        This.toggleClass('active');
                    });

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });
            
            $("#view").show();
            $("#form").hide();
            $("#detail").hide();
            
            $("#sidebar_left").css("min-height",$("#grid-0").height()+80);            
        });
                        
        function inputKuisioner(kodeJadwal,type){
            $.post( "http://sakti.stiki.ac.id/index.php/kuisionare/input",{ id:kodeJadwal,type:type }, function( data ) {
              $('.panel-quiz').remove();
              $("#panel-body-content" ).html( data );
              $("#alert_pane").html($("#alert_nilai").html());
              $("#sidebar_left").css("min-height",$("#grid-0").height()+80);
            });
        }
        
        function lihatKuisioner(kodeJadwal,type){
            $.post( "http://sakti.stiki.ac.id/index.php/kuisionare/lihat",{ id:kodeJadwal,type:type }, function( data ) {
              $('.panel-quiz').remove();
              $( "#panel-body-content" ).html( data );
            });
        } 
    </script>    
    <script type="text/javascript">
        var _appId="SAKTI",
        _site_url="http://sakti.stiki.ac.id/index.php",
        _comnt_interval=10000;
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();
            
            // Init Theme Core    
            Demo.init();
            
            //FlotCharts.init();
            //demoHighCharts.init();
            setToggleRightMenu();
        });
                
        function setToggleRightMenu(){
            var classname="kuisionare";
            
            var currentClass=document.getElementById(classname).getAttribute('class');
            if(currentClass!=null)
            var newClass='active';else var newClass=currentClass+' active';
            document.getElementById(classname).setAttribute('class',newClass);
            
            var parentClass = $("#"+classname).parent().prev().get(0).getAttribute('class');
            if(parentClass=='accordion-toggle')
                $("#"+classname).parent().prev().get(0).setAttribute('class','accordion-toggle menu-open');
                
            var parentParentClass = $("#"+classname).parent().parent().parent().prev().get(0).getAttribute('class');
            if(parentClass=='accordion-toggle')
                $("#"+classname).parent().parent().parent().prev().get(0).setAttribute('class','accordion-toggle menu-open');
        } 
        
        function validation(id){
            var frm = document.getElementsByClassName('frm_validation');
            var passed=true;
            
            for(i=0;i<frm.length;i++){
                if(frm[i].getAttribute('id')==id){
                    var elm=frm[i].getElementsByTagName('INPUT');
                    
                    for(j=0;j<elm.length;j++){
                        var elmId=elm[j].getAttribute('id');
                        if(elm[j].getAttribute('required')=='required'){
                            if($("#"+elmId).val()=='' || $("#"+elmId).val().length==0){
                                $("#"+elmId).parent().next().remove();
                                $("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-times-circle"></i> Oops!</p></div>');
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                                passed=false;
                            }else{
                                $("#"+elmId).parent().next().remove();
                                $("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>');
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-success');
                            }
                        }   
                    }
                    var elm=frm[i].getElementsByTagName('SELECT');
                    
                    for(j=0;j<elm.length;j++){
                        var elmId=elm[j].getAttribute('id');
                        //alert(elmId);
                        if(elm[j].getAttribute('required')=='required'){
                            if($("#"+elmId).val()=='' || $("#"+elmId).val()==null){
                                $("#"+elmId).parent().next().remove();
                                $("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-times-circle"></i> Oops!</p></div>');
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                                passed=false;
                            }else{
                                $("#"+elmId).parent().next().remove();
                                $("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>');
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-success');
                            }
                        }   
                    }
                    
                    var elm=frm[i].getElementsByTagName('TEXTAREA');
                    
                    for(j=0;j<elm.length;j++){
                        var elmId=elm[j].getAttribute('id');
                        //alert(elmId);
                        if(elm[j].getAttribute('required')=='required'){
                            if($("#"+elmId).val()=='' || $("#"+elmId).val().length==0){
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                            }else{
                                var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group');
                            }
                        }   
                    }
                }
                //alert(frm[i].getAttribute('id'));
            }
            return passed;
        }
        
        function openErrorTab(){
            var id=$("div.has-error:first").parent().parent().parent().parent().get(0).getAttribute('id');
            //document.getElementById("head_tab1").getAttribute('class');
            document.getElementById("head_tab1").setAttribute('class','');
            document.getElementById("head_tab2").setAttribute('class','');
            document.getElementById("head_tab3").setAttribute('class','');
            document.getElementById("head_tab4").setAttribute('class','');
            
            document.getElementById("tab1").setAttribute('class','tab-pane p15');
            document.getElementById("tab2").setAttribute('class','tab-pane p15');
            document.getElementById("tab3").setAttribute('class','tab-pane p15');
            document.getElementById("tab4").setAttribute('class','tab-pane p15');
            
            document.getElementById(id).setAttribute('class','tab-pane active p15');
            //alert(curActive);
            document.getElementById('head_'+id).setAttribute('class','active');
            //alert(test);
        }
        
        function reset_validation(){
            $(".val-help-block").remove();
            $(".form-group").removeClass('has-error');
            $(".form-group").removeClass('has-success');
            return false;
        }
        
    </script>
