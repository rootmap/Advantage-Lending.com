@extends('site.layout.master')
@section('title','Careers')
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
    .carrer p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .carrer ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
    }
    .carrer-open{
        margin-top: 3.5rem;
        margin-bottom: 4.5rem;
        color: #000;
    }
    .carrer-open h1{
        margin-bottom: 1.5rem;
        font-family: adelle,serif;
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 3px solid #FF741A;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Carrers</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2 col-sm-12">
                    <div class="carrer">
                        <h4>Join the team at Oasis Financial and grow your career while making a difference for others</h4>
                        <p><span class="s1">Oasis Financial and our partner companies <a class="color_or" href="https://www.keyhealth.net/Home/" target="_blank" rel="noopener noreferrer"><span class="s2">Key Health</span></a> and <a class="color_or" href="https://www.accidentmeds.com/" target="_blank" rel="noopener noreferrer"><span class="s2">AccidentMeds</span></a> work hard every day to connect accident victims with medical care and the funds they need to pay bills while waiting for a lawsuit to settle. Since our founding in 1996, we’ve helped more than 250,000 consumers, and built relationships with more than 10,000 medical providers and 14,000 attorneys across the country. And we’re growing fast.</span></p>
                        <h4>We want people who want to grow.</h4>
                        <p><span class="s1">Grow personal talents and abilities. Grow a team. Help grow our business. At Oasis, you can grow in our energetic, entrepreneurial environment that values a strong work ethic, creativity, and care for others. We believe that best-in-class employees provide best-in-class services to our customers.</span></p>
                        <h4>If this sounds like you, join us! Oasis offers a full suite of competitive benefits.</h4>
                        <ul>
                            <li class="p1">Healthcare plans that include medical, dental and vision</li>
                            <li class="p1">401(k) with employer match</li>
                            <li class="p1">100% Company-paid life insurance</li>
                            <li class="p1">Short- and long-term disability</li>
                            <li class="p1">FSAs and pre-tax commuter program</li>
                            <li class="p1">Paid holidays, paid time off and more</li>
                            <li class="p1">BBB A+ rating</li>
                            <li class="p1">Four-star Trustpilot rating</li>
                         </ul>


                    </div>
                    <div class="carrer-open">
                        <h1>Current Openings</h1>
                        <p><b>Business Development Manager, Major Accounts (Arizona)&nbsp; </b>Market demands require that we accelerate our growth trajectory with a new Business Development Manager, Major Accounts position in Arizona. This role will build and grow relationships with new regional and national medical providers. Candidates should be goal-oriented, motivated and persistent. This is a remote sales position and candidates should expect to be on the road weekly. The ideal candidate will be based in Phoenix.&nbsp; <a class="color_or" href="https://www.linkedin.com/jobs/view/1688881851?trk=cap_redirect" target="_blank" rel="noopener noreferrer">See full job description and application.</a></p>
                        <hr>
                        <p><b>Business Development Manager, Midwest (MI/OH)&nbsp; </b>Oasis is seeking experienced and ambitious candidates for an Outside Sales role in the Midwest. Qualified candidates will earn commission, in addition to annual salary, for the product of the relationships they manage and cultivate. Qualified candidates should be road warriors who excel at building new relationships and strengthening existing ones. Legal experience would be an asset for this role, but is not required. Outside sales experience is required. Ideal candidates will be based in Detroit or Cleveland and have market knowledge of the Michigan and Ohio markets. <a class="color_or" href="https://www.linkedin.com/jobs/cap/view/1545236272/?pathWildcard=1545236272&amp;trk=mcm" target="_blank" rel="noopener noreferrer">See full job description and application.</a></p>
                        <hr>
                        <p><b>Business Development Manager, Major Accounts- Mid-Atlantic (VA/MD)&nbsp; </b>This role will build and grow relationships with new regional and national medical providers. Candidates should be goal-oriented, motivated and persistent. This is a remote sales position and candidates should expect to be on the road weekly. The ideal candidate will be based in the Virginia or Maryland metro area. . <a class="color_or" href="https://www.linkedin.com/jobs/cap/view/1840991333/?pathWildcard=1840991333&amp;trk=mcm" target="_blank" rel="noopener noreferrer">See full job description and application.</a></p>
                        <hr>
                        <p><b>Business Development Manager, West (Los Angeles, CA)&nbsp; </b>The Business Development Manager position will be responsible for promoting and selling services to law firms to generate incremental revenue for the company. Success will be based upon developing and implementing sales and operational strategies to drive business, expand relationships and improve efficiencies between the company, law firms, medical providers, and other strategic partners. Ideal candidates will be based in the Los Angeles, California area and have market knowledge of California and surrounding states. . <a class="color_or" href="https://www.linkedin.com/jobs/view/1657061210?trk=cap_redirect" target="_blank" rel="noopener noreferrer">See full job description and application.</a></p>
                        <hr>
                        <p><b>Director of Broker Relationships (Rosemont, IL)&nbsp; </b>Market demands require that we find a Director of Broker Relationships to build and grow relationships and cultivate strong partnerships. This position will be responsible for growing existing broker relationships while developing new ones. Candidates should be goal-oriented, motivated and persistent. This position is based in Oasis’s Rosemont, Illinois office, but other locations will be considered for strong candidates.&nbsp; <a class="color_or" href="https://www.linkedin.com/jobs/cap/view/1745363974/?pathWildcard=1745363974&amp;trk=mcm" target="_blank" rel="noopener noreferrer">See full job description and application.</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection