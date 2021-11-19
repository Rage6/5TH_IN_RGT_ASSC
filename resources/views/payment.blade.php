@extends('layouts.master')

@section('membership_payment_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/payment/360_payment.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/payment/375_payment.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/payment/414_payment.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/payment/768_payment.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/payment/1366_payment.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/payment/1920_payment.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/payment/past_1920_payment.css">
  <script>

  </script>
  @include ('footer.style')
@stop

@section('membership_payment_content')
  <div class="main">
    <div class="content">
      <div class="mainTitle">
        <div class="partTitle">
          Part 2:
        </div>
        Membership Payment
      </div>
      <div class="regSection redSection">
        <div>
          Your registration information has been submitted!
        </div>
        <div>
          However, member applications are only approved when the applicant a) meets the <a href="{{ url('/registration') }}">basic requirements</a> and b) has paid their selected membership fee. Upon approval, you will be contacted by the Association. If you are not approved for whatever reason, you will be reimbursed for your payment.
        </div>
      </div>
      <div class="regSection greenSection">
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="2TL33CPPA6SVQ">
          <table>
            <tr>
              <td>
                <input type="hidden" name="on0" value="Term of Membership">
                Term of Membership
              </td>
            </tr>
            <tr>
              <td>
                <select name="os0">
                  <option value="Active Duty 1 Year">
                    Active Duty 1 Year $5.00 USD
                  </option>
                  <option value="1 Year">
                    1 Year $15.00 USD
                  </option>
                  <option value="2 Years">
                    2 Years $25.00 USD
                  </option>
                  <option value="5 Years">
                    5 Years $60.00 USD
                  </option>
                  <option value="Life Time Up to age 49">
                    Life Time Up to age 49 $200.00 USD
                  </option>
                  <option value="Life Time Age 50 - 64">
                    Life Time Age 50 - 64 $150.00 USD
                  </option>
                  <option value="Life Time - 65 years and older">
                    Life Time - 65 years and older $100.00 USD
                  </option>
                </select>
              </td>
            </tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/44_Yellow_CheckOut_Pill_Button.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
