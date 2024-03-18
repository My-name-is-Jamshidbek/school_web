@extends('layouts.layout')
@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Toshkent tibbiyot akademiyasi Urganch filiali akademik litseyi rahbariyati</h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
{{--                    <th>Unvon</th>--}}
                    <th>F.I.O</th>
                    <th>Tug‘ilgan kuni</th>
                    <th>Tug‘ilgan joy</th>
                    <th>Vazifasi</th>
{{--                    <th>Boshlangan sana</th>--}}
{{--                    <th>Tugash sana</th>--}}
                    <th>Rasmi</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Sultanova Shaxlo Kaxramon qizi</td>
                        <td>13.04.1992</td>
                        <td>Xorazm viloyati,  Xonqa tumani</td>
                        <td>Bo`lim boshlig`i</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Xudayberganov Dilmurod Tuxtabaevich</td>
                        <td>10.03.1986</td>
                        <td>Xorazm viloyati,  Hazorasp tumani</td>
                        <td>Direktor o`rinbosari</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_1.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Atamuratov Ilxomboy Bekdurdievich</td>
                        <td>14.05.1973</td>
                        <td>Xorazm viloyati,  Hazorasp tumani</td>
                        <td>Ijrochi direktori</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_2.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Quranboyova Gulnoza Baxtiyorovna</td>
                        <td>17.06.1984</td>
                        <td>Xorazm viloyati,  Urganch tumani</td>
                        <td>Hodimlar bo`limi noziri</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/profile.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Egamov Elyorbek Komilovich</td>
                        <td>05.09.1991</td>
                        <td>Xorazm viloyati,  Qo`shko`pir tumani</td>
                        <td>Biologiya fani o`qituvchisi</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_3.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Matkarimov Akbar Muso o‘g‘li</td>
                        <td>12.11.1996</td>
                        <td>Xorazm viloyati,  Urganch shahri</td>
                        <td>Moliya, Iqtisod ishlari bo`yicha direktor o`rinbosari (MIBDO`)</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_4.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Sabirov Shakir Ergashovich</td>
                        <td>12.12.1985</td>
                        <td>Xorazm viloyati, Bog`ot tumani</td>
                        <td>Tabiiy fanlar kafedra mudiri</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_5.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Saparov Buronbek Rajabovich</td>
                        <td>22.07.1972</td>
                        <td>Xorazm viloyati, Hazorasp tumani</td>
                        <td>O`quv ishlari bo`yicha direktor o`rinbosari</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_6.png')}}" width=50px alt="Foto"></td>
                    </tr>
                    <tr>
    {{--                    <td>Podpolkovnik</td>--}}
                        <td>Yusupov Qodirberdi Botirovich</td>
                        <td>15.03.1966</td>
                        <td>Xorazm viloyati, Xonqa tumani</td>
                        <td>Xarbiy chaqiriqqa tayyorgarlik raxbari</td>
    {{--                    <td>27.03.2008 y</td>--}}
    {{--                    <td>31.12.2022 y</td>--}}
                        <td><img src="{{asset('fasset/images/img_7.png')}}" width=50px   alt="Foto"></td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->
    <x-layouts.footer></x-layouts.footer>
@endsection
