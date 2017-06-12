<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Paypal;
use App\Order;
use PDF;
use App\Bill;
use App\Downpayment;
use App\Products;
use View;
class PaypalController extends Controller
{
    

    private $_apiContext;

    public function __construct()
    {
         $this->middleware('auth');
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'live',
            'service.EndPoint' => 'https://api.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

   
    public function payPremium()
    {
        return view('payPremium', compact('downpayments', $downpayments));
    }

    public function getCheckout(Request $request)
    {
        $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

        $amount = PayPal:: Amount();
        $amount->setCurrency('USD');
        $amount->setTotal($request->input('pay'));

        $transaction = PayPal::Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Buy Premium '.$request->input('type').' Plan on '.$request->input('pay'));

        $redirectUrls = PayPal:: RedirectUrls();
        $redirectUrls->setReturnUrl(route('getDone'));
        $redirectUrls->setCancelUrl(route('getCancel'));

        $payment = PayPal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;

        return redirect()->to( $redirectUrl );
    }

    public function getDone(Request $request)
    {
        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = PayPal::getById($id, $this->_apiContext);

        $paymentExecution = PayPal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        
        print_r($executePayment);
    }

    public function getCancel()
    {
        return redirect()->route('payPremium');
    }

     public function pdfview(Request $request,$prodId)
    {


        
        $bill = Bill::find($prodId);

        View::share('bill', $bill);

        if($request->has('download')){
            $pdf = PDF::loadView('pdf');

            
             $pdf->setPaper('letter', 'portrait');
           
           // $pdf->render();
            return $pdf->stream("receipt.pdf", array("Attachment"=>false));

           //return $pdf->setPaper('A4', 'landscape')->download('receipt.pdf');
        }

        //return view('pdfview');
    }

     public function pdfview2(Request $request,$prodId)
    {


        
        $product = Products::find($prodId);
        View::share('product', $product);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview2');

            
             $pdf->setPaper('letter', 'portrait');
           
           // $pdf->render();
            return $pdf->stream("receipt.pdf", array("Attachment"=>false));

           //return $pdf->setPaper('A4', 'landscape')->download('receipt.pdf');
        }

        //return view('pdfview');
    }

     public function contract(Request $request,$ordId)
    {


        
        $order = Order::find($ordId);
        View::share('order', $order);

        if($request->has('download')){
            $pdf = PDF::loadView('contract');

            
             $pdf->setPaper('letter', 'portrait');
           
           // $pdf->render();
            return $pdf->stream("contract.pdf", array("Attachment"=>false));

           //return $pdf->setPaper('A4', 'landscape')->download('receipt.pdf');
        }

        //return view('pdfview');
    }

}