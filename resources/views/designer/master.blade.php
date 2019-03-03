<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
</head>

<body>
<form id="form1" action="/" method="post">
  <!--start bg_Topmenu-->
@include('designer.header')
  <!--end bg_header--> 
  <!--start bg_Container-->
  <div id="Container">
    <div id="Outer">
      <div id="Wrapper">
        <div id="SearchForm" class="home_search">
          <div id="SearchFormContainer" style="position:relative; z-index:10000;">
            <input id="ct1Search_ct100_txtSearch" class="search-input" type="text" autocomplete="off" onKeyUp="SearchInstant()" name="ctl00$ctlSearch$ctl00$txtSearch"/>
            <input id="ct1Search_ct100_btnSearch" class="search-button" type="submit" onClick="javascript:return OnSearchClick();" value="" name="ctl00$ctlSearch$ctl00$btnSearch"/>
          </div>
        </div>
        <!--end SearchForm-->
        <div id="cphpMain-Content">
          <div style="width:1170px; float:left;margin-bottom:15px;">
@include('designer.slide')
            <!--end top_right--> 
          </div>
          <div style="width:1170px;float:left;">
@include('designer.menu')
            <!--end menu_left--> 
            <!-- aaaaaaaaaaaaaaaaaaaaaa-->
@yield('content')
            <!-- end center_right--> 
          </div>

          <!-- end div width 1170px-->

          <!-- end class: bottom--> 
        </div>
      </div>
      <!--end Wrapper-->
      <div class="Clear"></div>
      <!--end clear--> 
    </div>
    <!--end Outer--> 
    
  </div>
  <!--end Container--> 
  <!--start Footer-->
@include('designer.footer')
  <!--end Footer-->
</form>
<!--end form-->
</body>
</html>
