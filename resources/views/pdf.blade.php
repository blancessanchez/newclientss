<html>
<head>
<title>Invoice Receipt | S. Tabios Software Solutions</title>
  <style>
  body {
          font-family: Times New Roman, sans-serif;
        }
    .sales{
      font-size: 20px;
      color: #00008B;
    }
    .bill{
      width: 50%;
      float-left;
    }
    .sales1{
      width: 50%;
      float: left;
    }
    .whole{
      width: 100%;
    }
    table{
      width: 100%;
      border-collapse: collapse;
    }

  </style>
</head>
<div>
    <div>
      <div >
        <img src="../images/logochat.png" width="100px" height="105px"/>
      </div>
       <div>
        <p><b>S. TABIOS SOFTWARE SOLUTIONS</b><br> 123 Holy Family Avenue, Holy Family Village, <br> Bagumbayan, Taguig City<br>1636 Philippines</p>
        <hr>
        <p class="sales"> INVOICE RECEIPT</p>
        <!-- <div class="row">
          <div class="bill">
            <p><b>BILL TO</b><br>Symbol Solutions</p>
            
          </div>
          <div class="sales1">
            <p><b>SALES NO.</b></p>
          </div>
          <hr>
        </div> -->
          <table>
            <tr>
              <th style="text-align: left;"">BILL TO</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th style="text-align:left;">SALES NO.: {{$bill->billId}}</th>
            </tr>
            <tr>
              <td><b>{{Auth::user()->acctName}}</b><br> {{Auth::user()->email}} <br> {{Auth::user()->acctContact}} </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><b>Date:</b> <?= date('F d, Y',strtotime($bill->billDate))?></td>
            </tr>
          </table>
          <hr>
        <!--   <div>
            <p><b>CUSTOMER NAME:</b> {{Auth::user()->acctName}} <br> <b>EMAIL ADDRESS:</b> {{Auth::user()->email}}<br><b>CONTACT:</b> {{Auth::user()->acctContact}}</p>
          </div> -->
          <hr>
          <table border="1px">
            <tr>
              <th>ACTIVITY</th>
              <th>DESCRIPTION</th>
              <th>RATE</th>
              <th>AMOUNT</th>
            </tr>
            <tr>
              <td>{{$bill->item}}</td>
              <td>{{$bill->billCategory}}</td>
              <td>P {{$bill->billAmount}}.00</td>
              <td>P {{$bill->billAmount}}.00</td>
            </tr>
          </table>
          <br><br><br><br><br><br>
          <div style="width:100%">
            <div style="width:50%">
              <p style="font-size:12px;"><b>GENERAL AGREEMENT</b></p>
              <p style="font-size:12px;">The company and the client agrees that the billing stated above will be paid by the client using either of the payment methods available in the website.</p>
            </div>
            <br><br>
            <div style="width:50%">
              <p style="font-size:12px;"><b>CLIENT'S SIGNATURE</b></p>
              <p style="font-size:12px;">________________________________________________<br>{{Auth::user()->acctName}}</p>
            </div>
          </div>

       </div>
          <br><br><br><br><br><br><br><br>
          <p style="font-size:12px"><b>For more information, suggestions, inquiries, message the company at http://localhost:8000/home</b></p>
  </div>
</div>
