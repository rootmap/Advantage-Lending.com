@extends('site.layout.master')
@section('title','State-Specific Licenses')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url('{{asset('module/images/extra/What-can-I-do-for-you_-590052924_6248x4912.jpeg')}}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
            margin-bottom: 0;
    }

    .serviceHoberBox{
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }

    .serviceHoberBox:hover {
       -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    .color_or{
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    .licenses p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .licenses ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 3px solid #FF741A;
    }
    .f-18 * {
        font-size: 1.5rem;
        text-align: justify
    }
    .licenses a{
        color: #FF741A;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">State-Specific Licenses</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 ">
                    <div class="licenses f-18">
                        <p class="p1"><span class="s1">Oasis Financial is able to provide legal funding in most states. If you live in Arkansas, Kansas, Kentucky, Maryland, Nevada, North Carolina, or West Virginia, we’re not able to provide pre-settlement funding at this time. For other state-specific information, see the listings below.</span></p>
                        <p class="p1"><span class="s1">Oasis provides funding for Workers’ Compensations cases in Connecticut, Florida, Georgia, Illinois, Indiana, Louisiana, Missouri, New Mexico, Ohio, Oklahoma, and South Carolina, only.</span></p>
                        <p>&nbsp;</p>
                        <h2>Alabama</h2>
                        <p class="p1"><span class="s1">OFLC, LLC is licensed to make loans by the State of Alabama State Banking Department.</span></p>
                        <p class="p3"><span class="s2"><a href="http://www.oasisfinancial.com/wp-content/uploads/2020/03/License-Certificate-AL-2019-2020...pdf" target="_blank" rel="noopener noreferrer">Alabama License</a></span><span class="s1">&nbsp;</span></p>
                        <p>&nbsp;</p>
                        <h2>Illinois</h2>
                        <p class="p1"><span class="s1">Oasis Legal Finance, LLC is licensed in the state of Illinois in accordance with the Consumer Installment Loan Act. In Illinois, Oasis considers lawsuit financing a limited recourse loan.<br> </span></p>
                        <p>&nbsp;</p>
                        <h2>Missouri</h2>
                        <p class="p1"><span class="s1">Oasis Legal Finance, LLC is licensed to make loans by the State of Missouri Division of Finance.</span></p>
                        <p class="p3"><span class="s2"><a href="http://www.oasisfinancial.com/wp-content/uploads/2020/03/Website-License-and-Disclosure-2019-2020.pdf" target="_blank" rel="noopener noreferrer">Missouri Disclosure and License</a></span><span class="s1">&nbsp;</span></p>
                        <p>&nbsp;</p>
                        <h2>Oklahoma</h2>
                        <p class="p1"><span class="s1">OFLC, LLC is a Supervised Lender in the state of Oklahoma.</span></p>
                        <p class="p3"><span class="s2"><a href="/wp-content/uploads/2019/02/OK_License_Expires12-31-2021.pdf" target="_blank" rel="noopener noreferrer">Oklahoma License</a></span></p>
                        <p>&nbsp;</p>
                        <h2>South Carolina</h2>
                        <p class="p1"><span class="s1">Oasis Legal Finance, LLC is licensed to make loans by the state of South Carolina State Board of Financial Institutions.</span></p>
                        <p class="p1"><span class="s3"><a href="https://www.oasisfinancial.com/wp-content/uploads/2019/10/SC_ConsumerPamplet-rev.-10.2019.pdf" target="_blank" rel="noopener noreferrer">South Carolina Consumer Pamphlet</a></span><span class="s1"> for information about your rights as a borrower</span></p>
                        <p class="p3"><span class="s2"><a href="/wp-content/uploads/2019/02/SC_Disclosure_Expires1-31-2019.pdf" target="_blank" rel="noopener noreferrer">South Carolina Maximum Rate Disclosure</a></span></p>
                        <p class="p3"><span class="s2"><a href="/wp-content/uploads/2019/02/SC_License_Expires1-31-2019.pdf" target="_blank" rel="noopener noreferrer">South Carolina Licensing Information</a></span></p>
                    </div>
                 </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection