@section('footer')
<style type="text/css">
.footer a{
      color: #222;
      text-decoration: none;
      /*text-transform: uppercase;*/
      /*font-size: 0.9em;*/
      font-weight: 700; */
      padding: 5px 10px;
      /*display: block;*/
    }
    .footer h3{
      color:black;
    }
    form{
      color:black;
    }
    </style>
  <div class="footer broke-endless-pages">
    <div class="main-container">
      <div class="row">
      
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <h3>
            Support 
          </h3>
          <ul>
            <li>
              <a class="inline" href="mailto:contact@businessbugs.in">
                 &#9993; contact@businessbugs.in
              </a>
            </li>
          </ul>
        </div>
        
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <h3>
            Information
          </h3>
          <ul>
            <li>

              <a href="/aboutus">
                About us
              </a>
        
            </li>
            <li>
              <a href="http://businessbugs.blogspot.in/">
                Blog
              </a>
            </li>
            <li>
              <a href="/contactus">
                Contact us
              </a>
              
            </li>
            <li>
              <a href="/terms">
                Terms &amp; Conditions
              </a>
              
            </li>
            
          </ul>
        </div>  
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <h3>
            Stay in touch
          </h3>
          <ul>
            <li>
                <form role="form" method="post" enctype="multipart/form-data" action="/subscriptions">
                  <input type="email" name="subscription_email" class="textarea text-center" placeholder="Email">
                  <button class="btn subscribe_btn" type="submit">
                    Subscribe 
                    <i class="fa fa-long-arrow-right">
                    </i>
                  </button>
                </form>
            </li>
          </ul>
          
       </div>
      </div><!--/.row-->
        <p class="text-muted text-center">
          Designed & Developed by: <a href="https://linkedin.com/in/abhatia2107">Abhishek Bhatia</a>, <a href="http://in.linkedin.com/pub/shefali-agarwal/7a/548/661">Shefali Agarwal</a>, <a href="http://in.linkedin.com/pub/prerna-jain/a9/8b5/4a0">Prerna Jain</a>, Kuldeep Meena
        </p>
    </div><!--/.container-->
  </div><!--/.footer-->
@show