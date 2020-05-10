@extends('site.layout.master')
@section('title','Types of funding')
@section('css')
    <style type="text/css">
        .innerpage-titlebar {
            padding: 80px 0 80px;
            position: relative;
            background: url('{{asset('module/images/extra/What-can-I-do-for-you_-590052924_6248x4912.jpeg')}}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .section-area {
            overflow-x: hidden;
            padding: 60px 0 60px;
        }
        .left-block{
            margin-left: 45px;
        }
        .py-5.bg-info {
            /*margin-bottom: -60px;*/
            margin-top: 20px;
        }
        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .separator-left.wow {
            visibility: visible !important;
        }
        .separator-left {
            position: relative;
            display: inline-block;
            margin-bottom: 4rem;
        }
        h2, h3, h4, h5, h6, .h2, .h3, .h4, .h5, .h6 {
            text-transform: none !important;
        }
        h2, .h2 {
            font-size: 3.5rem;
        }
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h4, .h5, .h6 {
            /*margin-bottom: .5rem;*/
            font-family: adelle,serif;
            font-weight: 700;
            line-height: 1.2;
            color: #133d8d;
        }
        .pt-3, .py-3 {
            padding-top: 1rem !important;
        }
        .pb-3, .py-3 {
            padding-bottom: 1rem !important;
        }
        .pt-3, .py-3 {
            padding-top: 1rem !important;
        }
        .d-inline-block {
            display: inline-block !important;
        }
        .border-white {
            border-color: #fff !important;
        }
        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }
        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .feat .d-inline-block {
            min-width: 70px;
        }
    </style>
@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Types of funding</h3>
        </div>
    </section>
    <section class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <p style="padding: 0 80px 80px 80px;">There are several types of lawsuit funding for those stuck in lengthy legal proceedings. Oasis can help connect you to the right solution for your situation.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 py-5 bg-info">
                    <div class="row justify-content-center">
                        <div class="col-md-10 left-block" style=" margin-bottom: 60px;">
                            <h2 class="h2 separator-left wow animated" style="visibility: visible;">Pre-settlement Funding</h2>
                            <p>While a case is in progress, a cash advance payment may be needed for various expenses. 
                                <a href="{{ url('how-it-works/') }}">Pre-settlement funding</a> 
                                offers you <strong>a portion of your settlement upfront</strong>, allowing faster relief from overdue bills and financial worries. Also known as a lawsuit advance or settlement loan, this money is taken from what a plaintiff is estimated to receive once their case is finalized.</p><p>Pre-settlement funding is a good option for you if:</p>
                                <div class="border-bottom border-white d-flex align-items-center py-3 feat">
                                    <div class="d-inline-block"> 
                                        <svg width="32px" height="36px" viewBox="0 0 32 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>slingarm</title> 
                                            <desc>Created with Sketch.</desc> 
                                            <g id="Wireframe" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Wireframe-//-type-of-funding" transform="translate(-67.000000, -692.000000)"> <g id="slingarm" transform="translate(68.000000, 693.000000)"> <g id="noun_Arm-Sling_409290_000000" fill="#133D8D" fill-rule="nonzero" stroke="#133D8D" stroke-width="0.5"> 
                                                <path d="M6.69364865,25.9653256 C6.35797297,25.9653256 6.08554054,26.2306047 6.08554054,26.5583488 L6.08554054,33.3267209 C6.08554054,33.6540698 6.35797297,33.9197442 6.69364865,33.9197442 C7.02932432,33.9197442 7.30175676,33.6540698 7.30175676,33.3267209 L7.30175676,26.5583488 C7.30175676,26.2306047 7.02932432,25.9653256 6.69364865,25.9653256 Z M25.2004054,17.3475116 L19.6483784,16.2883721 C18.825,16.1310233 18.7418919,14.8904186 18.7447297,14.3586744 C20.7847297,12.7215349 22.0893243,9.86632558 22.0893243,6.99253488 C22.0893243,3.18137209 18.9097297,0.0806511628 15.0016216,0.0806511628 C11.0927027,0.0806511628 7.9127027,3.18137209 7.9127027,6.99253488 C7.9127027,9.86593023 9.21689189,12.7207442 11.2564865,14.3578837 C11.2597297,14.8888372 11.1766216,16.1310233 10.3528378,16.2883721 L4.8,17.3475116 C1.58554054,17.9606977 0.152027027,19.922814 0.152027027,23.7086744 L0.152027027,33.3267209 C0.152027027,33.6540698 0.424459459,33.9197442 0.760135135,33.9197442 C1.09581081,33.9197442 1.36824324,33.6540698 1.36824324,33.3267209 L1.36824324,23.7086744 C1.36824324,19.755186 3.13013514,18.8739535 5.03351351,18.5114186 L10.5855405,17.4526744 C12.2683784,17.1312558 12.5582432,15.1944419 12.4633784,14.0605814 C12.4621622,13.8795116 12.3758108,13.7047674 12.2217568,13.590907 C10.3422973,12.2052093 9.12810811,9.61488372 9.12810811,6.99253488 C9.12810811,3.83527907 11.7628378,1.26669767 15.0008108,1.26669767 C18.2383784,1.26669767 20.8722973,3.83527907 20.8722973,6.99253488 C20.8722973,9.61448837 19.6585135,12.2044186 17.7794595,13.5901163 C17.6436486,13.6905349 17.5568919,13.8419535 17.5410811,14.008 C17.4458108,14.9991395 17.6468919,16.6615814 18.8635135,17.2676512 L17.5978378,26.5658605 L14.7535135,26.5658605 C12.6745946,26.5658605 10.9832432,28.2156512 10.9832432,30.243 C10.9832432,32.2707442 12.6745946,33.9201395 14.7535135,33.9201395 L26.0777027,33.9201395 C28.1562162,33.9201395 29.8475676,32.2703488 29.8475676,30.243 L29.8475676,23.7086744 C29.847973,19.922814 28.4148649,17.9606977 25.2004054,17.3475116 Z M16.7586486,32.7336977 L14.7543243,32.7336977 C13.3459459,32.7336977 12.2002703,31.6164419 12.2002703,30.2426047 C12.2002703,28.8691628 13.3459459,27.7515116 14.7543243,27.7515116 L17.4368919,27.7515116 L16.7586486,32.7336977 Z M17.9858108,32.7336977 L20.0493243,17.5732558 L23.4985135,18.2311163 L25.6378378,32.7336977 L17.9858108,32.7336977 Z M28.6317568,30.2426047 C28.6317568,31.3539302 27.8813514,32.2972326 26.8491892,32.6170698 L24.762973,18.4722791 L24.9672973,18.5114186 C26.8706757,18.8747442 28.6321622,19.755186 28.6321622,23.7086744 L28.6321622,30.2426047 L28.6317568,30.2426047 Z" id="Shape"></path> </g> <path d="M19.6311729,16.963554 L17.3129929,33.3660132 L26.2929469,33.3660132 L23.9674897,17.7681556 L19.6311729,16.963554 Z" id="Rectangle" stroke="#3DB200" stroke-width="1.8"></path> </g> </g> </g> </svg>
                                            </div> 
                                            You have been victim to an accident that’s not your fault
                                        </div>
                                        <div class="border-bottom border-white d-flex align-items-center py-3 feat">
                                            <div class="d-inline-block"> 
                                                <svg width="43px" height="43px" viewBox="0 0 43 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Mockup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Desktop-//-Homepage-" transform="translate(-135.000000, -1353.000000)" stroke-width="0.5"> <g id="How-We-Can-Help" transform="translate(-4.000000, 1029.000000)"> <g id="Group" transform="translate(134.000000, 237.000000)"> <g id="Get-Cash" transform="translate(6.000000, 88.000000)"> <g id="Icon"> <path d="M20.5,0 C9.19393939,0 0,9.19393939 0,20.5 C0,31.8060606 9.19393939,41 20.5,41 C31.8060606,41 41,31.8060606 41,20.5 C41,9.19393939 31.8060606,0 20.5,0 Z M20.5,39.3434343 C10.1050505,39.3434343 1.65656566,30.8949495 1.65656566,20.5 C1.65656566,10.1050505 10.1050505,1.65656566 20.5,1.65656566 C30.8949495,1.65656566 39.3434343,10.1050505 39.3434343,20.5 C39.3434343,30.8949495 30.8949495,39.3434343 20.5,39.3434343 Z" id="Shape" stroke="#133D8D" fill="#133D8D" fill-rule="nonzero"></path> <path d="M21.7031548,21 C21.7827925,20.7972973 21.8226114,20.5945946 21.8226114,20.3918919 C21.8226114,19.6216216 21.3846038,18.9324324 20.7076831,18.6486486 L20.7076831,6.81081081 C20.7076831,6.36486486 20.3493132,6 19.9113057,6 C19.4732981,6 19.1149283,6.36486486 19.1149283,6.81081081 L19.1149283,18.6486486 C18.4778264,18.972973 18,19.6216216 18,20.3918919 C18,21.4459459 18.8361962,22.3378378 19.9113057,22.3378378 C20.1502189,22.3378378 20.3891321,22.2972973 20.5882265,22.2162162 L25.6850416,26.7972973 C25.8443171,26.9189189 26.0434115,27 26.2026869,27 C26.4416001,27 26.6406945,26.9189189 26.79997,26.7162162 C27.078702,26.3918919 27.078702,25.8648649 26.7203322,25.5810811 L21.7031548,21 Z" id="Path" stroke="#3DB200" fill="#3DB200"></path> </g> </g> </g> </g> </g> </g> </svg></div> Your case is taking a long time to settle</div><div class="border-bottom border-white d-flex align-items-center py-3 feat"><div class="d-inline-block"> <svg width="38px" height="38px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>noun_bill_1213642_000000</title> <desc>Created with Sketch.</desc> <g id="Wireframe" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Wireframe-//-type-of-funding" transform="translate(-68.000000, -817.000000)" fill-rule="nonzero"> <g id="noun_bill_1213642_000000" transform="translate(68.000000, 817.000000)"> <path d="M31.6,3.99791667 L13.76,0.197916667 L12.44,6.25416667 L0,6.25416667 L0,37.8020833 L26.12,37.8020833 L26.12,35.0708333 L32.56,36.45625 L37.64,13.2208333 L31.6,3.99791667 Z M31.44,7.40208333 L34.4,11.9541667 L30.6,11.1229167 L31.44,7.40208333 Z M24.12,35.8229167 L1.96,35.8229167 L1.96,8.19375 L16.84,8.19375 L16.84,15.4375 L24.08,15.4375 L24.08,35.8229167 L24.12,35.8229167 Z M18.84,13.4583333 L18.84,9.61875 L22.72,13.4583333 L18.84,13.4583333 Z M31.04,34.1208333 L26.12,33.0520833 L26.12,29.33125 L28.08,29.7666667 L28.48,27.8666667 L26.08,27.3520833 L26.08,23.63125 L29.24,24.3041667 L29.64,22.4041667 L26.08,21.6520833 L26.08,17.93125 L30.44,18.88125 L30.84,16.98125 L26.08,15.9520833 L26.08,14.0916667 L18.24,6.33333333 L14.44,6.33333333 L15.24,2.57291667 L29.8,5.66041667 L28.28,12.6666667 L35.36,14.1708333 L31.04,34.1208333 Z" id="Shape" fill="#133D8D"></path> <rect id="Rectangle" fill="#133D8D" x="5.8" y="30.2416667" width="14.48" height="1.97916667"></rect> <rect id="Rectangle" fill="#133D8D" x="5.8" y="24.6604167" width="14.48" height="1.97916667"></rect> <path d="M8.76,18.8020833 C8.56,18.64375 8.44,18.4458333 8.4,18.2083333 L7,18.40625 C7.08,18.9604167 7.36,19.475 7.84,19.8708333 C8.16,20.1083333 8.48,20.30625 8.88,20.3854167 L8.88,21.73125 L10.28,21.73125 L10.28,20.425 C10.72,20.3458333 11.16,20.1083333 11.52,19.83125 L11.6,19.7520833 C12.16,19.1979167 12.44,18.4458333 12.4,17.69375 C12.36,16.9416667 11.96,16.2291667 11.36,15.79375 C10.8,15.3583333 10.24,15.2395833 9.8,15.1604167 C9.36,15.0416667 9.12,15.0020833 8.88,14.7645833 C8.64,14.5270833 8.52,14.2895833 8.52,14.0125 C8.52,13.775 8.68,13.5770833 8.8,13.4583333 C9.28,13.0625 10.08,13.1020833 10.52,13.4979167 C10.6,13.5770833 10.68,13.65625 10.72,13.775 L12.16,13.5770833 C12.04,13.18125 11.8,12.7854167 11.44,12.46875 C11.12,12.1916667 10.72,11.99375 10.28,11.875 L10.28,10.5291667 L8.88,10.5291667 L8.88,11.875 C8.52,11.99375 8.16,12.1520833 7.84,12.3895833 C7.84,12.3895833 7.84,12.3895833 7.8,12.4291667 L7.76,12.46875 C7.28,12.9041667 7.04,13.4583333 7,14.0125 C6.96,14.6458333 7.24,15.2791667 7.76,15.79375 C8.28,16.3083333 8.88,16.4666667 9.4,16.5854167 C9.76,16.6645833 10.12,16.74375 10.44,16.98125 C10.72,17.1791667 10.88,17.4958333 10.92,17.8520833 C10.96,18.2083333 10.8,18.5645833 10.52,18.8416667 C10.08,19.1979167 9.28,19.1979167 8.76,18.8020833 Z" id="Path" fill="#3DB200"></path> </g> </g> </g> 
                                                </svg>
                                            </div> You are struggling with debt due to living and medical expenses</div> 
                                            <a href="/apply-now/" class="btn btn-primary mt-4">Apply Now</a>
                                        </div>
                                    </div>
                    
                </div>
                <div class="col-md-5">
                   <div class="about-three-col">
                       <h3>Our Mission</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae quas officia reiciendis aut totam.</p>
                   </div>
                </div>
            </div>
        </div>
    </>

@endsection
@section('js')
    
@endsection