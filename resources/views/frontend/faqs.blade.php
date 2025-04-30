@extends('frontend.layouts.app')

@section('content')
    {{-- New Code Start --}}
    <section class="Faq-page container-fluid">
        <div class="faq-c container">
         <h1>Frequently Asked Questions</h1>
     <div class="faq-container">
         <div class="faq-item">
             <div class="faq-question">
                 <span>How does it work?</span>
                 <img src=" {{ asset('frontend/Brandflaire/assest/images/plus.png')}}" class="icon plus" alt="plus">
             </div>
             <div class="faq-answer">
                 We offer a 30-day return policy for unused items in their original packaging. Contact our support team to initiate a return.
             </div>
         </div>
         <div class="faq-item">
             <div class="faq-question">
                 <span>How does it work?</span>
                 <img src=" {{ asset('frontend/Brandflaire/assest/images/plus.png')}}" class="icon plus" alt="plus">
             </div>
             <div class="faq-answer">
                 Standard shipping typically takes 3-5 business days within the US. International shipping may take 7-14 business days.
             </div>
         </div>
         <div class="faq-item">
             <div class="faq-question">
                 <span>How does it work?</span>
                 <img src=" {{ asset('frontend/Brandflaire/assest/images/plus.png')}}" class="icon plus" alt="plus">
             </div>
             <div class="faq-answer">
                 Yes, our customer support team is available 24/7 via email, phone, or live chat to assist you.
             </div>
         </div>
         <div class="faq-item">
           <div class="faq-question">
               <span>How does it work?</span>
               <img src=" {{ asset('frontend/Brandflaire/assest/images/plus.png')}}" class="icon plus" alt="plus">
           </div>
           <div class="faq-answer">
               Yes, our customer support team is available 24/7 via email, phone, or live chat to assist you.
           </div>
       </div>
      
     </div>
 
     </div>
     </section>
 
@endsection

@section('script')
@endsection
