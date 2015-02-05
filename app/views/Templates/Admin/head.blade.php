@section("head")
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="Hobbyix Website">
    <meta name="author" content="Abhishek">
    <meta property="og:image" content="/assets/images/home/banner.jpg">
    <title>Hobbyix Admin Portal</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href=""/assets/css/bootstrap-theme.min.css"">
    <link rel="stylesheet" type="text/css" href="/assets/css/normalize-3.0.2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui-1.11.2.min.css" id="jquery-ui-style-css" media="all">
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <link href="/assets/css/adminstyle.css" rel="stylesheet">
    <link href="/assets/css/plugins/morris.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> -->
    <script src="/assets/js/jquery-1.11.2.min.js"></script>
    <script src="/assets/js/jquery-2.1.1.min.js"></script>
    <script src="/assets/js/jquery-ui-1.10.4.min.js"></script>
    <script  src="/assets/js/bootstrapValidator-0.5.3.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>   
    <script>

        $(document).ready(function(){
            
            $('.edit-trigger').click(function(){
            $(this).next('.edit-content').slideToggle();
            $(this).toggleClass('active');
            
        });
            $('#cancel').click(function(){
                $('#login-content').toggle();
               
            });
            $('.cancel2').click(function(){
                $('.edit-content').slideUp();
            });
          $('.login-trigger').click(function(){
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');          
            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
              else $(this).find('span').html('&#x25BC;')
            })
        });
    </script>
@show
